<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MedicalModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
  public function index()
  {
    return view('medical');
  }

  public function store(Request $request)
  {
    // Step 1: Validate user-facing fields before touching the API
    $request->validate([
      'firstname' => 'required|string|max:255',
      'lastname'  => 'required|string|max:255',
      'phone1'    => 'required|string|max:20',
      'email'     => 'required|email|max:255',
    ]);

    $data = $request->all();

    // Step 2: Submit to external API
    $responseBody = $this->submitToApi($data);
    $resp = json_encode($responseBody['response'] ?? null);

    // Step 3: Persist lead regardless of API outcome (single save — DRY)
    MedicalModel::createQuietly([
      'firstname' => $data['firstname'],
      'lastname'  => $data['lastname'],
      'phone1'    => $data['phone1'],
      'email'     => $data['email'],
      'offer_id'  => $data['offer_id'],
      'status'    => $resp,
    ]);

    // Step 4: Route based on API outcome
    if ($responseBody['code'] == 1) {
      return redirect()->route('success')->with(
        'success',
        'Your quote request was submitted successfully! Providers will be in touch within 24 hours.'
      );
    }

    return redirect()->back()->with(
      'error',
      'We were unable to process your request. Please check your details and try again.'
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
    $data['campid']     = 'MEDICAL-WHITE-LABEL';
    $data['sid']        = '25154';
    $data['returnjson'] = 'yes';

    $response = Http::asForm()->post('https://returnxdigital.leadbyte.co.uk/api/submit.php', $data);

    return $response->json() ?? ['code' => 0, 'response' => 'No response received from provider.'];
  }
}
