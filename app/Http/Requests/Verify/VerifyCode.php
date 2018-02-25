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
            'phone' => 'required|number|uniqie:user,phone',
            'token' => 'required|number|exists:user,token',
        ];
    }
}
