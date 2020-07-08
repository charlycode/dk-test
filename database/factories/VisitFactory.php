<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Visit;
use Faker\Generator as Faker;

$factory->define(Visit::class, function (Faker $faker) {
    return [
        'count' => $faker->numberBetween(-10000, 10000),
    ];
});
