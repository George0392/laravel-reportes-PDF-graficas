<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
	// llamar llave primaria
    protected $primaryKey='id_control';

        protected $fillable = [
                'id_paciente',
                'motivo_consulta',
                'hea',
                'examen_fisico',
                'examen_complementario',
                'impresion_diagnostica',
                'conducta_seguir'

                ];
}
