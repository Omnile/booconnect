<?php

namespace App\Http\Requests\Items;

use Illuminate\Foundation\Http\FormRequest;

class AddItem extends FormRequest
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
            'name' => 'required|string',
            'price' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:1000',
            'quantity' => 'required|numeric|min:1',
            'description' => 'required|string',
            'measurement' => 'required|string',
        ];
    }
}
