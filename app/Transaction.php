<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * Casts
     * @var [type]
     */
    protected $casts = ['data'=> 'json'];

    public function item()
    {
        return $this->hasMany(Item::class);
    }

    public function resturants()
    {
        return $this->belongsToMany(Resturant::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
