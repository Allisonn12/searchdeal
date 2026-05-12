<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Izigiz\StoreLeadRequest;
use App\Services\IzigizService;

class IzigizController extends Controller
{
  public function __construct(private readonly IzigizService $service) {}

  /**
   * Digital campaign page — VT0001
   */
  public function showDigital()
  {
    return view('izigiz-tracker', [
      'formRoute'      => 'izigiz.digital',
      'campaignName'   => 'Digital',
      'campaignTagline' => 'South Africa\'s Independent Tracker Comparison — Find Your Best Deal Today.',
    ]);
  }

  /**
   * Unbranded warm-up campaign page — VTWU0001
   */
  public function showUnbrandedWarmup()
  {
    return view('izigiz-tracker', [
      'formRoute'      => 'izigiz.unbranded_warmup',
      'campaignName'   => 'Tracker Comparison',
      'campaignTagline' => 'Compare South Africa\'s Leading Tracker Providers — No Spam, No Pressure.',
    ]);
  }

  /**
   * Cartrack warm-up campaign page — CTK0002
   */
  public function showWarmupCartrack()
  {
    return view('izigiz-tracker', [
      'formRoute'      => 'izigiz.warmup_cartrack',
      'campaignName'   => 'Cartrack',
      'campaignTagline' => 'Get a Competitive Cartrack Quote in Under 60 Seconds.',
    ]);
  }

  // ---------------------------------------------------------------------------
  // Campaign entry points (POST)
  // Each public method maps to one campaign code.
  // ---------------------------------------------------------------------------

  /**
   * Digital campaign — VT0001
   * Used by the main digital tracker acquisition flow.
   */
  public function storeDigital(StoreLeadRequest $request)
  {
    return $this->handle($request, IzigizService::CAMPAIGNS['digital']);
  }

  /**
   * Unbranded warm-up campaign — VTWU0001
   * Used for cold-traffic warm-up pages with no Cartrack branding.
   */
  public function storeUnbrandedWarmup(StoreLeadRequest $request)
  {
    return $this->handle($request, IzigizService::CAMPAIGNS['unbranded_warmup']);
  }

  /**
   * Cartrack warm-up campaign — CTK0002
   * Used for warm-up pages that explicitly reference Cartrack.
   */
  public function storeWarmupCartrack(StoreLeadRequest $request)
  {
    return $this->handle($request, IzigizService::CAMPAIGNS['warmup_cartrack']);
  }

  // ---------------------------------------------------------------------------
  // Shared submission logic
  // ---------------------------------------------------------------------------

  /**
   * Persist the lead, register the API call to run AFTER the response is
   * committed to the browser, then redirect immediately.
   *
   * app()->terminating() fires in PHP-FPM's terminate() phase — the browser
   * receives the redirect before the 30-second Izigiz HTTP call even starts.
   * No queue worker required. No timeout visible to the user.
   */
  private function handle(StoreLeadRequest $request, string $campaignCode)
  {
    // Step 1: save to DB — instant, never fails from user's perspective.
    ['lead' => $lead, 'payload' => $payload] = $this->service->submitLead(
      $campaignCode,
      $request->validated()
    );

    // Step 2: schedule the outbound API call to run after the HTTP response
    // has been flushed. Capture $lead and $payload by value so they survive
    // past the request lifecycle.
    $service = $this->service;
    app()->terminating(static function () use ($service, $lead, $payload): void {
      $service->callApi($lead, $payload);
    });

    return redirect()
      ->route('tracker1')
      ->with('success', 'Your quote request was submitted! Providers will be in touch shortly.');
  }
}
