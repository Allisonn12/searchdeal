<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Loans\StoreRequest;

class LoanController extends Controller
{
  public function index()
  {
      $leads = Loan::latest()->paginate(15);
      return view('admin.loans', compact('leads'));
  }

    public function store(StoreRequest $request)
    {
//        dd($request->all());

        $data = array_merge(
            $request->validated(),
            $request->only(['form_source', 'optinurl', 'optindate', 'acceptterms'])
        );

        $underDebtReview = filter_var($data['underdebtreview'] ?? false, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        $acceptterms = filter_var($data['acceptterms'] ?? true, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

        try {
            // LeadByte expects a literal "true"/"false" string here, not our internal "yes"/"no".
            $apiPayload = $data;
            $apiPayload['underdebtreview'] = $underDebtReview ? 'true' : 'false';
            $apiPayload['acceptterms'] = $acceptterms ? 'true' : 'false';

            $responseBody = $this->submitToApi($apiPayload);

            Loan::createQuietly([
                'firstname'       => $data['firstname'],
                'lastname'        => $data['lastname'],
                'phone1'          => $data['phone1'],
                'email'           => $data['email'],
                'title'           => $data['title'] ?? null,
                'loanamount'      => $data['loanamount'] ?? null,
                'underdebtreview' => (bool) $underDebtReview,
                'idnumber'        => $data['idnumber'] ?? null,
                'status'          => $responseBody['response'] ?? null,
            ]);


            if (($responseBody['code'] ?? 0) == 1) {
                return redirect()
                    ->route('success')
                    ->with(
                        'success',
                        'Your loan request was submitted successfully! A consultant will be in touch within 24 hours.'
                    );
            }

            return back()->withInput()->with(
                'error',
                $responseBody['response'] ?? 'Application unsuccessful.'
            );

        } catch (\Throwable $e) {
            \Log::error('Loan submission failed', [
                'message' => $e->getMessage(),
                'exception' => $e,
                'data' => $data,
            ]);

            return back()->withInput()->with(
                'error',
                'We were unable to process your request. Please try again later.'
            );
        }
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
