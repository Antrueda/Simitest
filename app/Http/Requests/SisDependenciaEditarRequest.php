<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SisDependenciaEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_observacion.required' => 'Ingrese una observación para el registro',
            's_correo.required' => 'Ingrese un correo',
            's_telefono.required' => 'Igrese un telefono',
            'sis_barrio_id.required' => 'Seleccione un barrio',
            'sis_municipio_id.required' => 'Seleccione un municipio ',
            's_direccion.required' => 'Igrese una direccion',
            'i_prm_sexo_id.required' => 'Seleccione un sexo',
            'i_prm_tdependen_id.required' => 'Seleccione un tipo de dependencia',
            'i_prm_cvital_id.required' => 'Seleccione un ciclo vital',


        ];
        $this->_reglasx = [
            's_observacion' => ['required'],
            's_correo' => ['required'],
            's_telefono' => ['required'],
            'sis_barrio_id' => ['required'],
            'sis_municipio_id' => ['required'],
            's_direccion' => ['required'],
            'i_prm_sexo_id' => ['required'],
            'i_prm_tdependen_id' => ['required'],
            'i_prm_cvital_id' => ['required'],

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
