<?php

namespace App\Http\Requests\Business\Orders;

use App\Item;
use Illuminate\Foundation\Http\FormRequest;

class ShowOrder extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return

        (int) anyAuth()->user()->restaurant_id

        ===

        (int) Item::find(
            $this->route()->parameters()['order']->item_id
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
            //
        ];
    }
}
