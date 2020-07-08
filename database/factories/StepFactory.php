<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Step;
use Faker\Generator as Faker;

$factory->define(Step::class, function (Faker $faker) {
    return [
        'recipe_id' => factory(\App\Recipe::class),
        'name' => $faker->name,
        'description' => $faker->text,
        'position' => $faker->numberBetween(-10000, 10000),
    ];
});
