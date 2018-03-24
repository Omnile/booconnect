<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $types = [
        'user' => User::class,
        'restaurant' => Restaurant::class,
    ];

    public function owner()
    {
        return $this->morphTo();
    }

    /**
     * Casts
     * @var [type]
     */
    protected $casts = ['data' => 'json'];

    public function item()
    {
        return $this->hasMany(Item::class);
    }

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class);
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
