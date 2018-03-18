<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $appends = ['formatted_price'];

    public function getFormattedPriceAttribute()
    {
        return config('booconnect.currency') . ' ' . number_format($this->attributes['price'], 2);
    }

    public function restaurant()
    {
        return $this->belongsToMany(Restaurant::class);
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

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
