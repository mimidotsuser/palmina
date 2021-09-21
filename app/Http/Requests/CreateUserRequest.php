<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:1',
            'password' => 'required|min:8|max:50|confirmed',
            'email' => 'required_without:phone_number|email|max:255|unique:users,email',
            'phone_number' => 'required_without:email|unique:users,phone_number|regex:/(254)[0-9]{9}/' //only kenyan numbers for demo
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'An account with similar email already exist',
            'phone_number.exists' => 'An account with similar phone number already exist',
            'password.required'=>'Password is required',
            'password.confirmed'=>'Both password do not match',
            'phone_number.regex'=>'Phone number should be in following format: 254xxxxxxxxx'
        ];
    }
}
