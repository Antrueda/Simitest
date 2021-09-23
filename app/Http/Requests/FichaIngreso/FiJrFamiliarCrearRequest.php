<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiJrFamiliarCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'fi_compfami_id.required' => 'Seleccione un familiar',
            'fi_compfami_id.unique' => 'El componente ya está asociado',
            's_proceso.required' => 'Seleccione el proceso del familiar',
            'i_prm_vigente_id.required' => 'Seleccione si está vigente',
            'i_veces.required' => 'Ingrese el número de veces',
            'i_prm_motivo_id.required' => 'Seleccione el motivo del familiar',
            'i_tiempo.required' => 'Ingrese el tiempo del proceso',
            'i_prm_tiempo_id.required' => 'Seleccione si fueron meses o años',

        ];

        $this->_reglasx = [
            'fi_compfami_id'=>['required'],
            's_proceso'=>['required'],
            'i_prm_vigente_id'=>['required'],
            'i_veces'=>['required'],
            'i_prm_motivo_id'=>['required'],
            'i_tiempo'=>['required'],
            'i_prm_tiempo_id'=>['required'],
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
