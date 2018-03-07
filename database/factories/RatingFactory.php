<?php

use App\Item;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'rating' => rand(1, config('booconnect.seed.max')),
        'user_id' => rand(1, config('booconnect.seed.max')),
        'comment' => $faker->sentence(),
        'rateable_id' => rand(1, config('booconnect.seed.max')),
        'rateable_type' => array_random(Item::class, Restaurant::class),
    ];
});
