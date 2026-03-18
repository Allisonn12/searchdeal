<?php

namespace App\Http\Requests\Tracker;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function authorize(): bool{
        return true;
    }
    public function rules(): array{
        return [
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'phone1'    => 'required|string|max:20',
            'email'     => 'required|email|max:255',
            'product'     => 'sometimes|string|max:255',
            'leadsource'     => 'sometimes|string|max:255',
            'affiliateshortcode'     => 'sometimes|string|max:255',
            'channel'     => 'sometimes|string|max:255',
            'offer_id'     => 'sometimes|string|max:255',
        ];
    }

}
