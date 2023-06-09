<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBudgetReviewRequest extends FormRequest
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
            'project_id'   => 'nullable',
            'date'    => 'nullable',
            'name'         => 'nullable',
            'end_date'      => 'nullable',
            'note'         => 'nullable',
            'is_active'    => 'nullable',
        ];
    }
}
