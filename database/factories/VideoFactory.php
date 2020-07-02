<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'description' => $faker->paragraph(),
        'series_id' => $faker->numberBetween(1, 10),
        'episode_number' => $faker->numberBetween(1, 10)
    ];
});
