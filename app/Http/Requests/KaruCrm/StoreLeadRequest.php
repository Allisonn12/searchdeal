<?php

namespace App\Http\Requests\KaruCrm;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class StoreLeadRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      // Per spec: at least one of these is required — enforced in withValidator below.
      'name'            => 'sometimes|nullable|string|max:255',
      'phone'           => 'sometimes|nullable|string|max:30',
      'email'           => 'sometimes|nullable|email|max:255',

      // Extended contact / address fields
      'mobile'          => 'sometimes|nullable|string|max:30',
      'city'            => 'sometimes|nullable|string|max:100',
      'street'          => 'sometimes|nullable|string|max:255',
      'province'        => 'sometimes|nullable|string|max:100',
      'suburb'          => 'sometimes|nullable|string|max:100',
      'post_code'       => 'sometimes|nullable|string|max:20',

      'remark_message'  => 'sometimes|nullable|string|max:2000',

      // meta: optional free-form JSON object — must be an array if provided
      'meta'            => 'sometimes|nullable|array',
    ];
  }

  /**
   * Enforce the spec rule: at least one of name, phone, or email must be present.
   */
  public function withValidator(Validator $validator): void
  {
    $validator->after(function (Validator $v) {
      $hasIdentifier = filled($this->input('name'))
        || filled($this->input('phone'))
        || filled($this->input('email'));

      if (! $hasIdentifier) {
        $v->errors()->add(
          'identity',
          'At least one of name, phone, or email must be provided.'
        );
      }
    });
  }

  public function messages(): array
  {
    return [
      'email.email' => 'The email address must be a valid email.',
    ];
  }
}
