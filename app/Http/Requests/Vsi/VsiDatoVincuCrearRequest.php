<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiDatoVincuCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_razon_id.required' => 'Seleccione una razon',
            'prm_persona_id.required' => 'Seleccione una persona',
            'ano.required' => 'ingrese un año',
            'mes.required' => 'ingrese un mes',
            'dia.required' => 'ingrese un día',
            'situaciones.required' => 'Seleccione una situacion',
            'emociones.required' => 'Seleccione una emosión',
        ];
        $this->_reglasx = [
            'prm_razon_id' => 'required|exists:parametros,id',
            'prm_persona_id' => 'required|exists:parametros,id',
            'dia' => 'required|integer|min:0|max:99',
            'mes' => 'required|integer|min:0|max:99',
            'ano' => 'required|integer|min:0|max:99',
            'situaciones' => 'required|array',
            'emociones' => 'required|array'
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
