<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cashout extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return anyAuth()->check() && anyAuth()->user()->has('restaurant');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'amount' => 'required|numeric|max:' . anyAuth()->user()->restaurant->wallet()->sumBalance(),
            'method' => 'required|in:mobileMoney,bank',
            'channel' => 'required_if:method,mobileMoney|string|in:mtn-gh,vodafone-gh,tigo-gh,airtel-gh',
            'token' => 'required_if:channel,vodafone-gh|numeric',
            'description' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        // dd($data);
        return [
            'amount.max' => 'The amount cannot be greater than your wallet balance.',
            'channel.required_if' => 'Please provide the mobile money channel',
            'channel.required_if' => 'Please provide a transaction token',
        ];
    }
}
