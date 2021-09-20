<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SisCargoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_cargo.required' => 'Seleccione una pregunta',
            'sis_esta_id.required' => 'Seleccione un estado',
            'estusuario_id.required' => 'Seleccione una jutificación',
        ];
        $this->_reglasx = [
            's_cargo' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
                 'unique:sis_cargos,s_cargo,'
            ],
            'sis_esta_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma

            ],
            'estusuario_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma

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
