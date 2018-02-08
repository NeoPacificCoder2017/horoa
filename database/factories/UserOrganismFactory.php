<?php

use Faker\Generator as Faker;

$factory->define(App\UserOrganism::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberbetween(1,30),
        'organism_id' => $faker->numberbetween(1,30),
        'credibilite' => $faker->randomDigit
    ];
});
