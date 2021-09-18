<?php

namespace app\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InValidacionCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'in_fuente_id.required' => 'Seleccione una línea base',
            'in_pregunta_id.required' => 'Seleccione una pregunta',
            'sis_tcampo_id.required' => 'Seleccione un campo',
            'i_prm_respuesta_id.required' => 'Seleccione al menos una respuesta para la pregunta',
        ];
        $this->_reglasx = [
            'in_fuente_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'sis_tcampo_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'in_pregunta_id' =>
            [
                'required', //y todos las validaciones a que haya lugar separadas por coma
            ],
            'i_prm_respuesta_id'=>['required',]
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
