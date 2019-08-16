<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Video;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title_es' => $faker->sentence,
        'position' => 'mi-jalisco',
        'video_url' => 'https://www.youtube.com/watch?v=9JbuK75IqHw'
    ];
});
