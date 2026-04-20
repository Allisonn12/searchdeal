<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TrackerModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Requests\Tracker\StoreRequest;

class TrackerController extends Controller
{
  public function index()
  {
    return view('tracker');
  }

  public function landing()
  {
    return view('car-insure');
  }

  public function store(StoreRequest $request)
  {

    $data = $request->all();

    $responseBody = $this->submitToApi($data);
    $resp = json_encode($responseBody['response'] ?? null);

    TrackerModel::createQuietly([
      'firstname'          => $data['firstname'],
      'lastname'           => $data['lastname'],
      'phone1'             => $data['phone1'],
      'email'              => $data['email'],
      'product'            => $data['product'],
      'leadsource'         => $data['leadsource'],
      'affiliateshortcode' => $data['affiliateshortcode'],
      'channel'            => $data['channel'],
      'offer_id'           => $data['offer_id'],
      'status'             => $resp,
    ]);

    if ($responseBody['code'] == 1) {
      $successMessage = 'Your quote request was submitted successfully! Providers will be in touch within 24 hours.';

      return match ($data['form_source']) {
        'car_track_landing'             => redirect()->route('car.insure.elite')->with('success', $successMessage),
        'car_track_upsell',
        'car_track_upse'                => redirect()->route('dashcams.insure.upsell')->with('success', $successMessage),
        default                         => redirect()->back()->with('success', $successMessage),
      };
    }

    return redirect()->back()->with(
      'error',
      'We were unable to process your request. Please check your details and try again.'.$resp
    );
  }

  /**
   * Submit form data to the external lead API.
   *
   * @param  array $data  Form data to post.
   * @return array        Decoded API response with at minimum 'code' and 'response' keys.
   */
  private function submitToApi(array $data): array
  {
    $data['campid']     = 'VEHICLE-TRACKING';
    $data['sid']        = '25154';
    $data['returnjson'] = 'yes';

    $response = Http::asForm()->post('https://returnxdigital.leadbyte.co.uk/api/submit.php', $data);

    return $response->json() ?? ['code' => 0, 'response' => 'No response received from provider.'];
  }
}
