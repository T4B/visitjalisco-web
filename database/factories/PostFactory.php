<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title_es' => $faker->sentence,
        'excerpt_es' => $faker->text,
        'text_es' => $faker->text,
        'slug_es' => $faker->slug,
        // 'language' => 'es'
    ];
});
