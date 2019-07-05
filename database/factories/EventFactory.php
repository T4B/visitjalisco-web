<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'date_es' => $faker->word,
        'place' => $faker->word,
        'text_es' => $faker->sentence,
        'url' => $faker->url,
        'target' => '_blank',
        'highlight' => $faker->boolean,
        'thumb_image' => 'events/tpY3JCS0OYgq9llEcpVhOXmBuC9t543RUAGKkjPG.jpeg',
        'large_image' => 'events/KjYNfsB9zPamscATLOiNjxSbNvAwpBi8j1jEnRn4.jpeg',
    ];
});
