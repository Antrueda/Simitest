<?php

namespace App\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InAccionGestionEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            'i_porcentaje.required' => 'Ingrese el porcentaje',
            'i_tiempo.required' => 'El tiempo es requerido',
            'i_prm_ttiempo_id.required' => 'Seleccione el tipo de tiempo',
            'sis_actividad_id.required' => 'Seleccione una actividad',
        ];
        $this->_reglasx = [
            'i_porcentaje' =>['required',],
            'i_tiempo' =>['required',],
            'i_prm_ttiempo_id' =>['required',],
            'sis_actividad_id' =>['required',],
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
