<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DebtModel;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Debt\StoreRequest;
use Illuminate\Http\Request;

class DebtController extends Controller
{
  public function index()
  {
    return view('debt');
  }

  public function store(StoreRequest $request)
  {
    $data = $request->all();

    $responseBody = $this->submitToApi($data);
    $resp = json_encode($responseBody['response'] ?? null);

    DebtModel::createQuietly([
      'firstname'                  => $data['firstname'],
      'lastname'                   => $data['lastname'],
      'phone1'                     => $data['phone1'],
      'email'                      => $data['email'],
      'debt_greater_than_30_000'   => $data['debt_greater_than_30_000'] ?? null,
      'income_greater_than_10_000' => $data['income_greater_than_10_000'] ?? null,
      'underdebtreview'            => $data['underdebtreview'] ?? null,
      'employment'                 => $data['employment'] ?? null,
      'offer_id'                   => $data['offer_id'],
      'status'                     => $resp,
    ]);

    if ($responseBody['code'] == 1) {
      return redirect()->route('success')->with(
        'success',
        'Your quote request was submitted successfully! Providers will be in touch within 24 hours.'
      );
    }

    return redirect()->back()->with(
      'error',
      'We were unable to process your request. Please check your details and try again.'. $resp
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
    $data['campid']     = 'DEBT-WHITE-LABEL';
    $data['sid']        = '25154';
    $data['returnjson'] = 'yes';

    $response = Http::asForm()->post('https://returnxdigital.leadbyte.co.uk/api/submit.php', $data);

    return $response->json() ?? ['code' => 0, 'response' => 'No response received from provider.'];
  }
}
