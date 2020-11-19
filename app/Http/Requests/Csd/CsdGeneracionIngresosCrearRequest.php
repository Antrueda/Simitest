<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdGeneracionIngresosCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_actividad_id.required' => 'Seleccione tipo de actividad',
            'observacion.required' => 'Por favor ingrese alguna observacion',

        ];
        $this->_reglasx = [
            'prm_actividad_id' => 'required|exists:parametros,id',
            'trabaja' => 'required_if:prm_actividad_id,626',
            'prm_informal_id' => 'required_if:prm_actividad_id,627',
            'prm_otra_id' => 'required_if:prm_actividad_id,628',
            'prm_laboral_id' => 'required_if:prm_actividad_id,626',
            'intensidad' => 'required_unless:prm_actividad_id,853',
            'razon' => 'exclude_if:prm_dificultad_id,228|string|max:4000',
            'observacion' => 'required',

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
