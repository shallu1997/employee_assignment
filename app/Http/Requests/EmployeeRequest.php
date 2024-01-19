<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'salary' => 'required|numeric|min:0',
            'joining_date' => 'nullable|date',
            'relieving_date' => 'nullable|date|after_or_equal:joining_date',
            'contact_number' => 'nullable|string|max:20',
            'status' => 'required|in:active,inactive',
        ];
    }
}


