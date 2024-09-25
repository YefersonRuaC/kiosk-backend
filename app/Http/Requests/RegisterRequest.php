<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //Debemos cambiarlo a true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->symbols()->numbers()]
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'This user is already registered',
            'password' => 'Password must contain at least 8 characters, capital letter, symbol, and number'
        ];
    }
}
