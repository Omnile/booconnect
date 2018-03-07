<?php

use App\Item;
use App\Restaurant;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Picture::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(150, 150, 'food'),
        'description' => $faker->realText($faker->numberBetween(10, 20)),
        'imageable_id' => rand(1, config('booconnect.seed.max')),,
        'imageable_type' => array_random([
            Restaurant::class,
            User::class,
            Item::class,
        ]),
    ];
});
