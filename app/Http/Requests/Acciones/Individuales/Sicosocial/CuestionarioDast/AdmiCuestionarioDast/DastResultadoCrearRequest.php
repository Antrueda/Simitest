<?php

namespace App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use Illuminate\Foundation\Http\FormRequest;

class DastResultadoCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'minimo.required'               => 'Debe diligenciar el minimo de puntaje del resultado.',
            'minimo.numeric'               => 'El puntaje minimo no puede ser difente a numero.',
            'minimo.digits_between'               => 'El puntaje minimo puede tener maximo tres digitos.',
            'superior.required'               => 'ebe diligenciar el superior de puntaje del resultado.',
            'superior.numeric'               => 'El puntaje superior no puede ser difente a numero.',
            'superior.digits_between'               => 'El puntaje superior puede tener maximo tres digitos.',
            'accion_id.required'               => 'Debe diligenciar la accion del resultado.',
            'grado_problema.required'          => 'Debe diligenciar el grado del problema del resultado.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del resultado.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del resultado.',
        ];
        $this->_reglasx = [
            'minimo'               => ['required', 'numeric', 'digits_between:1,3'],
            'superior'               => ['required', 'numeric', 'digits_between:1,3'],
            'accion_id'               => ['required', 'numeric'],
            'grado_problema'          => ['required', 'string', 'max:100'],
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
