<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'name'     => ['required', 'string', 'max:255'],
      'email'    => ['required', 'email', 'max:255', 'unique:admin,email'],
      'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()],
    ];
  }
}
