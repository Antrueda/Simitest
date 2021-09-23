<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiRedApoyoAntecedenteCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
         $this->_mensaje = [
            'i_tiempo.required' => 'Ingrese el tiempo',
            's_servicio.required' => 'Escriba el servicio recibido',
            'i_prm_tiempo_id.required' => 'Seleccione el tiempo',
            'i_prm_anio_prestacion_id.required' => 'Seleccione el añio de prestacion del servicio',
           
        ];
        $this->_reglasx = [
            'i_tiempo' => ['required'],
            's_servicio' => ['required'],
            'i_prm_tiempo_id' => ['required'],
            'i_prm_anio_prestacion_id' => ['required'],
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
