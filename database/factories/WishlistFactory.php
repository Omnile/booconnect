<?php

use Faker\Generator as Faker;

$factory->define(App\Wishlist::class, function (Faker $faker) {
    return [
        'item_id' => rand(1, config('booconnect.seed.max')),
        'user_id' => rand(1, config('booconnect.seed.max')),
    ];
});
