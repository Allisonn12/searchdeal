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
      // Per spec: phone is required; name and email are optional identifiers.
      'name'            => 'sometimes|nullable|string|max:255',
      'phone'           => 'required|string|max:30',
      'email'           => 'sometimes|nullable|email|max:255',

      // Extended contact / address fields
      'mobile'          => 'sometimes|nullable|string|max:30',
      'city'            => 'sometimes|nullable|string|max:100',
      'street'          => 'sometimes|nullable|string|max:255',
      'province'        => 'sometimes|nullable|string|max:100',
      'suburb'          => 'sometimes|nullable|string|max:100',
      'post_code'       => 'sometimes|nullable|string|max:20',

      'remark_message'  => 'sometimes|nullable|string|max:2000',

      // Affiliate hook vehicle/product fields.
      'vehicle_make'    => 'sometimes|nullable|string|max:100',
      'vehicle_model'   => 'sometimes|nullable|string|max:100',
      'product'         => 'sometimes|nullable|string|max:100',
      'source_url'      => 'sometimes|nullable|string|max:255',

      // meta: optional free-form JSON object — must be an array if provided
      'meta'            => 'sometimes|nullable|array',
    ];
  }

  /**
   * No custom cross-field identity check needed: phone is required by the rule above.
   */
  public function withValidator(Validator $validator): void
  {
    // Intentionally empty — phone is enforced via the required rule.
  }

  public function messages(): array
  {
    return [
      'email.email' => 'The email address must be a valid email.',
    ];
  }
}
