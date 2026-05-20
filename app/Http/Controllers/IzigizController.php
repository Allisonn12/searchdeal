<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Izigiz\StoreLeadRequest;
use App\Services\IzigizService;
use Illuminate\Http\Request;

class IzigizController extends Controller
{
  public function __construct(private readonly IzigizService $service) {}

  // ---------------------------------------------------------------------------
  // GET — landing pages
  // ---------------------------------------------------------------------------

  /**
   * Car tracker landing at /car-tracker and /tracker/digital.
   * Form POSTs back to tracker.submit (/car-tracker).
   */
  public function showCarTracker()
  {
    return view('izigiz-tracker', [
      'formRoute'       => 'tracker.submit',
      'campaignName'    => 'Car Tracker',
      'campaignTagline' => 'South Africa\'s Independent Tracker Comparison — Find Your Best Deal Today.',
    ]);
  }

  /**
   * Digital campaign alias — same view/campaign as showCarTracker.
   * Kept for backward-compatible /tracker/digital URL.
   */
  public function showDigital()
  {
    return view('izigiz-tracker', [
      'formRoute'       => 'tracker.submit',
      'campaignName'    => 'Digital',
      'campaignTagline' => 'South Africa\'s Independent Tracker Comparison — Find Your Best Deal Today.',
    ]);
  }

  /**
   * Car insurance landing at /car-insurance and /insurance/hip.
   * Form POSTs back to car.insure.submit (/car-insurance).
   */
  public function showCarInsurance()
  {
    return view('car-insurance', [
      'formRoute'       => 'car.insure.submit',
      'campaignName'    => 'Car Insurance',
      'campaignTagline' => 'South Africa\'s Independent Car Insurance Comparison — Find Your Best Rate Today.',
    ]);
  }

  /**
   * Car insurance landing at /car-insure.
   * Same HIP0001 campaign — form POSTs to car.insure.submit (/car-insurance).
   */
  public function showCarInsureLanding()
  {
    return view('car-insurance', [
      'formRoute'       => 'car.insure.submit',
      'campaignName'    => 'Car Insurance',
      'campaignTagline' => 'Compare Top South African Car Insurance Providers — No Pressure, No Spam.',
    ]);
  }

  // ---------------------------------------------------------------------------
  // POST — unified submission handler
  // ---------------------------------------------------------------------------

  /**
   * Single entry point for ALL Izigiz lead submissions.
   *
   * The campaign code and success redirect are resolved from the HTTP Referer
   * header, so the same endpoint serves every form on the site without needing
   * a hidden field or separate routes per campaign.
   *
   *   Referer contains "car-insurance" or "car-insure" → HIP0001 → car_insure_success
   *   Everything else (car-tracker, tracker/*, unknown)  → VT0001  → tracker1
   */
  public function store(StoreLeadRequest $request)
  {
    [$campaignCode, $successRoute] = $this->resolveContext($request);

    return $this->handle($request, $campaignCode, $successRoute);
  }

  // ---------------------------------------------------------------------------
  // Private helpers
  // ---------------------------------------------------------------------------

  /**
   * Determine which campaign and success route to use based on the page
   * the form was submitted from (HTTP Referer).
   *
   * Returns a two-element array: [campaignCode, successRouteName].
   */
  private function resolveContext(Request $request): array
  {
    $path = parse_url($request->headers->get('referer', ''), PHP_URL_PATH) ?? '';

    if (str_contains($path, 'car-insurance') || str_contains($path, 'car-insure') || str_contains($path, 'insurance/hip')) {
      return [IzigizService::CAMPAIGNS['car_insurance'], 'car_insure_success'];
    }

    // Warm-up channel — unbranded (/car-track-up).
    if (str_contains($path, 'car-track-up')) {
      return [IzigizService::CAMPAIGNS['warm_up_unbranded'], 'tracker1'];
    }

    // Warm-up channel — Cartrack branded (/car-tracker-upsell).
    if (str_contains($path, 'car-tracker-upsell')) {
      return [IzigizService::CAMPAIGNS['warm_up_cartrack'], 'tracker1'];
    }

    // Default: digital tracker campaign covers /car-tracker, /tracker/*, and any unknown source.
    return [IzigizService::CAMPAIGNS['tracker'], 'tracker1'];
  }

  /**
   * Persist the lead, schedule the outbound API call to run AFTER the HTTP
   * response is flushed (via app()->terminating()), then redirect.
   *
   * The API call runs in PHP-FPM's terminate() phase — the browser receives
   * the redirect before the 30-second Izigiz HTTP call even starts.
   */
  private function handle(StoreLeadRequest $request, string $campaignCode, string $successRoute)
  {
    ['lead' => $lead, 'payload' => $payload] = $this->service->submitLead(
      $campaignCode,
      $request->validated()
    );

    $service = $this->service;
    app()->terminating(static function () use ($service, $lead, $payload): void {
      $service->callApi($lead, $payload);
    });

    return redirect()
      ->route($successRoute)
      ->with('success', 'Your quote request was submitted! Providers will be in touch shortly.');
  }
}
