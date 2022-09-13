<?php

namespace App\Http\Requests\Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast;

use Illuminate\Foundation\Http\FormRequest;

class DastAccionEditRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre de la Acción.',
            'nombre.unique'                 => 'El Acción ya se encuentra registrada',
            'descripcion.required'          => 'Debe diligenciar la descripción de la Acción.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado de la Acción.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado de la Acción.',
        ];
        $this->_reglasx = [
            'descripcion'          => ['required', 'string'],
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
        $this->_reglasx['nombre'] = [
            'required', 'string',
            'unique:dast_acciones,nombre,' . $this->segments()[3]
        ];
        return $this->_reglasx;
    }

    public function validar()
    {
    }
}
