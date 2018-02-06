<?php

use Faker\Generator as Faker;

$factory->define(App\Don::class, function (Faker $faker) {
    return [
            'nom' => $faker->lastname,
            'prenom' =>$faker->firstname,
            'mail' =>$faker->unique()->safeEmail,
            'password' =>$faker->password,
            'telephone' =>$faker->phoneNumber,
            'addresse' =>$faker->text(10),
            'don' =>$faker->randomDigit,
            'mode_don_id' =>$faker->numberBetween(1,2),
            'date' =>$faker->date('Y-m-d'),
            'heure' =>$faker->time('H:i:s'),
            'validate' =>$faker->numberBetween(0,1),
            'admin_id' =>$faker->numberBetween(1,5),
            'somme_verse' =>$faker->numberBetween(10000,1000000),
            'operation_id' =>$faker->numberBetween(1,2)
    ];
});

            