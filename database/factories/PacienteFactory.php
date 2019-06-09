<?php

use Faker\Generator as Faker;

$factory->define(App\Paciente::class, function (Faker $faker) {
		return [

		'nombre'      => $faker->name,
		'fecha_nac'    => $faker->date,
		'cedula'       => $faker->numberBetween(1000000,32000000),
		'num_historia' => $faker->numberBetween(1000000,32000000),
		'sexo'         => 'M',
		'direccion'    => $faker->address,
		'telefono'     => $faker->numberBetween(1000000,32000000),
		'foto'         => str_random(5).'.jpg',
		'app'          => $faker->text,
		'apf'          => $faker->text,
		'grupo_sangre' => 'O',
		'rh'           => 'RH+',
		'vacunacion'   => $faker->text,
		'reaccion_med' => $faker->text,
		'alergias'     => $faker->text,
		'piel'         => $faker->text,
		'etnia'        => $faker->text,
		'cafe'         =>'SI',
		'tabaco'       =>'SI',
		'alcohol'      =>'SI',
		'otros'        => $faker->text,
		'trans_sangre' =>'SI',
		'accidentes'   => $faker->text,
		'traumatismos' => $faker->text,
		'operaciones'  => $faker->text,
		'menarquia'    => $faker->numberBetween(0,12),
		'embarazos'    => $faker->numberBetween(0,12),
		'menstrual'    => 'REGULAR',
		'partos'       => $faker->numberBetween(0,12),
		'abortos'      => $faker->numberBetween(0,12),
		'menopausia'   =>'NO',
		'citologia'    => $faker->text,

		];
});
