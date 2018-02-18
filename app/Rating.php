<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $types = [
        'staff' => Resturant::class,
        'item' => Item::class,
    ];

    public function ratable()
    {
        return $this->morphTo();
    }
}
