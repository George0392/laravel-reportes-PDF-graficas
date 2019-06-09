<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicamentoUpdateRequest extends FormRequest
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
            //
        'nombre'        => 'required',
        // valida todos los campos menos la cedula que esta pasando por id
            // el $this->medicamento evalua la variable pasada por la ruta ejemplo
            //'medicamento/{medicamento}/edit
        'codigo'        => 'required|numeric|unique:medicamentos,codigo,' . $this->medicamento,
        'cantidad'      => 'required|numeric|min:1',
        ];
    }
}
