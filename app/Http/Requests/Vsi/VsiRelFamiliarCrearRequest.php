<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiRelFamiliarCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_representativa_id.required' => 'Seleccione un representante',
            'representativa.required' => 'Ingrese una descripción',
            'prm_mala_id.required' => 'Seleccione una persona',
            'prm_relacion_id.required' => 'Seleccione una relación',
            'motivos.required' => 'Seleccione un motivo',
            'prm_gusto_id.required' => 'Seleccione un gusto',
            'porque.required' => 'Indique porque',
            'prm_familia_id.required' => 'Seleccione un familiar',
            'famDificultades.required' => 'Seleccione una dificultad',
            'acciones.required' => 'Seleccione una acción',
            'prm_denuncia_id.required' => 'Seleccione una denuncia',
            'descripcion.required' => 'Ingrese una descripción',
            'prm_pareja_id.required' => 'Seleccione una pareja',
            'prm_dificultad_id.required' => 'Seleccione una dificultad',

            'dia.required' => 'Ingrese un día',
            'mes.required' => 'Ingrese un mes',
            'ano.required' => 'Ingrese un año',
            'prm_responde_id.required' => 'Selecciones quien responde',
            'descripcion1.required' => 'Ingrese una descripción'
        ];
        $this->_reglasx = [
            'prm_representativa_id' => 'required|exists:parametros,id',
            'representativa' => 'required|string|max:4000',
            'prm_mala_id' => 'required|exists:parametros,id',
            'prm_relacion_id' => 'required|exists:parametros,id',
            'motivos' => 'required_unless:prm_mala_id,235|array',
            'prm_gusto_id' => 'required|exists:parametros,id',
            'porque' => 'required|string|max:4000',
            'prm_familia_id' => 'required|exists:parametros,id',
            'famDificultades' => 'required_if:prm_familia_id,227|array',
            'acciones' => 'required_if:prm_familia_id,227|array',
            'prm_denuncia_id' => 'required_if:prm_familia_id,227',
            'descripcion' => 'required_if:prm_familia_id,227',
            'prm_pareja_id' => 'required|exists:parametros,id',
            'prm_dificultad_id' => 'required_if:prm_pareja_id,227',
            'dia' => 'nullable:prm_dificultad_id,227|min:0|max:99',
            'mes' => 'nullable:prm_dificultad_id,227|min:0|max:99',
            'ano' => 'nullable:prm_dificultad_id,227|min:0|max:99',
            'prm_responde_id' => 'required_if:prm_dificultad_id,227',
            'descripcion1' => 'required_if:prm_dificultad_id,227'
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

    }
}
