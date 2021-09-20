<?php

namespace app\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiDatoVincuCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_razon_id.required' => 'Seleccione una razon',
            'ano.required' => 'ingrese un año',
            'mes.required' => 'ingrese un mes',
            'dia.required' => 'ingrese un día',
            'situaciones.required' => 'Seleccione una situacion',
            'emociones.required' => 'Seleccione una emoción',
            'personas.required' => 'Seleccione una persona',
        ];
        $this->_reglasx = [
            'prm_razon_id' => 'required|exists:parametros,id',
            'dia' => 'nullable|integer|min:0|max:99',
            'mes' => 'nullable|integer|min:0|max:99',
            'ano' => 'nullable|integer|min:0|max:99',
            'situaciones' => 'required|array',
            'emociones' => 'required|array',
            'personas' => 'required|array'
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
