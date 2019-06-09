<?php

use Faker\Generator as Faker;

$factory->define(App\Medicamento::class, function (Faker $faker) {
    return [
		'nombre'   => $faker->name,
		'codigo'	=> $faker->numberBetween(123456789,987654321),
		'cantidad' => $faker->numberBetween(0,320),
    ];
});
