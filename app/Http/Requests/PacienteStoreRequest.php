<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'       => 'required|max:100',
            'fecha_nac'    => 'required|max:100',
            'cedula'       => 'required|unique:pacientes,cedula',
            'num_historia' => 'required',
            'sexo'         => 'required',
            'direccion'    => 'required',
            'telefono'     => 'numeric|min:7',
            'foto'         => 'mimes:jpg,jpeg,bmp,png',
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
            'citologia',
        ];
    }
}
