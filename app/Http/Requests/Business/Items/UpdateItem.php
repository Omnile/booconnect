<?php

namespace App\Http\Requests\Business\Items;

use App\Item;
use Illuminate\Foundation\Http\FormRequest;

class UpdateItem extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return

        (int) $this->route()->parameters()['item']->restaurant->id

        ===

        (int) Item::find(
            $this->route()->parameters['item']->id
        )
            ->restaurant_id;
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
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:1000',
            'quantity' => 'required|numeric|min:1',
            'description' => 'required|string',
            'measurement' => 'required|string',
        ];
    }
}
