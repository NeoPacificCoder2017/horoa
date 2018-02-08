<?php

use Faker\Generator as Faker;

$factory->define(App\Rate::class, function (Faker $faker) {
    return [
        'taux' => $faker->numberBetween(1,5),
    ];
});
