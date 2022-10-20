<?php

namespace App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use Illuminate\Foundation\Http\FormRequest;

class DastPreguntaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'pregunta.required'               => 'Debe diligenciar la pregunta.',
            'pregunta.unique'                 => 'La pregunta ya se encuentra registrada',
            'sis_esta_id.required'          => 'Debe seleccionar el estado de la pregunta.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado de la pregunta.',
        ];
        $this->_reglasx = [
            'pregunta'               => ['required', 'string', 'max:300', 'unique:dast_preguntas,pregunta'],
            'estusuarios_id'       => ['required', 'integer', 'exists:estusuarios,id'],
            'sis_esta_id'          => ['required', 'integer', 'exists:sis_estas,id'],
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
    }
}
