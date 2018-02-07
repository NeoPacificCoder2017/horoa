<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
        'filename' => $faker->lastname,
        'user_id' => $faker->randomDigit,
        'operation_id' => $faker->randomDigit,
    ];
});
