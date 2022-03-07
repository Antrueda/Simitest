<?php

namespace App\Http\Requests\AdmiAsd;

use Illuminate\Foundation\Http\FormRequest;

class ActiviCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre de la actividad.',
            'descripcion.required'          => 'Debe diligenciar la descripción de la actividad.',
            'tipos_actividad_id.required'   => 'Debe seleccionar el tipo de la actividad.',
            'consectivo_item.required'      => 'Debe seleccionar el  consecutivo del item.',
           
            'estusuarios_id.required'       => 'Debe seleccionar el estado de la actividad.',
            'sis_esta_id.required'          => 'Debe seleccionar la justificacion del estado de la actividad.',
        ];

        $this->_reglasx = [
            'nombre'               => ['required', 'string'],
            'descripcion'          => ['required', 'string'],
            'tipos_actividad_id'   => ['required', 'integer', 'exists:asd_tiactividads,id'],
            'consectivo_item'      => ['required', 'integer'],
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
