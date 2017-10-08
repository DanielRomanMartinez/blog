<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Note::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence,
        'short_description' => $faker->text,
        'long_description' => $faker->paragraph."<br/>".$faker->paragraph."<br/>".$faker->paragraph,
        'meta_title' => $faker->sentence,
        'meta_description' => $faker->paragraph,        
        'meta_key' => '',
        'friendly_url' => $faker->slug,
        'follow' => rand(0,1)
    ];

});