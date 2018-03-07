<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rating',
        'comment',
        'rateable_id',
        'rateable_type',
    ];

    protected $types = [
        'restaurant' => Restaurant::class,
        'item' => Item::class,
    ];

    public function ratable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
