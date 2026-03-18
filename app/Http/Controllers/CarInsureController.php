<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\CarInsureModel;
use App\Http\Requests\CarInsurance\StoreRequest;

class CarInsureController extends Controller
{
    public function index(){
        return view('car-insurance');
    }

    public function landing(){
        return view('car-insure');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->all();

        $responseBody = $this->submitToApi($data);
        $resp = json_encode($responseBody['response'] ?? null);

        CarInsureModel::createQuietly([
            'firstname'          => $data['firstname'],
            'lastname'           => $data['lastname'],
            'phone1'             => $data['phone1'],
            'email'              => $data['email'],
            'gender'             => $data['gender'],
            'currentinsurer'     => $data['currentinsurer'] ?? null,
            'vehiclemake'        => $data['vehiclemake'],
            'language'           => $data['language'] ?? 'English',
            'optindate'          => $data['optindate'],
            'channel'            => $data['channel'],
            'product'            => $data['product'],
            'affiliateshortcode' => $data['affiliateshortcode'],
            'Leadsource'         => $data['Leadsource'],
            'offer_id'           => $data['offer_id'],
            'status'             => $resp,
        ]);

        if ($responseBody['code'] == 1) {
            $successMessage = 'Success! Your form has been submitted. One of our friendly consultants will be in touch soon.';

            return match ($data['form_source']) {
                'car_insure_landing',
                'car_insure_camp'    => redirect()->route('car.tract.upsell')->with('success', $successMessage),
                'car_insure_success',
                'car_track_success'  => redirect()->route('success')->with('success', $successMessage),
                // Safe fallback — always return a response
                default => redirect()->back()->with('success', $successMessage),
            };
        }

        return redirect()->back()->with(
            'error',
            'We were unable to process your request. Please check your details and try again.'. $resp
        );
    }

    /**
     * Submit form data to the external lead API.
     *
     * @param  array $data  Form data to submit.
     * @return array        Decoded API response with at minimum 'code' and 'response' keys.
     */
    private function submitToApi(array $data): array
    {
        $data['campid']     = 'CAR-INSURANCE';
        $data['sid']        = '25154';
        $data['returnjson'] = 'yes';

        $response = Http::asForm()->post('https://returnxdigital.leadbyte.co.uk/api/submit.php', $data);

        // Provide a safe fallback if the API returns no body or an unexpected format
        return $response->json() ?? ['code' => 0, 'response' => 'No response received from provider.'];
    }
}
