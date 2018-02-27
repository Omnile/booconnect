<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $types = [
        'user' => User::class,
        'staff' => Restaurant::class,
        'item' => Item::class,
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

    // public function getImageableTypeAttribute($type)
    // {
    //     // Illuminate/Database/Eloquent/Model::morphTo checks for null in order
    //     // to handle eager-loading relationships
    //     if (!$type) {
    //         return null;
    //     }

    //     // to make sure this returns value from the array
    //     return array_get($this->types, $type, $type);
    // }
}
