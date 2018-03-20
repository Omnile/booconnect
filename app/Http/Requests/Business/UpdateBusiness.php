<?php

namespace App\Http\Requests\Business;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBusiness extends FormRequest
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

            'name' => 'sometimes|string',
            'phone' => 'sometimes|numeric',
            'registration_no' => 'sometimes|numeric',

            'image' => 'sometimes|image|mimes:jpeg,jpg,png|max:1000',
            'cover' => 'sometimes|image|mimes:jpeg,jpg,png|max:1000',

            'place' => 'sometimes|string',
            'city' => 'sometimes|string',
            'state' => 'sometimes|string',
            'country' => 'sometimes|string',
            'address' => 'sometimes|string',

            'website' => 'sometimes|string',

            'description' => 'sometimes|string',
        ];
    }
}
