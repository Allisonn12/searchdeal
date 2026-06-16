<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarInsurance\StoreLeadRequest;
use App\Models\CarInsuranceLead;
use App\Services\CarInsuranceService;
use Illuminate\Http\Request;

class CarInsuranceController extends Controller
{
    public function __construct(private readonly CarInsuranceService $service) {}

    public function index(Request $request)
    {
        $leads = CarInsuranceLead::latest()->paginate(15);
        return view('admin.car_insure', compact('leads'));
    }

    public function showCarInsurance()
    {
        return view('car-insurance', ['formRoute' => 'car.insurance.submit', 'campaignName' => 'Car Insurance', 'campaignTagline' => 'South Africa\'s Independent Car Insurance Comparison — Find Your Best Rate Today.']);
    }

    public function showCarInsureLanding()
    {
        return view('car-insurance', ['formRoute' => 'car.insurance.submit', 'campaignName' => 'Car Insurance', 'campaignTagline' => 'Compare Top South African Car Insurance Providers — No Pressure, No Spam.']);
    }

    public function store(StoreLeadRequest $request)
    {
        ['lead' => $lead, 'payload' => $payload] = $this->service->submitLead($request->validated());
        $service = $this->service;
        app()->terminating(static function () use ($service, $lead, $payload): void { $service->callApi($lead, $payload); });
        return redirect()
            ->route('car.tract.upsell')
            ->with('success', 'Your quote request was submitted! Review the tracker offer, then continue to the thank-you page.');
    }
}
