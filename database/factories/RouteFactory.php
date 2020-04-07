<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Route::class, function (Faker $faker) {
    return [
        'name_es' => $faker->name,
        'color' => 'orange-100',
        'short_description_es' => $faker->text,
        'order' => $faker->numberBetween(1,20),
        'slug' => $faker->slug,
        'highlight' => 0,
    ];
});
