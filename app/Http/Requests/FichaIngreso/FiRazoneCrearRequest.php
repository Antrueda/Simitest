<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiRazoneCrearRequest extends FormRequest
{

    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            's_porque_ingresar.required' => 'Seleccione razones ingresar al idipron',
            's_persona_diligencia.required' => 'Seleccione persona que diligencia',
            's_documento.required' => 'Seleccione documento de identidad persona que diligencia',
            's_cargo_contrato.required' => 'Seleccione cargo o contrato persona que diligencia',
            's_area_equipo.required' => 'Seleccione area o equipo persona que diligencia',
            's_persona_responsable.required' => 'Seleccione nombre persona responsable',
            's_documento_responsable.required' => 'Seleccione documento de identidad responsable',
            's_cargo_contrato_reponsable.required' => 'Seleccione cargo o contrato persona responsable',
            's_area_equipo_reponsable.required' => 'Seleccione área o equipo persona responsable',
            'i_prm_estado_ingreso_id.required' => 'Seleccione el estado del ingreso',
        ];
        $this->_reglasx = [
            's_porque_ingresar' => ['Required'],
            's_persona_diligencia' => ['Required'],
            's_documento' => ['Required'],
            's_cargo_contrato' => ['Required'],
            's_area_equipo' => ['Required'],
            's_persona_responsable' => ['Required'],
            's_documento_responsable' => ['Required'],
            's_cargo_contrato_reponsable' => ['Required'],
            's_area_equipo_reponsable' => ['Required'],
            'i_prm_estado_ingreso_id' => ['Required'],
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
