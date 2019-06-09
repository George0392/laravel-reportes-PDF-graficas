<?php

use Faker\Generator as Faker;

$factory->define(App\Consultorio::class, function (Faker $faker) {
    return [
        //
        'nombre'    => $faker->name,
        'direccion' => $faker->streetAddress,
        'telefono'  => $faker->numberBetween(1000000,32000000),
        'municipio' => $faker->firstName,
        'parroquia' => $faker->firstName,
        'estado'    => $faker->state,
        'asic'      => $faker->text,
        'familia'   => $faker->text,

    ];
});
