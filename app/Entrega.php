<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $primaryKey='id_entrega';

        protected $fillable = [
                'id_paciente',
                'id_consultorio',
                'id_medico',
                'id_medicamento',
                'cantidad'
                ];
}
