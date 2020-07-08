<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Instruction;
use Faker\Generator as Faker;

$factory->define(Instruction::class, function (Faker $faker) {
    return [
        'step_id' => factory(\App\Step::class),
        'ingredient_id' => factory(\App\Ingredient::class),
        'position' => $faker->numberBetween(-10000, 10000),
        'quantity' => $faker->randomFloat(0, 0, 9999999999.),
        'unit' => $faker->word,
        'comments' => $faker->word,
    ];
});
