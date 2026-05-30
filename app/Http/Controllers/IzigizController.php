<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Izigiz\StoreLeadRequest;
use App\Services\IzigizService;
use Illuminate\Http\Request;
use App\Models\IzigizLead;

class IzigizController extends Controller
{
  public function __construct(private readonly IzigizService $service) {}

  // ---------------------------------------------------------------------------
  // GET — landing pages
  // ---------------------------------------------------------------------------

  public function index(Request $request)
  {
    $leads = IzigizLead::latest()->paginate(15);

    return view('admin.car_insure', compact('leads'));
  }

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
   * The campaign code is resolved from the HTTP Referer header so the same
   * endpoint serves every form on the site. All submissions redirect to the
   * shared /success page — no upsell pages are shown.
   *
   *   Referer contains "car-insurance" or "car-insure" → HIP0001 → success
   *   Everything else (car-tracker, tracker/*, unknown)  → VT0001  → success
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
   * Determine which campaign code and post-submission redirect to use.
   *
   * Priority 1 — form_source field (reliable, in our control):
   *   car_insure_landing  → HIP0001 → tracker upsell (/car-tracker-upsell)
   *   car_tracker_landing → VT0001  → car insurance upsell (/car-insurance-elite)
   *
   * Priority 2 — HTTP Referer (legacy fallback for forms without form_source,
   *   e.g. warm-up channels, third-party embeds). Always redirects to /success.
   *
   * Returns a two-element array: [campaignCode, successRouteName].
   */
  private function resolveContext(Request $request): array
  {
    // --- Primary: use the hidden form_source field ---
    $formSource = $request->input('form_source');

    if ($formSource === 'car_insure_landing') {
      // User submitted from a car-insurance page → upsell them on tracker.
      return [IzigizService::CAMPAIGNS['car_insurance'], 'car.tract.upsell'];
    }

    if ($formSource === 'car_tracker_landing') {
      // User submitted from a car-tracker page → upsell them on car insurance.
      return [IzigizService::CAMPAIGNS['tracker'], 'car.insure.elite'];
    }

    // --- Fallback: legacy Referer-based resolution (no upsell, goes to /success) ---
    $path = parse_url($request->headers->get('referer', ''), PHP_URL_PATH) ?? '';

    if (str_contains($path, 'car-insurance') || str_contains($path, 'car-insure') || str_contains($path, 'insurance/hip')) {
      return [IzigizService::CAMPAIGNS['car_insurance'], 'success'];
    }

    // Warm-up channel — unbranded (/car-track-up).
    if (str_contains($path, 'car-track-up')) {
      return [IzigizService::CAMPAIGNS['warm_up_unbranded'], 'success'];
    }

    // Warm-up channel — Cartrack branded (/car-tracker-upsell).
    if (str_contains($path, 'car-tracker-upsell')) {
      return [IzigizService::CAMPAIGNS['warm_up_cartrack'], 'success'];
    }

    // Default: tracker campaign for /car-tracker, /tracker/*, and any unknown source.
    return [IzigizService::CAMPAIGNS['tracker'], 'success'];
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
