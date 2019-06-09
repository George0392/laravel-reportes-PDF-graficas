<?php

use Faker\Generator as Faker;
use App\Paciente;
use App\Consultorio;
use App\Medico;
use App\Medicamento;

$factory->define(App\Entrega::class, function (Faker $faker) {
    return [
		'id_paciente'    => Paciente::all()->random()->id,
		'id_consultorio' => Consultorio::all()->random()->id,
		'id_medico'      => Medico::all()->random()->id,
		'id_medicamento' => Medicamento::all()->random()->id,
        'cantidad' 		 => $faker->numberBetween(1,20),

    ];
});
