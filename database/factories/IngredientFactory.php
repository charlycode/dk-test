<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'quantity' => $faker->randomFloat(0, 0, 9999999999.),
        'unit' => $faker->word,
        'description' => $faker->text,
        'calories' => $faker->numberBetween(-10000, 10000),
        'protein' => $faker->numberBetween(-10000, 10000),
        'lipids' => $faker->numberBetween(-10000, 10000),
        'carbs' => $faker->numberBetween(-10000, 10000),
        'sodium' => $faker->numberBetween(-10000, 10000),
    ];
});
