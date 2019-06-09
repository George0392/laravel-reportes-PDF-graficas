<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{

        protected $fillable = [
                'nombre',
                'direccion',
                'telefono',
                'municipio',
                'parroquia',
                'estado',
                'asic',
                'familia'
                ];

}
