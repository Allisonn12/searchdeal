<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TrackerModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    public function index(){
        return view('tracker');
    }

    public function store(Request $request)
    {
            $data = $request->all();
            $responseBody = $this->submitToApi($data);
            $date = date("Y/m/d h:i:sa");
            $resp = $responseBody['response'];
            if ($responseBody['code'] == 1) {
                $resp = json_encode($responseBody['response']);
                $inser = TrackerModel::createQuietly([
                    'firstname' => $data['firstname'], 
                    'lastname' => $data['lastname'], 
                    'phone1' => $data['phone1'], 
                    'email' => $data['email'], 
                    'product' => $data['product'], 
                    'leadsource' => $data['leadsource'], 
                    'affiliateshortcode' => $data['affiliateshortcode'],
                    'channel' => $data['channel'],
                    'offer_id' => $data['offer_id'],
                    'status' => $resp, 
                ]);
                // return redirect()->back()->with('success', "Success! Your form has been submitted. One of our friendly consultants will be in touch soon.");
                        return view('success');

            }else{
                $resp = json_encode($responseBody['response']);
                $inser = TrackerModel::createQuietly([
                    'firstname' => $data['firstname'], 
                    'lastname' => $data['lastname'], 
                    'phone1' => $data['phone1'], 
                    'email' => $data['email'], 
                    'product' => $data['product'], 
                    'leadsource' => $data['leadsource'], 
                    'affiliateshortcode' => $data['affiliateshortcode'],
                    'channel' => $data['channel'],
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
        $data['campid'] = 'VEHICLE-TRACKING';
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
