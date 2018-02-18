<?php

use App\Item;
use App\Resturant;
use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'model' => array_random(Item::class, Resturant::class),
        'rating' => rand(1, 5),
        'model_id' => rand(1, 100),
        'user_id' => rand(1, 100),
        'comment' => $faker->sentence(),
    ];
});
