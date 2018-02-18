<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function resturant()
    {
        return $this->belongsToMany(Resturant::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
