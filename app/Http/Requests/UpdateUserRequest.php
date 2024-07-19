<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        // Let's get the route param by name to get the User object value
        $user = request()->route('user');

        return [
            'fname' => 'required',
            'lname' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'email' => 'required',
            // 'email' => 'required|email,'.$user->id,
            // 'liecense_number',
            // 'country' => 'required',
            // 'mobile_no' => 'required',
            // 'state' => 'required',
            'gender' => 'required',
            // 'department' => 'required',
            'nrc_id' => 'required',
            // 'blood_group' => 'required',
            // 'date_of_birth' => 'required',
            // 'place_of_birth' => 'required',
            'address' => 'required',
            // 'occupation' => 'required',
            // 'image_path' => 'max:2048',
        ];
    }
}
