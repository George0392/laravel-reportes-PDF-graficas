<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoStoreRequest extends FormRequest
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

        'cedula'        => 'required|unique:medicos,cedula',
        'nombre'        => 'required|max:100',
        'foto'          => 'mimes:jpg,jpeg,bmp,png',
        'codigo_medico' => 'required|max:100',
        'especialidad'  => 'required|max:100',
        'cargo'         => 'required|max:100',
        'observaciones',
        'telefono'      => 'numeric|min:7',
        'correo'        => 'email|max:100',
        'otros'

        ];
    }

}
