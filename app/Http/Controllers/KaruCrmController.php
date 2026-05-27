<?php

namespace App\Http\Controllers;

use App\Http\Requests\KaruCrm\StoreLeadRequest;
use App\Services\KaruCrmService;
use Illuminate\Support\Facades\Log;
use App\Models\KaruCrmLead;

class KaruCrmController extends Controller
{
  public function __construct(private readonly KaruCrmService $karuCrmService)
  {
  }

  public function index()
  {
      return view('dashcam');
  }

  public function getAllDashcam()
  {
      $leads = KaruCrmLead::latest()->paginate(15);
      return view('admin.dashcam', compact('leads'));
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
    try {
        $result = $this->karuCrmService->submitLead($request->validated());

        if ($result['success']) {
            return redirect()->route('success')->with(
                'success',
                'Your request was submitted successfully! Providers will be in touch soon.'
            );
        }

        \Log::warning('Dashcam lead submission failed', [
            'message' => $result['message'],
            'lead_id' => $result['lead']->id ?? null,
        ]);


        return redirect()->back()->with(
            'error',
            'We were unable to process your request. Please check your details and try again.'. $result
        );
    } catch (\Exception $e) {
        \Log::error('Error sending dashcam lead', [
            'error' => $e->getMessage(),
        ]);

        return redirect()->back()->with(
            'error',
            'We were unable to process your request. Please check your details and try again.'
        );
    }
  }
}
