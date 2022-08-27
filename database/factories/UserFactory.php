<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName() . ' ' . $faker->lastName(),
        'email' => $faker->unique()->safeEmail,
        'user_id' => Str::random(6),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'grade' => mt_rand(0, 5),
        'mailbox_number' => 'SP' . sprintf('%03d', mt_rand(1, 400)),
        'cellphone_number' => $faker->phoneNumber(),
        'advance_payment' => 0,
        'last_visited_at' => date('Y-m-d'),
        'is_admin' => 0,
        'remember_token' => Str::random(10),
    ];
});
