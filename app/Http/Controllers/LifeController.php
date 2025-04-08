<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LifeModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LifeController extends Controller
{
    public function index(){
        return view('life');
    }

    public function store(Request $request)
    {
            $data = $request->all();
            $responseBody = $this->submitToApi($data);
            $resp = $responseBody['response'];
            if ($responseBody['code'] == 1) {
                $resp = json_encode($responseBody['response']);
                $inser = LifeModel::createQuietly([
                    'firstname' => $data['firstname'], 
                    'lastname' => $data['lastname'], 
                    'phone1' => $data['phone1'], 
                    'email' => $data['email'], 
                    'status' => $resp, 
                ]);
                return redirect()->route('success');
                        // return view('success');

            }else{
                $resp = json_encode($responseBody['response']);
                $inser = LifeModel::createQuietly([
                    'firstname' => $data['firstname'], 
                    'lastname' => $data['lastname'], 
                    'phone1' => $data['phone1'], 
                    'email' => $data['email'], 
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
        $data['campid'] = 'INVESTMENTS';
        $data['sid'] = '25154';
        $data['offer_id'] = '2756';
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
