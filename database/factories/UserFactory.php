<?php

use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    $username = $faker->userName;
    $handle = $username;
    $website = "www.$handle.com";
    $email = $username."$".$faker->freeEmailDomain;
    return [
        'username' => $username,
        'name' => $faker->name,
        'email' => $email,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'twitter_handle' => $handle,
        'telegram_handle' => $handle,
        'instagram_handle' => $handle,
        'website' => $website,
        'remember_token' => Str::random(10),
    ];
});
