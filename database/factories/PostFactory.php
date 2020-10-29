<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\posts::class, function (Faker $faker) {
    return [
        'email' => 'goncakaradenizz@gmail.com',
        'post_name' => $faker->sentence()
    ];
});
