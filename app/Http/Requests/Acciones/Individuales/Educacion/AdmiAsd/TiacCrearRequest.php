<?php

namespace App\Http\Requests\Acciones\Individuales\Educacion\AdmiAsd;

use Illuminate\Foundation\Http\FormRequest;

class TiacCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'nombre.required'               => 'Debe diligenciar el nombre del tipo de actividad.',
            'prm_lugactiv_id.required'      => 'Debe diligenciar el lugar de la actividad.',
            'item.required'                 => 'Debe diligenciar el item del tipo de actividad.',
            'descripcion.required'          => 'Debe diligenciar la descripción del tipo de actividad.',
            'sis_esta_id.required'          => 'Debe seleccionar el estado del tipo de actividad.',
            'estusuarios_id.required'       => 'Debe seleccionar la justificacion del estado del tipo de actividad.',
        ];        
        $this->_reglasx = [
            'nombre'               => ['required', 'string'],
            'prm_lugactiv_id'       => ['required', 'integer'],
            'item'                 => ['required', 'string'],
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
    }
}
