<?php

namespace App\Http\Requests\Verify;

use Illuminate\Foundation\Http\FormRequest;

class VerifyCode extends FormRequest
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
            'phone' => 'required|numeric|unique:user,phone',
            'token' => 'required|numeric|exists:user,token',
        ];
    }
}
