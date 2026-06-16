<?php

namespace App\Services;

use App\Models\CarInsuranceLead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CarInsuranceService
{
    public const CAMPAIGN_CODE = 'HIP0001';
    public const CAMPAIGN_FALLBACK = 'KP0001';

    public function submitLead(array $data): array
    {
        $lead = CarInsuranceLead::create([
            'campaign_code'       => self::CAMPAIGN_CODE,
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
            'status'              => CarInsuranceLead::STATUS_PENDING,
        ]);

        return ['lead' => $lead, 'payload' => $this->buildPayload(self::CAMPAIGN_CODE, $data)];
    }

    public function callApi(CarInsuranceLead $lead, array $payload): void
    {
        try {
            [$success, $httpStatus, $body] = $this->attemptApiCall($payload);

            if (! $success) {
                $fallbackPayload = $this->swapCampaignCode($payload, self::CAMPAIGN_FALLBACK);
                [$success, $httpStatus, $body] = $this->attemptApiCall($fallbackPayload);
                if ($success) {
                    $lead->update(['campaign_code' => self::CAMPAIGN_FALLBACK]);
                }
            }

            $lead->update([
                'status' => $success ? CarInsuranceLead::STATUS_SUCCESS : CarInsuranceLead::STATUS_FAILED,
                'api_response' => $body,
            ]);
        } catch (\Throwable $e) {
            Log::error('CarInsuranceService: API call failed', ['lead_id' => $lead->id, 'error' => $e->getMessage()]);
            $lead->update(['status' => CarInsuranceLead::STATUS_FAILED, 'api_response' => ['error' => $e->getMessage()]]);
        }
    }

    private function attemptApiCall(array $payload): array
    {
        $response = Http::timeout((int) config('services.izigiz.timeout', 60))
            ->withHeaders(['Content-Type' => 'application/json'])
            ->post(config('services.izigiz.endpoint'), $payload);

        return [$response->successful(), $response->status(), $response->json()];
    }

    private function swapCampaignCode(array $payload, string $newCode): array
    {
        $payload['Parameters'] = array_map(
            static fn (array $param) => $param['Key'] === 'LeadCampaignCode'
                ? ['Key' => 'LeadCampaignCode', 'Value' => $newCode]
                : $param,
            $payload['Parameters']
        );

        return $payload;
    }

    private function buildPayload(string $campaignCode, array $data): array
    {
        $parameters = [['Key' => 'LeadCampaignCode', 'Value' => $campaignCode]];

        foreach ([
            'DateOfBirth' => $data['date_of_birth'] ?? null,
            'CarMake' => $data['car_make'] ?? null,
            'CarModel' => $data['car_model'] ?? null,
            'CarYear' => $data['car_year'] ?? null,
            'CarUsage' => $data['car_usage'] ?? null,
            'PreferedTimeOfCall' => $data['preferred_call_time'] ?? null,
        ] as $key => $value) {
            if ($value !== null && $value !== '') {
                $parameters[] = ['Key' => $key, 'Value' => (string) $value];
            }
        }

        return [
            'FirstName' => $data['firstname'],
            'LastName' => $data['lastname'],
            'CellNumber' => $data['phone1'],
            'Email' => $data['email'] ?? '',
            'Parameters' => $parameters,
        ];
    }
}
