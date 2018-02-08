<?php

use Faker\Generator as Faker;

$factory->define(App\ReceptionModeOrganism::class, function (Faker $faker) {
    return [
        'reception_mode_id'=> $faker->randomDigit,
        'organism_id'=> $faker->randomDigit,
        'iban'=> $faker->randomDigit
    ];
});
