<?php

use Faker\Generator as Faker;

$factory->define(App\Medico::class, function (Faker $faker) {
    return [

		'cedula'        =>$faker->numberBetween(1000000,32000000),
		'nombre'        => $faker->name,
		'foto'          =>str_random(5).'.jpg',
		'codigo_medico' =>$faker->numberBetween(1000000,32000000),
		'especialidad'  =>'oftalmologo',
		'cargo'         =>'director',
		'observaciones' =>$faker->text,
		'telefono'      =>$faker->numberBetween(1000000,32000000),
		'correo'        =>str_random(12).'@cdi.org',
		'otros'         =>$faker->text,

    ];
});
