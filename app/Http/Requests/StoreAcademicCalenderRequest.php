<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAcademicCalenderRequest extends FormRequest
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
            'event_name' => 'nullable',
            'event_type' => 'nullable',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
            'start_time' => 'nullable',
            'end_time' => 'nullable',
            'event_label' => 'nullable',
            'duration' => 'nullable',
            'description' => 'nullable',
        ];
    }
}
