<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function resturant()
    {
        return $this->belongsTo(Resturant::class);
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

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function pictures()
    {
        return $this->morphOne(Picture::class, 'imageable');
    }
}
