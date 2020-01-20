<?php

namespace App\Http\Requests\Indicadores;

use Illuminate\Foundation\Http\FormRequest;

class InLigruCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        
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
        return $this->_mensaje=[];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->validar();
        return $this->_reglasx=[];
    }

    public function validar()
    {
        $dataxxxx = $this->toArray(); // todo lo que se envia del formulario
        
    }
}
