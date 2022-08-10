<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional;

use Illuminate\Foundation\Http\FormRequest;

class VctSubareaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre de la subarea.',
            'nombre.unique'                 => 'el nombre de Sub-área ya se encuentra en uso',
            'descripcion.required'          => 'Debe diligenciar la descripción de la subarea.',
            'vcto_area_id.required'         => 'Debe diligenciar el área.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado de la subarea.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado de la subarea.',
        ];        
        $this->_reglasx = [
            'descripcion'          => ['required', 'string'],
            'vcto_area_id'         => ['required'],
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
            'unique:vcto_subareas,nombre,' . $this->segments()[3]
        ];
        return $this->_reglasx;
    }

    public function validar()
    {
    }
}
