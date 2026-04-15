<?php

namespace App\Services;

use App\Models\KaruCrmLead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class KaruCrmService
{
  /**
   * Submit a new lead to the Karu CRM system and persist the result locally.
   *
   * Returns a structured result array:
   *   - success  (bool)   Whether Karu CRM accepted the lead.
   *   - duplicate (bool)  True when CRM flagged the lead as already existing.
   *   - crm_lead_id (string|null)  Lead ID assigned by Karu CRM.
   *   - message  (string) Human-readable outcome description.
   *   - lead     (KaruCrmLead) The persisted local record.
   *
   * @param  array $data  Validated lead data from the Form Request.
   * @return array
   */
  public function submitLead(array $data): array
  {
    $externalSourceId = Str::uuid()->toString();

    // Persist locally BEFORE the API call so we have an audit trail even on failure.
    $lead = KaruCrmLead::create([
      'external_source_id' => $externalSourceId,
      'name'               => $data['name'] ?? null,
      'phone'              => $data['phone'] ?? null,
      'email'              => $data['email'] ?? null,
      'mobile'             => $data['mobile'] ?? null,
      'city'               => $data['city'] ?? null,
      'street'             => $data['street'] ?? null,
      'province'           => $data['province'] ?? null,
      'suburb'             => $data['suburb'] ?? null,
      'post_code'          => $data['post_code'] ?? null,
      'remark_message'     => $data['remark_message'] ?? null,
      'meta'               => $data['meta'] ?? null,
      'status'             => KaruCrmLead::STATUS_PENDING,
    ]);

    $payload = $this->buildPayload($externalSourceId, $data);

    try {
      $response = Http::timeout(15)
        ->withHeaders(['Content-Type' => 'application/json'])
        ->post(config('services.karu_crm.endpoint'), $payload);

      $body = $response->json();

      return $this->processResponse($lead, $body);
    } catch (\Illuminate\Http\Client\ConnectionException $e) {
      // Network-level failure — mark lead as failed but don't lose it.
      Log::error('KaruCrmService: connection failed', [
        'external_source_id' => $externalSourceId,
        'error'              => $e->getMessage(),
      ]);

      $lead->update([
        'status'       => KaruCrmLead::STATUS_FAILED,
        'crm_response' => ['error' => $e->getMessage()],
      ]);

      return [
        'success'     => false,
        'duplicate'   => false,
        'crm_lead_id' => null,
        'message'     => 'Could not reach the CRM. The lead has been saved and can be retried.',
        'lead'        => $lead,
      ];
    }
  }

  // ---------------------------------------------------------------------------
  // Private helpers
  // ---------------------------------------------------------------------------

  /**
   * Build the JSON payload expected by Karu CRM.
   * Config values are injected here; data values come from the request.
   */
  private function buildPayload(string $externalSourceId, array $data): array
  {
    $payload = [
      'token'               => config('services.karu_crm.token'),
      'method'              => 'createLead',
      'external_system_uid' => config('services.karu_crm.external_system_uid'),
      'external_source_id'  => $externalSourceId,
      'instance_uid'        => config('services.karu_crm.instance_uid'),
      'campaign_uid'        => config('services.karu_crm.campaign_uid'),
      'lead_in_date'        => now()->format('d-M-Y H:i:s'),

      // Customer identity fields — all optional per spec (at least one required)
      'name'           => $data['name'] ?? null,
      'phone'          => $data['phone'] ?? null,
      'email'          => $data['email'] ?? null,

      // Extended address / contact fields
      'person_name'    => $data['name'] ?? null,
      'mobile'         => $data['mobile'] ?? null,
      'city'           => $data['city'] ?? null,
      'street'         => $data['street'] ?? null,
      'province'       => $data['province'] ?? null,
      'suburb'         => $data['suburb'] ?? null,
      'post_code'      => $data['post_code'] ?? null,

      'remark_message' => $data['remark_message'] ?? null,

      // meta must always be sent for website leads per the spec
      'meta' => $data['meta'] ?? new \stdClass(),
    ];

    // Strip null values to keep the payload clean, but always keep required fields.
    return array_filter($payload, fn ($value, $key) => in_array($key, [
      'token', 'method', 'external_system_uid', 'external_source_id',
      'instance_uid', 'campaign_uid', 'lead_in_date', 'meta',
    ]) || $value !== null, ARRAY_FILTER_USE_BOTH);
  }

  /**
   * Interpret the CRM response, update the lead record, and return a result array.
   */
  private function processResponse(KaruCrmLead $lead, ?array $body): array
  {
    if ($body === null) {
      Log::warning('KaruCrmService: empty response body', [
        'external_source_id' => $lead->external_source_id,
      ]);

      $lead->update([
        'status'       => KaruCrmLead::STATUS_FAILED,
        'crm_response' => ['error' => 'Empty response received from CRM.'],
      ]);

      return [
        'success'     => false,
        'duplicate'   => false,
        'crm_lead_id' => null,
        'message'     => 'The CRM returned an empty response.',
        'lead'        => $lead,
      ];
    }

    // CRM wraps the result in a `data` envelope:
    //   { "status": "success", "code": 200, "data": { "lead_uid": "...", ... } }
    $data      = $body['data'] ?? [];
    $crmLeadId = $data['lead_uid'] ?? $body['lead_id'] ?? $body['id'] ?? null;

    // Success = CRM said "success" with a 200 AND gave us back a lead UID.
    $success = ($body['status'] ?? null) === 'success'
      && ($body['code'] ?? null) === 200
      && $crmLeadId !== null;

    // Duplicate flag may appear at the top level or nested inside data.
    $isDuplicate = !empty($body['duplicate']) || !empty($data['duplicate']);

    $lead->update([
      'karu_lead_id'  => $crmLeadId,
      'status'        => match (true) {
        $isDuplicate  => KaruCrmLead::STATUS_DUPLICATE,
        $success      => KaruCrmLead::STATUS_SUCCESS,
        default       => KaruCrmLead::STATUS_FAILED,
      },
      'crm_response'  => $body,
    ]);

    if (! $success) {
      Log::warning('KaruCrmService: CRM rejected lead', [
        'external_source_id' => $lead->external_source_id,
        'crm_response'       => $body,
      ]);
    }

    return [
      'success'     => $success,
      'duplicate'   => $isDuplicate,
      'crm_lead_id' => $crmLeadId,
      'message'     => match (true) {
        $isDuplicate => 'Duplicate lead — CRM returned the existing lead ID.',
        $success     => 'Lead successfully submitted to Karu CRM.',
        default      => $body['message'] ?? 'CRM rejected the lead.',
      },
      'lead'        => $lead,
    ];
  }
}
