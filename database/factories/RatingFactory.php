<?php

use App\Item;
use App\Resturant;
use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'rating' => rand(1, 5),
        'user_id' => rand(1, 100),
        'comment' => $faker->sentence(),
        'rateable_id' => rand(1, 100),
        'rateable_type' => array_random(Item::class, Resturant::class),
    ];
});
