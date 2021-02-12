<?php

namespace App\Http\Requests\Sistema;

use Illuminate\Foundation\Http\FormRequest;

class SisEslugCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_espaluga.required' => 'Ingrese el nombre del espacio/lugar',
            's_espaluga.unique' => 'el espacio/lugar ya se encuentra en uso',
            'estusuario_id.required' => 'Ingrese una justificación de estado',      
            'sis_esta_id.required' => 'Seleccione un estado',  
        ];
        $this->_reglasx = [
            's_espaluga' =>[
                'required', //y todos las validaciones a que haya lugar separadas por coma
                'unique:sis_eslugs,s_espaluga,'
            ],
            'estusuario_id' =>
            [
                'required',
            ],
            'sis_esta_id'=>
            [
                'required',
            ],
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return $this->_mensaje;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();
        return $this->_reglasx;
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
    }
}
