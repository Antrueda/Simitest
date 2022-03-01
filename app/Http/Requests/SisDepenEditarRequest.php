<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SisDepenEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

        $this->_mensaje = [
            's_correo.required' => 'Ingrese un correo',
            's_telefono.required' => 'Igrese un telefono',
            'sis_upzbarri_id.required' => 'Seleccione un barrio',
            'sis_departam_id.required' => 'Seleccione un departamento ',
            'sis_municipio_id.required' => 'Seleccione un municipio ',
            's_direccion.required' => 'Igrese una direccion',
            'i_prm_sexo_id.required' => 'Seleccione un sexo',
            'i_prm_tdependen_id.required' => 'Seleccione un tipo de dependencia',
            'i_prm_cvital_id.required' => 'Seleccione un ciclo vital',
            'nombre.required' => 'Igrese un nombre',
            'sis_esta_id.required' => 'Seleccione un estado',
            'estusuario_id.required' => 'Seleccione una justificación',
            'maxinasistencia.required' => 'El tiempo de inasistencia es obligatorio',
            'maxinasistencia.numeric' => 'El tiempo de inasistencia debe ser numerico',
            'maxinasistencia.min' => 'El tiempo de inasistencia no puede ser negativo',
            'maxinasistencia.max' => 'El tiempo de inasistencia no puede ser mayor de 127',
        ];
        $this->_reglasx = [
            's_correo' => ['required'],
            's_telefono' => ['required'],
            'sis_upzbarri_id' => ['required'],
            'sis_departam_id' => ['required'],
            'sis_municipio_id' => ['required'],
            's_direccion' => ['required'],
            'i_prm_sexo_id' => ['required'],
            'i_prm_tdependen_id' => ['required'],
            'i_prm_cvital_id' => ['required'],
            'nombre' => ['required'],
            'sis_esta_id' => ['required'],
            'estusuario_id' => ['required'],
            'maxinasistencia' => 'required|numeric|min:0|max:127',
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
