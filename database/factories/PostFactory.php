<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => factory(\App\User::class),
        'title' => $faker->sentence(4),
        'summary' => $faker->text,
        'content' => $faker->paragraphs(3, true),
        'published_at' => $faker->dateTime(),
    ];
});
