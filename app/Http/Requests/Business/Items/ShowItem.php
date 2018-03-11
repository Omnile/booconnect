<?php

namespace App\Http\Requests\Business\Items;

use App\Item;
use Illuminate\Foundation\Http\FormRequest;

class ShowItem extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return

        (int) $this->user()->restaurant()->id

        ===

        (int) Item::find(
            $this->route()->paremeters($item)
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
