<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $types = [
        'resturant' => Resturant::class,
        'item' => Item::class,
    ];

    public function ratable()
    {
        return $this->morphTo();
    }
}
