<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiEstEmocionalCrearRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'descripcion_siente.required_if' => 'Ingrese una descripción',
        ];
        $this->_reglasx = [
            'prm_siente_id' => 'required|exists:parametros,id',
            'prm_contexto_id' => 'required|exists:parametros,id',
            'descripcion_siente' => 'required|string|max:4000',
            'prm_reacciona_id' => 'nullable|exists:parametros,id',
            'descripcion_reacciona' => 'required|string|max:4000',
            'descripcion_adecuado' => 'required|string|max:4000',
            'descripcion_dificulta' => 'required|string|max:4000',
            'prm_estresante_id' => 'required|exists:parametros,id',
            'descripcion_estresante' => 'required_if:prm_estresante_id,227|max:4000',
            'prm_morir_id' => 'required|exists:parametros,id',
            'dia_morir' => 'required_if:prm_morir_id,227|min:0|max:99',
            'mes_morir' => 'required_if:prm_morir_id,227|min:0|max:99',
            'ano_morir' => 'required_if:prm_morir_id,227|min:0|max:99',
            'prm_pensamiento_id' => 'required_if:prm_morir_id,227',
            'prm_amenaza_id' => 'required_if:prm_morir_id,227',
            'prm_intento_id' => 'required_if:prm_morir_id,227',
            'ideacion' => 'required_if:prm_pensamiento_id,227|min:0|max:99',
            'amenaza' => 'required_if:prm_amenaza_id,227|min:0|max:99',
            'intento' => 'required_if:prm_intento_id,227|min:0|max:99',
            'prm_riesgo_id' => 'required_if:prm_morir_id,227',
            'dia_ultimo' => 'required_if:prm_intento_id,227|min:0|max:99',
            'mes_ultimo' => 'required_if:prm_intento_id,227|min:0|max:99',
            'ano_ultimo' => 'required_if:prm_intento_id,227|min:0|max:99',
            'descripcion_motivo' => 'required_if:prm_morir_id,227|max:4000',
            'prm_lesiva_id' => 'required_if:prm_morir_id,227',
            'descripcion_lesiva' => 'required_if:prm_lesiva_id,227|max:4000',
            'prm_sueno_id' => 'required|exists:parametros,id',
            'dia_sueno' => 'required_if:prm_sueno_id,227|min:0|max:99',
            'mes_sueno' => 'required_if:prm_sueno_id,227|min:0|max:99',
            'ano_sueno' => 'required_if:prm_sueno_id,227|min:0|max:99',
            'descripcion_sueno' => 'required_if:prm_sueno_id,227|max:4000',
            'prm_alimenticio_id' => 'required|exists:parametros,id',
            'dia_alimenticio' => 'required_if:prm_alimenticio_id,227|min:0|max:99',
            'mes_alimenticio' => 'required_if:prm_alimenticio_id,227|min:0|max:99',
            'ano_alimenticio' => 'required_if:prm_alimenticio_id,227|min:0|max:99',
            'descripcion_alimenticio' => 'required_if:prm_alimenticio_id,227|max:4000',
            'adecuados' => 'required|array',
            'dificultades' => 'required|array',
            'estresantes' => 'required_if:prm_estresante_id,227|array',
            'motivos' => 'required_if:prm_morir_id,227|array',
            'lesivas' => 'required_if:prm_lesiva_id,227|array',
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
