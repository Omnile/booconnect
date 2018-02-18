<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'resturant_id' => rand(1, 100),
        'image' => $faker->imageUrl(150, 150, 'food'),
        'description' => $faker->sentence(6),
        'price' => rand(1, 100),
        'user_id' => 1,
        'measurement' => array_random(['plate', 'bowl']),
        'quantity' => rand(1, 100),
    ];
});
