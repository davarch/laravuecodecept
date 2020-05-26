<?php

/** @var Factory $factory */

use App\Models\Todo;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

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

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' =>  $faker->sentence(rand(2, 6), false),
        'completed' => rand(0, 1),
    ];
});
