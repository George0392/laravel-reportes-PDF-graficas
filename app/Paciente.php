<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

// llamar llave primaria
    // protected $primaryKey='id_paciente';


   protected $fillable = [
        'nombre',
        'fecha_nac',
        'cedula',
        'num_historia',
        'sexo',
        'direccion',
        'telefono',
        'foto',
        'app',
        'apf',
        'grupo_sangre',
        'rh',
        'vacunacion',
        'reaccion_med',
        'alergias',
        'piel',
        'etnia',
        'cafe',
        'tabaco',
        'alcohol',
        'otros',
        'trans_sangre',
        'accidentes',
        'traumatismos',
        'operaciones',
        'menarquia',
        'embarazos',
        'menstrual',
        'partos',
        'abortos',
        'menopausia',
        'citologia'

    ];
}
