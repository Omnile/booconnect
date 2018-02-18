<?php

use Faker\Generator as Faker;

$factory->define(App\Transaction::class, function (Faker $faker) {
    return [
        'resturant_id' => rand(1, 100),
        'item_id' => rand(1, 100),
        'user_id' => rand(1, 100),
        'amount' => rand(1.00, 100.00),
        'description' => $faker->sentence(),
        'data' => json_encode(['hello' => 'hi']),
        'debit' => rand(0, 1),
    ];
});
