<?php

namespace App\Http\Requests\Izigiz;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      // Required contact fields — always present regardless of campaign.
      'firstname' => 'required|string|max:100',
      'lastname'  => 'required|string|max:100',
      'phone1'    => 'required|string|max:20',
      'email'     => 'nullable|email|max:255',

      // Optional Izigiz Parameters — enriched forms may include these.
      // The API accepts them when present; the service omits them when null.
      'date_of_birth'       => 'nullable|date_format:Y-m-d',
      'car_make'            => 'nullable|string|max:100',
      'car_model'           => 'nullable|string|max:100',
      'car_year'            => 'nullable|digits:4|integer|min:1970|max:' . (date('Y') + 1),
      'car_usage'           => 'nullable|string|max:50',
      'preferred_call_time' => 'nullable|string|max:20',

      // Terms acceptance — required on the frontend, validated here.
      'acceptterms' => 'required|accepted',
    ];
  }

  public function messages(): array
  {
    return [
      'acceptterms.required' => 'You must accept the terms and conditions.',
      'acceptterms.accepted' => 'You must accept the terms and conditions.',
      'car_year.digits'      => 'Vehicle year must be a 4-digit number.',
      'date_of_birth.date_format' => 'Date of birth must be in YYYY-MM-DD format.',
    ];
  }
}
