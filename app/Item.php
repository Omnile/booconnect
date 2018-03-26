<?php

namespace App;

use App\BooConnect\Search\Searchable;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model implements Buyable
{
    use Searchable;

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'description',
        'measurement',
    ];

    protected $appends = ['formatted_price', 'cart', 'qty', 'in_cart'];

    public function getFormattedPriceAttribute()
    {
        return config('booconnect.currency') . ' ' . number_format($this->attributes['price'], 2);
    }

    public function getQtyAttribute()
    {
        if ($this->cart->count()) {
            return (int) $this->cart->first()->qty;
        }

        return 0;
    }

    public function getInCartAttribute()
    {
        if ($this->cart->count()) {
            return (boolean) $this->cart->first()->qty;
        }

        return false;
    }

    public function getCartAttribute()
    {
        return Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->id;
        });
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

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function rating()
    {
        return $this->morphMany(Rating::class, 'rateable');
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

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
