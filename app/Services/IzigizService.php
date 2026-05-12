<?php

namespace App\Services;

use App\Models\IzigizLead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class IzigizService
{
  /**
   * Valid campaign codes supported by this integration.
   * Key = human-readable alias used internally.
   * Value = the exact LeadCampaignCode the Izigiz API expects.
   */
  public const CAMPAIGNS = [
    'digital'           => 'VT0001',
    'unbranded_warmup'  => 'VTWU0001',
    'warmup_cartrack'   => 'CTK0002',
  ];

  /**
   * Step 1 — persist the lead to the local database immediately.
   *
   * This is intentionally separated from the API call so the caller can
   * send the HTTP response to the browser BEFORE the external request runs.
   * The API call is made via callApi() registered in app()->terminating().
   *
   * Returns a structured result:
   *   - lead      (IzigizLead) The persisted local record (always set).
   *   - payload    (array)      The payload array to be sent to the API.
   *
   * @param  string $campaignCode  One of the CAMPAIGNS values (e.g. 'VT0001').
   * @param  array  $data          Validated data from the Form Request.
   * @return array{lead: IzigizLead, payload: array}
   */
  public function submitLead(string $campaignCode, array $data): array
  {
    $lead = IzigizLead::create([
      'campaign_code'       => $campaignCode,
      'firstname'           => $data['firstname'],
      'lastname'            => $data['lastname'],
      'phone'               => $data['phone1'],
      'email'               => $data['email'] ?? null,
      'date_of_birth'       => $data['date_of_birth'] ?? null,
      'car_make'            => $data['car_make'] ?? null,
      'car_model'           => $data['car_model'] ?? null,
      'car_year'            => $data['car_year'] ?? null,
      'car_usage'           => $data['car_usage'] ?? null,
      'preferred_call_time' => $data['preferred_call_time'] ?? null,
      'status'              => IzigizLead::STATUS_PENDING,
    ]);

    return [
      'lead'    => $lead,
      'payload' => $this->buildPayload($campaignCode, $data),
    ];
  }

  /**
   * Step 2 — call the Izigiz REST API and update the lead record.
   *
   * Called from app()->terminating() in the controller, which means it runs
   * AFTER the HTTP response has been committed to the browser (PHP-FPM).
   * A timeout here does NOT affect the user's page load.
   */
  public function callApi(IzigizLead $lead, array $payload): void
  {
    try {
      $response   = Http::timeout(30)
        ->withHeaders(['Content-Type' => 'application/json'])
        ->post(config('services.izigiz.endpoint'), $payload);

      $httpStatus = $response->status();
      $body       = $response->json();
      $success    = in_array($httpStatus, [200, 201], true);

      $lead->update([
        'status'       => $success ? IzigizLead::STATUS_SUCCESS : IzigizLead::STATUS_FAILED,
        'api_response' => $body,
      ]);

      if ($success) {
        Log::info('IzigizService: lead accepted by API', [
          'lead_id'  => $lead->id,
          'campaign' => $lead->campaign_code,
        ]);
      } else {
        Log::warning('IzigizService: API rejected lead', [
          'lead_id'     => $lead->id,
          'http_status' => $httpStatus,
          'response'    => $body,
        ]);
      }
    } catch (\Throwable $e) {
      // timeout or connection failure — lead stays STATUS_PENDING in DB
      // and can be retried via: php artisan izigiz:retry-pending
      Log::error('IzigizService: API call failed', [
        'lead_id' => $lead->id,
        'error'   => $e->getMessage(),
      ]);

      $lead->update([
        'status'       => IzigizLead::STATUS_FAILED,
        'api_response' => ['error' => $e->getMessage()],
      ]);
    }
  }

  // ---------------------------------------------------------------------------
  // Private helpers
  // ---------------------------------------------------------------------------

  /**
   * Build the JSON payload expected by the Izigiz /api/lead/add endpoint.
   * Called here and passed directly to the job — avoids reconstructing it
   * at retry time when the original $data array is no longer available.
   */
  private function buildPayload(string $campaignCode, array $data): array
  {
    $parameters = [
      ['Key' => 'LeadCampaignCode', 'Value' => $campaignCode],
    ];

    // Only append optional parameters when the caller provided a value.
    $optionalMap = [
      'DateOfBirth'        => $data['date_of_birth'] ?? null,
      'CarMake'            => $data['car_make'] ?? null,
      'CarModel'           => $data['car_model'] ?? null,
      'CarYear'            => $data['car_year'] ?? null,
      'CarUsage'           => $data['car_usage'] ?? null,
      'PreferedTimeOfCall' => $data['preferred_call_time'] ?? null, // Typo is intentional — matches the API spec
    ];

    foreach ($optionalMap as $key => $value) {
      if ($value !== null && $value !== '') {
        $parameters[] = ['Key' => $key, 'Value' => (string) $value];
      }
    }

    return [
      'FirstName'  => $data['firstname'],
      'LastName'   => $data['lastname'],
      'CellNumber' => $data['phone1'],
      'Email'      => $data['email'] ?? '',
      'Parameters' => $parameters,
    ];
  }
}
