<?php

namespace App;

use App\BooConnect\Search\Searchable;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model implements Buyable
{
    use Searchable;

    protected $appends = ['formatted_price'];

    public function getFormattedPriceAttribute()
    {
        return config('booconnect.currency') . ' ' . number_format($this->attributes['price'], 2);
    }

    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    public function getBuyableDescription($options = null)
    {
        return $this->description;
    }

    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }

    public function resturant()
    {
        return $this->belongsTo(Resturant::class);
    }

    public function rating()
    {
        return $this->morphMany(Rating::class, 'ratable');
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
