<?php

namespace App\Http\Requests\Csd;

use Illuminate\Foundation\Http\FormRequest;

class CsdRedApoyoAntecedenteCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
         $this->_mensaje = [
           
        ];
        $this->_reglasx = [
            'nombre'        => 'required|string|max:120',
            'cantidad'      => 'nullable|integer|min:1|max:99',
            'prm_unidad_id' => 'required|exists:parametros,id',
            'ano'           => 'required|integer|min:2000|max:2030',
            'servicios'     => 'required|string|max:120',
            'retiro'        => 'nullable|string|max:120',
        
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
     * Get the validation rules that Apply to the request.
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
