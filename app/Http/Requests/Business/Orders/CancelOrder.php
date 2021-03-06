<?php

namespace App\Http\Requests\Business\Orders;

use App\Order;
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

        (int) $this->route()->parameters()['order']->restaurant->id

        ===

        (int) Order::find(
            $this->route()->parameters['order']->id
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
