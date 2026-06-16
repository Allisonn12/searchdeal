<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarTracker\StoreLeadRequest;
use App\Models\CarTrackerLead;
use App\Services\CarTrackerService;
use Illuminate\Http\Request;

class CarTrackerController extends Controller
{
    public function __construct(private readonly CarTrackerService $service) {}

    public function index(Request $request)
    {
        $leads = CarTrackerLead::latest()->paginate(15);
        return view('admin.car_tracker', compact('leads'));
    }

    public function showCarTracker()
    {
        return view('izigiz-tracker', ['formRoute' => 'tracker.submit', 'campaignName' => 'Car Tracker', 'campaignTagline' => 'South Africa\'s Independent Tracker Comparison — Find Your Best Deal Today.']);
    }

    public function showDigital()
    {
        return view('izigiz-tracker', ['formRoute' => 'tracker.submit', 'campaignName' => 'Digital', 'campaignTagline' => 'South Africa\'s Independent Tracker Comparison — Find Your Best Deal Today.']);
    }

    public function store(StoreLeadRequest $request)
    {
        $campaign = CarTrackerService::CAMPAIGNS['tracker'];
        ['lead' => $lead, 'payload' => $payload] = $this->service->submitLead($campaign, $request->validated());
        $service = $this->service;
        app()->terminating(static function () use ($service, $lead, $payload): void { $service->callApi($lead, $payload); });
        return redirect()
            ->route('car.insure.elite')
            ->with('success', 'Your quote request was submitted! Review the insurance offer, then continue to the thank-you page.');
    }
}
