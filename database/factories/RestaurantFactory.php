<?php

use Faker\Generator as Faker;

$factory->define(App\Restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'phone' => $faker->phoneNumber,
        'place' => $faker->city,
        'registration_no' => rand(1000, 99999),
        'owner_id' => rand(1, config('booconnect.seed.max')),
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'address' => $faker->streetAddress,
        'image' => $faker->imageUrl(150, 150, 'nightlife'),
        'cover' => $faker->imageUrl(500, 150, 'technics'),
        'description' => $faker->sentence(6),
        'website' => $faker->domainName,
        'phone_verified' => rand(0, 1),
        'email_verified' => rand(0, 1),
    ];
});
