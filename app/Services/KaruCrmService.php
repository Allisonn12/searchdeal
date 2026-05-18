<?php

namespace App\Services;

use App\Models\KaruCrmLead;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class KaruCrmService
{
  private const ENDPOINT = 'https://stolencars.co.za/affiliate-hook.php';
  private const AFFILIATE_ID = 'searchadeal';
  private const TOKEN = 'sa-sc-2026-searchadeal';

  /**
   * Submit a new lead to the stolen-cars affiliate hook and persist the result locally.
   *
   * Returns a structured result array:
   *   - success  (bool)   Whether the affiliate hook accepted the lead.
   *   - duplicate (bool)  True when the affiliate hook flagged an existing lead.
   *   - crm_lead_id (string|null)  Lead ID assigned by the affiliate hook, if returned.
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
      'meta'               => $this->buildStoredMeta($data),
      'status'             => KaruCrmLead::STATUS_PENDING,
    ]);

    $payload = $this->buildPayload($data);
    $endpoint = $this->configValue('endpoint', self::ENDPOINT);

    try {
      $response = Http::timeout(15)
        ->acceptJson()
        ->asJson()
        ->post($endpoint, $payload);

      $body = $response->json();
      $responseBody = is_array($body) ? $body : $this->buildNonJsonResponseBody($response, $endpoint);

      return $this->processResponse($lead, $responseBody, $response->successful(), $endpoint);
    } catch (ConnectionException $e) {
      // Network-level failure — mark lead as failed but don't lose it.
      Log::error('KaruCrmService: affiliate hook connection failed', [
        'external_source_id' => $externalSourceId,
        'endpoint'           => $endpoint,
        'error'              => $e->getMessage(),
      ]);

      $lead->update([
        'status'       => KaruCrmLead::STATUS_FAILED,
        'crm_response' => [
          'error'    => $e->getMessage(),
          'endpoint' => $endpoint,
        ],
      ]);

      return [
        'success'     => false,
        'duplicate'   => false,
        'crm_lead_id' => null,
        'message'     => 'Could not reach the affiliate hook. The lead has been saved and can be retried.',
        'lead'        => $lead,
      ];
    }
  }

  // ---------------------------------------------------------------------------
  // Private helpers
  // ---------------------------------------------------------------------------

  /**
   * Build the JSON payload expected by the stolen-cars affiliate hook.
   *
   * The API requires firstname/lastname rather than a single name field.
   * When the form submits a single "Full Name", we split on the first space
   * so that lastname remains optional as per the spec.
   */
  private function buildPayload(array $data): array
  {
    $meta = is_array($data['meta'] ?? null) ? $data['meta'] : [];

    [$firstname, $lastname] = $this->splitFullName($data['name'] ?? null);

    $payload = [
      'affiliate_id'  => $this->configValue('affiliate_id', self::AFFILIATE_ID),
      'token'         => $this->configValue('token', self::TOKEN),
      'firstname'     => $firstname,
      'lastname'      => $lastname,
      'phone'         => $data['phone'] ?? null,
      'email'         => $data['email'] ?? null,
      'vehicle_make'  => $data['vehicle_make'] ?? $meta['vehicle_make'] ?? null,
      'vehicle_model' => $data['vehicle_model'] ?? $meta['vehicle_model'] ?? null,
      'product'       => $data['product'] ?? $meta['product'] ?? null,
      'source_url'    => $data['source_url'] ?? $meta['source_url'] ?? null,
    ];

    // Always include credentials; omit only absent lead data.
    return array_filter($payload, fn ($value, $key) => in_array($key, [
      'affiliate_id', 'token',
    ], true) || $value !== null, ARRAY_FILTER_USE_BOTH);
  }

  /**
   * Split a full name string into [firstname, lastname|null].
   * "Thabo Nkosi"       → ['Thabo', 'Nkosi']
   * "Thabo"             → ['Thabo', null]
   * "Thabo van der Berg"→ ['Thabo', 'van der Berg']
   */
  private function splitFullName(?string $fullName): array
  {
    if ($fullName === null || trim($fullName) === '') {
      return [null, null];
    }

    $parts = explode(' ', trim($fullName), 2);

    return [$parts[0], $parts[1] ?? null];
  }

  /**
   * Preserve affiliate-specific fields locally without requiring schema changes.
   */
  private function buildStoredMeta(array $data): ?array
  {
    $meta = is_array($data['meta'] ?? null) ? $data['meta'] : [];

    foreach (['vehicle_make', 'vehicle_model', 'product', 'source_url'] as $field) {
      if (array_key_exists($field, $data) && $data[$field] !== null) {
        $meta[$field] = $data[$field];
      }
    }

    return $meta === [] ? null : $meta;
  }

  /**
   * Read optional config overrides while keeping the required affiliate defaults safe.
   */
  private function configValue(string $key, string $fallback): string
  {
    $value = config("services.karu_crm.{$key}");

    return is_string($value) && trim($value) !== '' ? $value : $fallback;
  }

  /**
   * Store enough non-JSON response detail for debugging without flooding logs/DB with full HTML pages.
   */
  private function buildNonJsonResponseBody(Response $response, string $endpoint): array
  {
    return [
      'error'        => 'Non-JSON response received from affiliate hook.',
      'endpoint'     => $endpoint,
      'status'       => $response->status(),
      'content_type' => $response->header('Content-Type'),
      'body_preview' => Str::limit(strip_tags($response->body()), 500),
    ];
  }

  /**
   * Interpret the affiliate hook response, update the lead record, and return a result array.
   */
  private function processResponse(KaruCrmLead $lead, array $body, bool $requestSucceeded, string $endpoint): array
  {
    $data      = is_array($body['data'] ?? null) ? $body['data'] : [];
    $crmLeadId = $data['lead_uid'] ?? $data['lead_id'] ?? $data['id'] ?? $body['lead_uid'] ?? $body['lead_id'] ?? $body['id'] ?? null;
    $httpStatus = is_int($body['status'] ?? null) ? $body['status'] : null;

    $status = strtolower((string) ($body['status'] ?? $body['result'] ?? ''));
    $explicitFailure = in_array($status, ['error', 'fail', 'failed', 'failure', 'rejected'], true)
      || ($body['success'] ?? null) === false;
    $success = $requestSucceeded && ! $explicitFailure;

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
      Log::warning('KaruCrmService: affiliate hook rejected lead', [
        'external_source_id' => $lead->external_source_id,
        'endpoint'           => $endpoint,
        'http_status'        => $httpStatus,
        'crm_response'       => $body,
      ]);
    }

    return [
      'success'     => $success,
      'duplicate'   => $isDuplicate,
      'crm_lead_id' => $crmLeadId,
      'message'     => match (true) {
        $isDuplicate => 'Duplicate lead — affiliate hook returned an existing lead.',
        $success     => 'Lead successfully submitted to the affiliate hook.',
        default      => $this->extractResponseMessage($body, $httpStatus),
      },
      'lead'        => $lead,
    ];
  }

  private function extractResponseMessage(array $body, ?int $httpStatus): string
  {
    if ($httpStatus === 404) {
      return 'Affiliate hook endpoint returned 404 Not Found. Verify the partner URL is deployed and correct.';
    }

    $message = $body['message'] ?? $body['error'] ?? null;

    if (is_string($message) && $message !== '') {
      return $message;
    }

    if (is_scalar($message)) {
      return (string) $message;
    }

    return 'Affiliate hook rejected the lead.';
  }
}
