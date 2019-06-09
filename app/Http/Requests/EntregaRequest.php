<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntregaRequest extends FormRequest
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
                'id_paciente'    => 'required',
                'id_consultorio' => 'required',
                'id_medico'      => 'required',
                'id_medicamento' => 'required',
                'cantidad'       => 'required|numeric|min:1',
        ];
    }
}
