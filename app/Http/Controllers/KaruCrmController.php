<?php

namespace App\Http\Controllers;

use App\Http\Requests\KaruCrm\StoreLeadRequest;
use App\Services\KaruCrmService;

class KaruCrmController extends Controller
{
  public function __construct(private readonly KaruCrmService $karuCrmService)
  {
  }

  public function index(){
      return view('dashcam');
  }

  public function dashcamsCarTrackerUpsell(){
      return view('dashcams-car-tracker-upsell');
  }

  /**
   * Accept a validated lead and forward it to Karu CRM.
   *
   * Returns JSON so any frontend (or headless consumer) can react accordingly.
   * The HTTP status reflects the outcome:
   *   201 Created  — lead accepted by CRM
   *   200 OK       — duplicate (CRM acknowledged with existing ID)
   *   422          — validation failure (handled by Laravel automatically)
   *   502          — CRM rejected or was unreachable
   */
  public function store(StoreLeadRequest $request)
  {
    $result = $this->karuCrmService->submitLead($request->validated());

    if ($result['success']) {
      $statusCode = $result['duplicate'] ? 200 : 201;

        return redirect()->route('success')->with(
            'success',
            'Your request was submitted successfully! Providers will be in touch soon.'
        );
      // return response()->json([
      //   'status'      => $result['duplicate'] ? 'duplicate' : 'created',
      //   'message'     => $result['message'],
      //   'crm_lead_id' => $result['crm_lead_id'],
      //   'lead_id'     => $result['lead']->id,
      // ], $statusCode);
    }

      return redirect()->back()->with(
          'error',
          'We were unable to process your request. Please check your details and try again.'. $resp
      );
    // return response()->json([
    //   'status'  => 'failed',
    //   'message' => $result['message'],
    //   'lead_id' => $result['lead']->id, // Local record ID for support reference
    // ], 502);
  }
}
