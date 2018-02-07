<?php

use Faker\Generator as Faker;

$factory->define(App\Operation::class, function (Faker $faker) {
    return [
        'nom' => $faker->lastname,
        'date_debut' => $faker->date('Y-m-d'),
        'date_fin' => $faker->date('Y-m-d'),
        'createur_id' => $faker->randomDigit,
        'total_recolter' => $faker->numberBetween(1000,1000000),
        'total_promis' => $faker->numberBetween(1,1000000)
    ];
});
