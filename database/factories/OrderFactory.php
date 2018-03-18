<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'quantity' => rand(1, 10),
        'item_id' => rand(1, config('booconnect.seed.max')),
        'user_id' => rand(1, config('booconnect.seed.max')),
        'status' => array_random(['pending', 'transit', 'picked']),
        'price' => rand(1, config('booconnect.seed.max')),
    ];
});
