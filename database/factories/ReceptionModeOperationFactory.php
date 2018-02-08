<?php

use Faker\Generator as Faker;

$factory->define(App\ReceptionModeOperation::class, function (Faker $faker) {
    return [
        'reception_mode_id'=> $faker->randomDigit,
        'operation_id'=> $faker->randomDigit,
    ];
});
