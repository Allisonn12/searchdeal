<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoanModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Requests\Loans\StoreRequest;

class LoanController extends Controller
{
  public function index()
  {
      $leads = LoanModel::latest()->paginate(15);
      return view('admin.loans', compact('leads'));
  }

  public function loans()
  {
    return view('loans');
  }

  public function store(StoreRequest $request)
  {
    $data = $request->all();

    $responseBody = $this->submitToApi($data);
    $resp = json_encode($responseBody['response'] ?? null);

    LoanModel::createQuietly([
      'firstname'       => $data['firstname'],
      'lastname'        => $data['lastname'],
      'phone1'          => $data['phone1'],
      'email'           => $data['email'],
      'title'           => $data['title'] ?? null,
      'loanamount'      => $data['loanamount'] ?? null,
      'underdebtreview' => $data['underdebtreview'] ?? null,
      'idnumber'        => 0,
      'status'          => $resp,
    ]);

    if ($responseBody['code'] == 1) {
      return redirect()->route('success')->with(
        'success',
        'Your loan request was submitted successfully! A consultant will be in touch within 24 hours.'
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
    $data['campid']     = 'KONGA';
    $data['sid']        = '25154';
    $data['returnjson'] = 'yes';

    $response = Http::asForm()->post('https://returnxdigital.leadbyte.co.uk/api/submit.php', $data);

    return $response->json() ?? ['code' => 0, 'response' => 'No response received from provider.'];
  }
}
