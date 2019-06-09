<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultorioRequest extends FormRequest
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

                'nombre'    => 'required',
                'direccion' => 'required',
                'telefono'  => 'required|numeric|min:7',
                'municipio' => 'required',
                'parroquia' => 'required',
                'estado'    => 'required',
                'asic'      => 'required',
                'familia'   => 'required',
        ];
    }
}
