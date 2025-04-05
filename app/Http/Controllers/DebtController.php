<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DebtModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function index(){
        return view('debt');
    }

    public function store(Request $request)
    {
            $data = $request->all();
            $responseBody = $this->submitToApi($data);
            $date = date("Y/m/d h:i:sa");
            $resp = $responseBody['response'];
            if ($responseBody['code'] == 1) {
                $resp = json_encode($responseBody['response']);
                $inser = DebtModel::createQuietly([
                    'firstname' => $data['firstname'], 
                    'lastname' => $data['lastname'], 
                    'phone1' => $data['phone1'], 
                    'email' => $data['email'], 
                    'debt_greater_than_30_000' => $data['debt_greater_than_30_000'], 
                    'income_greater_than_10_000' => $data['income_greater_than_10_000'], 
                    'underdebtreview' => $data['underdebtreview'],
                    'employment' => $data['employment'],
                    'offer_id' => $data['offer_id'],
                    'status' => $resp, 
                ]);
                // return redirect()->back()->with('success', "Success! Your form has been submitted. One of our friendly consultants will be in touch soon.");
                        return view('success');

            }else{
                $resp = json_encode($responseBody['response']);
                $inser = DebtModel::createQuietly([
                    'firstname' => $data['firstname'], 
                    'lastname' => $data['lastname'], 
                    'phone1' => $data['phone1'], 
                    'email' => $data['email'], 
                    'debt_greater_than_30_000' => $data['debt_greater_than_30_000'], 
                    'income_greater_than_10_000' => $data['income_greater_than_10_000'], 
                    'underdebtreview' => $data['underdebtreview'],
                    'employment' => $data['employment'],
                    'offer_id' => $data['offer_id'],
                    'status' => $resp,  
                ]);
                return redirect()->back()->with('error', "An error occurred while submitting the form. {$responseBody['response']}");
            }
    }

    /**
     * Submit form data to the API.
     *
     * @param array $data Form data to submit.
     * @return array API response.
     */
    private function submitToApi($data)
    {
        $date = date("Y/m/d h:i:sa");
        $data['campid'] = 'DEBT-WHITE-LABEL';
        $data['sid'] = '25154';
        $data['returnjson'] = 'yes';

        // Use Laravel's HTTP client to send the request
        $response = Http::asForm()->post('https://returnxdigital.leadbyte.co.uk/api/submit.php', $data);

        return $response->json();
    }

    /**
     * Handle the API response.
     *
     * @param array $responseBody Decoded API response.
     */
    private function handleResponse($responseBody)
    {
        if ($responseBody['code'] == 1) {
            // Success response
            return redirect()->back()->with('success', "Success! {$responseBody['response']}");
        } else {
            // Error response
            return redirect()->back()->with('error', "Submission failed: {$responseBody['response']}");
        }
    }

}
