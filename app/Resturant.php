<?php

namespace App;

use App\BooConnect\Search\Searchable;
use App\Item;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    use Searchable;
    
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pictures()
    {
        return $this->morphOne(Picture::class, 'imageable');
    }
}
