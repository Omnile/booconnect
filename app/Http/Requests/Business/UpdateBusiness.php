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

            'name' => 'sometimes|required|string',
            'phone' => 'sometimes|required|numeric',
            'registration_no' => 'sometimes|required|numeric',

            'image' => 'sometimes|required|image|mimes:jpeg,jpg,png|max:1000',
            'cover' => 'sometimes|required|image|mimes:jpeg,jpg,png|max:1000',

            'place' => 'sometimes|required|string',
            'city' => 'sometimes|required|string',
            'state' => 'sometimes|required|string',
            'country' => 'sometimes|required|string',
            'address' => 'sometimes|required|string',

            'website' => 'sometimes|required|string',

            'description' => 'sometimes|required|string',
        ];
    }
}
