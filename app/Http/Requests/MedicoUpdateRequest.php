<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoUpdateRequest extends FormRequest
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
            // valida todos los campos menos la cedula que esta pasando por id
            // el $this->medicos evalua la variable pasada por la ruta ejemplo
            //'medicos/{medicos}/edit
            'cedula' => 'required|unique:medicos,cedula,' . $this->medicos,

        ];
    }
}
