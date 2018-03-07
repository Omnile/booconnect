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

    public function setRateableTypeAttribute()
    {
        $this->attributes['rateable_type'] = 'App\\' . ucwords($this->type);
    }

    public function getRateableTypeAttribute($type)
    {
        return str_replace('app\\', '', strtolower($type));
    }

    public function ratable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    private function getMorphClassName($reference)
    {
        // transform to lower case

        $type = strtolower($reference);

        // to make sure this returns value from the array
        return array_get($this->types, $reference, $reference);

        // which is always safe, because new 'class'
        // will work just the same as new 'Class'
    }
}
