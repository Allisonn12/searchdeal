<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\CarInsureModel;

class CarInsureController extends Controller
{
    public function index(){
        return view('car-insurance');
    }

    public function landing(){
        return view('car-insure');
    }

    public function store(Request $request)
    {
            $data = $request->all();
            $responseBody = $this->submitToApi($data);

            if ($responseBody['code'] == 1) {
                $resp = json_encode($responseBody['response']);
                $inser = CarInsureModel::createQuietly([
                    'firstname' => $data['firstname'], 
                    'lastname' => $data['lastname'], 
                    'phone1' => $data['phone1'], 
                    'email' => $data['email'], 
                    'gender' => $data['gender'], 
                    'currentinsurer' => $data['currentinsurer'], 
                    'vehiclemake' => $data['vehiclemake'], 
                    'language' => $data['language'], 
                    'optindate' => $data['optindate'],
                    'channel' => $data['channel'],
                    'product' => $data['product'],
                    'affiliateshortcode' => $data['affiliateshortcode'],
                    'Leadsource' => $data['Leadsource'],
                    'offer_id' => $data['offer_id'],
                    'status' => $resp,
                ]);

                // return redirect()->back()->with('success', "Success! {$responseBody['response']}");
                // return view('success');
                // return redirect()->route('success');
                // if ($data['form_source'] === "car_insure_landing") {
                //     return redirect()->route('car-track-up');
                // }else if($data['form_source'] === "car_insure_camp"){
                //     return redirect()->route('car-track-up');
                // }else if($data['form_source'] === "car_insure_success"){
                //     return redirect()->route('success');
                // }

                if ($data['form_source'] === 'car_insure_landing') {
                    return redirect()->route('car-track-up');
                } else {
                    if ($data['form_source'] === 'car_insure_camp') {
                        return redirect()->route('car-track-up');
                    } else {
                        if ($data['form_source'] === 'car_insure_success') {
                            return redirect()->route('success');
                        } else {
                            if ($data['form_source'] === 'car_track_success') {
                                return redirect()->route('success');
                            }
                        }
                    }
                }
                
            }else{
                $resp = json_encode($responseBody['response']);
                $inser = CarInsureModel::createQuietly([
                    'firstname' => $data['firstname'], 
                    'lastname' => $data['lastname'], 
                    'phone1' => $data['phone1'], 
                    'email' => $data['email'], 
                    'gender' => $data['gender'], 
                    'currentinsurer' => $data['currentinsurer'], 
                    'vehiclemake' => $data['vehiclemake'], 
                    'language' => $data['language'], 
                    'optindate' => $data['optindate'],
                    'channel' => $data['channel'],
                    'product' => $data['product'],
                    'affiliateshortcode' => $data['affiliateshortcode'],
                    'Leadsource' => $data['Leadsource'],
                    'offer_id' => $data['offer_id'],
                    'status' => $resp,
                ]);
                return redirect()->back()->with('error', "An error occurred while submitting the form. {$responseBody['response']}");
            }
        
        // return view('car-insurance');
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
        $data['campid'] = 'CAR-INSURANCE';
        $data['sid'] = '25154';
        $data['returnjson'] = 'yes';
        // $data['optindate'] = $date;
        // $data['language'] = 'English';

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
