<?php

use Faker\Generator as Faker;
use App\Paciente;

$factory->define(App\Control::class, function (Faker $faker) {
    return [

				'id_paciente' 			=>Paciente::all()->random()->id,
				'motivo_consulta'       => $faker->text,
				'hea'                   => $faker->text,
				'examen_fisico'         => $faker->text,
				'examen_complementario' => $faker->text,
				'impresion_diagnostica' => $faker->text,
				'conducta_seguir'       => $faker->text,
			];
});
