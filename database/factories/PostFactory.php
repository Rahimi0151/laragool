<?php

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text,
        'user_id' => App\User::inRandomOrder()->first()->id,
        'claps' => rand(0, 1000)
    ];
});
