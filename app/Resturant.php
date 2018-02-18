<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
