<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdGeneracionAportanteCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_aporta_id.required' => 'Seleccione aportante',
            'mensual.required' => 'Por favor indique el ingreso mensual',
            'aporte.required' => 'Por favor indique el aporte',
            
        ];
        $this->_reglasx = [
            'prm_aporta_id' => 'required|exists:parametros,id',
            'mensual' => 'required|integer|min:0',
            'aporte' => 'required|integer|min:0',
            'dias' => 'required|array',
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
