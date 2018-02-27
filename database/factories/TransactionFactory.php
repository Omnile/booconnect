<?php

use Faker\Generator as Faker;

$factory->define(App\Transaction::class, function (Faker $faker) {
    return [
        'restaurant_id' => rand(1, config('booconnect.seed.max')),
        'item_id' => rand(1, config('booconnect.seed.max')),
        'user_id' => rand(1, config('booconnect.seed.max')),
        'amount' => rand(1.00, 100.00),
        'description' => $faker->sentence(),
        'data' => json_encode(['hello' => 'hi']),
        'debit' => rand(0, 1),
    ];
});
