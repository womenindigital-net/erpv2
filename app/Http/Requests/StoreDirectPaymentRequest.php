<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDirectPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'payment_type_id' => 'nullable',
            'project_id' => 'nullable',
            'from_account' => 'nullable',
            'to_account' => 'nullable',
            'amount' => 'nullable',
            'note' => 'nullable',
        ];
    }
}
