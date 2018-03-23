<?php

namespace App;

use App\BooConnect\Search\Searchable;
use App\Item;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use Searchable;

    protected $fillable = [
        'name',
        'phone',
        'registration_no',
        'place',
        'city',
        'state',
        'country',
        'address',
        'website',
        'description',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function rating()
    {
        return $this->morphMany(Rating::class, 'ratable');
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function pictures()
    {
        return $this->morphOne(Picture::class, 'imageable');
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, Item::class);
    }
}
