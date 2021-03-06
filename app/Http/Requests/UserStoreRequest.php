<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'password' => 'required|string|min:6|max:20',
            'email' => ['required', 'string', 'email'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        dd($validator->errors());
    }
}
