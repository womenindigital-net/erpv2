<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "user_id"   => 'nullable',
            "first_name"   => 'nullable',
            "last_name"   => 'nullable',
            "user_name"   => 'nullable',
            "role_id"   => 'nullable',
            "email"   => 'nullable',
            "password"   => 'nullable',
        ];
    }
}
