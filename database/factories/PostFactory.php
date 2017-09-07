<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10, true),
        'body' => $faker->paragraphs(5, true),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
