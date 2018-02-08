<?php

use Faker\Generator as Faker;

$factory->define(App\Actuality::class, function (Faker $faker) {
    return [
       'post'=>$faker->text(50),
       'date'=>$faker->date('Y-m-d'),
       'heure'=>$faker->time('H:i:s'),
       'user_id'=>$faker->randomDigit,
       'operation_id'=>$faker->randomDigit
    ];
});
