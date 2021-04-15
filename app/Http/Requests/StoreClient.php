<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClient extends FormRequest
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
            'dni' => 'required',
            'caduca' => 'required',
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2' => '',
            'alias' => 'required',
            'keywords' => 'required',
            'cuenta' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'codigoPostal' => 'required',
            'poblacion' => 'required',
            'telefono' => 'required',
            'idioma' => 'required',
            'email' => 'required',
            'mailing' => 'required',
            'segmento' => 'required'
        ];
    }
}
