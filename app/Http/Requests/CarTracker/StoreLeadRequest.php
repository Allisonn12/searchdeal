<?php

namespace App\Http\Requests\CarTracker;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'phone1' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'date_of_birth' => 'nullable|date_format:Y-m-d',
            'car_make' => 'nullable|string|max:100',
            'car_model' => 'nullable|string|max:100',
            'car_year' => 'nullable|digits:4|integer|min:1970|max:' . (date('Y') + 1),
            'car_usage' => 'nullable|string|max:50',
            'preferred_call_time' => 'nullable|string|max:20',
            'acceptterms' => 'required|accepted',
            'form_source' => 'nullable|string|in:car_tracker_landing,car_track_landing,car_track_upsell',
        ];
    }
}
