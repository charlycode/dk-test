<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipie;
use Faker\Generator as Faker;

$factory->define(Recipie::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id' => factory(\App\Category::class),
        'softDeletes' => $faker->word,
    ];
});
