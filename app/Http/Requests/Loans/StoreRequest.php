<?php

namespace App\Http\Requests\Loans;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $title = $this->input('title');
        $underDebtReview = $this->input('underdebtreview');
        $idNumber = $this->input('idnumber');

        $normalizedDebtReview = match ($underDebtReview) {
            true, 'true', 'yes', 1, '1' => 'yes',
            false, 'false', 'no', 0, '0' => 'no',
            'True', 'False', 'TRUE', 'FALSE' => strtolower($underDebtReview) === 'true' ? 'yes' : 'no',
            default => $underDebtReview,
        };

        $this->merge([
            'title' => is_string($title) ? strtolower(trim($title)) : $title,
            'underdebtreview' => $normalizedDebtReview,
            'idnumber' => is_string($idNumber) ? preg_replace('/\D+/', '', $idNumber) : $idNumber,
        ]);
    }

    public function authorize(): bool{
        return true;
    }
    public function rules(): array{
        return [
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'phone1' => ['required', 'string', 'regex:/^[0-9+\-\s()]+$/', 'max:20'],
            'email'     => 'required|email|max:255',
            'title' => [
                'required',
                Rule::in(['mr', 'mrs', 'ms', 'dr'])
            ],
            'loanamount' => 'required|numeric|between:1000,500000',
            'underdebtreview' => [
                'required',
                Rule::in(['yes', 'no']),
            ],
            'idnumber' => ['required', 'regex:/^[0-9]{13}$/'],
            'acceptterms' => ['accepted'],
            ];
    }

}
