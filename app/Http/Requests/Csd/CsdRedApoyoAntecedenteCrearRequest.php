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
            'tiempo.required' => 'Ingrese el tiempo',
            'servicios.required' => 'Escriba el servicio recibido',
            'prm_unidad_id.required' => 'Seleccione el tiempo',
            'ano.required' => 'Seleccione el añio de prestacion del servicio',
           
        ];
        $this->_reglasx = [
            'tiempo' => ['required'],
            'servicios' => ['required'],
            'prm_unidad_id' => ['required'],
            'ano' => ['required'],
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
