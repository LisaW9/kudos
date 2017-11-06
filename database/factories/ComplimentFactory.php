<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Compliment::class, function (Faker $faker) {
    return [
        'giver' => $faker->randomElement(User::pluck('id')->toArray()),
        'receiver' => $faker->randomElement(User::pluck('id')->toArray()),
        'compliment' => $faker->sentence(),
    ];
});
