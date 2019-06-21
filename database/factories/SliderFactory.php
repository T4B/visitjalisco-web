<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Slider::class, function (Faker $faker) {
    return [
        //'image' => $faker->image('public/storage/slider', 1280, 768),
        'image' => 'slider/clV9a5Q55NYbJuVuWmZeddRA99nsticjP2YVUdWr.jpeg',
        'text' => $faker->text,
        'order' => $faker->numberBetween(1,20),
        'position' => 'home'
    ];
});
