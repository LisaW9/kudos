<?php
use Faker\Generator as Faker;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(App\User::class, function (Faker $faker) {
    $avatar = $faker->imageUrl($width = 124, $height = 124);
    return [
        'name' => $faker->name,
        'avatar' => $avatar,
        'avatar_original' => $avatar,
        'gender' => $faker->randomElement(['male', 'female']),
        'token' => $faker->randomNumber()
    ];
});