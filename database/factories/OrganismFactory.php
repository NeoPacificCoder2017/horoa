<?php

use Faker\Generator as Faker;

$factory->define(App\Organism::class, function (Faker $faker) {
    return [
        'nom' => $faker->lastname,
        'telephone' => $faker->phoneNumber,
        'mail' => $faker->email,
        'boite_postale' => $faker->numberBetween(98700,98799),
        'n_tahiti' => $faker->numberBetween(1000,2000),
        'password' => $faker->password,
        'credibilite' => $faker->randomDigit
    ];
});
