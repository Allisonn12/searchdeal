<?php

namespace App\Http\Requests\CarInsurance;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function authorize(): bool{
        return true;
    }
    public function rules(): array{
        return [
            'firstname'   => 'required|string|max:255',
            'lastname'    => 'required|string|max:255',
            'phone1'      => 'required|string|max:20',
            'email'       => 'required|email|max:255',
            'gender'      => 'required|string',
            'vehiclemake' => 'required|string',
            'form_source' => 'required|string',
        ];
    }

}
