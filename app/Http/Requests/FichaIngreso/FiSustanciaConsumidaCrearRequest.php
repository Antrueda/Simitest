<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiSustanciaConsumidaCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_sustancia_id.required' => 'Seleccione la sustancia',
            'i_edad_uso.required' => 'Escriba la edad de uso por primera vez',
            'i_prm_consume_id.required' => 'Seleccione si ha consumido el último mes',
        ];
        $this->_reglasx = [
            'i_prm_sustancia_id' => ['required'],
            'i_edad_uso' => ['required'],
            'i_prm_consume_id' => ['required'], 
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
