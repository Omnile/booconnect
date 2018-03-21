<?php

namespace App\Http\Requests\Business\Orders;

use Illuminate\Foundation\Http\FormRequest;

class CancelOrder extends FormRequest
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
            //
        ];
    }
}
