<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendeesRequest extends FormRequest
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
            'last_name' => ['required'],
            'first_name' => ['required'],
            'email' => ['required', 'email'],
            'date_birth' => ['required', 'date'],
            'internship_id' => ['required'],
            'address' => ['required'],
            'postal_code' => ['required'],
            'city' => ['required'],
            'phone_number' => ['required'],
            'right_to_image' => ['required'],
        ];
    }
}
