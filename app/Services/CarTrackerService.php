<?php

namespace App\Services;

use App\Models\CarTrackerLead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CarTrackerService
{
    public const CAMPAIGNS = [
        'tracker' => 'VT0001',
        'warm_up_unbranded' => 'VTWU0001',
        'warm_up_cartrack' => 'CTK0002',
    ];

    public function submitLead(string $campaignCode, array $data): array
    {
        $lead = CarTrackerLead::create([
            'campaign_code' => $campaignCode,
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone1'],
            'email' => $data['email'] ?? null,
            'date_of_birth' => $data['date_of_birth'] ?? null,
            'car_make' => $data['car_make'] ?? null,
            'car_model' => $data['car_model'] ?? null,
            'car_year' => $data['car_year'] ?? null,
            'car_usage' => $data['car_usage'] ?? null,
            'preferred_call_time' => $data['preferred_call_time'] ?? null,
            'status' => CarTrackerLead::STATUS_PENDING,
        ]);

        return ['lead' => $lead, 'payload' => $this->buildPayload($campaignCode, $data)];
    }

    public function callApi(CarTrackerLead $lead, array $payload): void
    {
        try {
            [$success, $httpStatus, $body] = $this->attemptApiCall($payload);
            $lead->update(['status' => $success ? CarTrackerLead::STATUS_SUCCESS : CarTrackerLead::STATUS_FAILED, 'api_response' => $body]);
        } catch (\Throwable $e) {
            Log::error('CarTrackerService: API call failed', ['lead_id' => $lead->id, 'error' => $e->getMessage()]);
            $lead->update(['status' => CarTrackerLead::STATUS_FAILED, 'api_response' => ['error' => $e->getMessage()]]);
        }
    }

    private function attemptApiCall(array $payload): array
    {
        $response = Http::timeout((int) config('services.izigiz.timeout', 60))
            ->withHeaders(['Content-Type' => 'application/json'])
            ->post(config('services.izigiz.endpoint'), $payload);

        return [$response->successful(), $response->status(), $response->json()];
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
