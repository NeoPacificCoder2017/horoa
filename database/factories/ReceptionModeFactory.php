<?php

use Faker\Generator as Faker;

$factory->define(App\ReceptionMode::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
    ];
});
