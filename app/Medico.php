<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{

        protected $fillable = [
        'cedula',
        'nombre',
        'foto',
        'codigo_medico',
        'especialidad',
        'cargo',
        'observaciones',
        'telefono',
        'correo',
        'otros'
    ];
}
