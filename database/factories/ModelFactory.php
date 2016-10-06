<?php

use App\Console;
use App\Developer;
use App\Game;
use App\Genre;
use App\Image;
use App\User;

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

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Game::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->realText(20),
        'slug' => $faker->realText(20),
        'description' => $faker->sentence,
    ];
});

$factory->define(Genre::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->realText(20),
        'slug' => $faker->realText(20),
        'description' => $faker->sentence,
    ];
});

$factory->define(Developer::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->realText(20),
        'slug' => $faker->realText(20),
        'city' => $faker->city,
    ];
});

$factory->define(Console::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->realText(20),
        'slug' => $faker->realText(20),
        'manufacturer' => $faker->realText(20),
    ];
});

$factory->define(Image::class, function (Faker\Generator $faker) {

    $covers = [
        'http://ecx.images-amazon.com/images/I/51Shv2uZF6L.jpg',
        'http://www.mobygames.com/images/covers/l/281002-rayman-legends-xbox-one-front-cover.png',
        'http://xboxid.net/media/1084/dragon-age-inquisition-xbox-one-12692879.jpg',
        'https://upload.wikimedia.org/wikipedia/en/7/70/Fallout_4_cover_art.jpg'
    ];

    $random = rand(0, 3);


    return [
        'url' => $covers[ $random ],
        'imageable_id' => 1,
        'imageable_type' => 'game',
        'width' => 200,
        'height' => 300
    ];
});
