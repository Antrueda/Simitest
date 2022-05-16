<?php

namespace App\Http\Requests\Administracion\AdmiPerfilVocacional;

use Illuminate\Foundation\Http\FormRequest;

class PvfActiEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre del área de interés.',
            'area_id.required'               => 'Debe diligenciar el área de interés.',
            'descripcion.required'          => 'Debe diligenciar la descripción del área de interés.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del área de interés.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del área de interés.',
        ];        
        $this->_reglasx = [
            'nombre'               => ['required', 'string'],
            'area_id'               => ['required'],
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
        return $this->_reglasx;
    }

    public function validar()
    {
        // $this->_reglasx['nombre'][3]='unique:temas,nombre,'.$this->segments()[3];
    }
}
