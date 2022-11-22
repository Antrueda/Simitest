<?php

namespace App\Http\Requests\Vsi;

use App\Models\sicosocial\Vsi;
use Illuminate\Foundation\Http\FormRequest;

class VsiEstEmocionalEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'descripcion_siente.required' => 'Digite una descripción',
            'prm_siente_id.required' => 'Indique como se siente la mayor parte del tiempo',
            'contexto.required' => 'Indique en que contexto predomina su estado de animo',
            'descripcion_siente.required' => 'Digite una descripción de como se siente',
            'descripcion_reacciona.required' => 'Digite una descripción de como reacciona',
            'descripcion_adecuado.required' => 'Digite una descripción de como se expresa adecuadamente ',
            'descripcion_dificulta.required' => 'Digite una descripción de como se le dificulta expresarse',
            'dificultades.required' => 'Indique cuáles sentimientos y/o emociones se le dificulta expresar adecuadamente',
            'adecuados.required' => 'Indique cuáles sentimientos y/o emociones logra expresar adecuadamente',
            'prm_morir_id.required' => 'Indique si ha tenido pensamientos relacionados con morirse',
            'prm_pensamiento_id.required_if' => 'Indique si ha tenido pensamientos con quitarse la vida',
            'prm_amenaza_id.required_if' => 'Indique si ha tenido amenzas relacionados con quitarse la vida',
            'prm_intento_id.required_if' => 'Indique si ha tenido intentos con quitarse la vida',
            'descripcion_sueno.required_if' => 'Digite una descripción de las dificultades que ha tenido para conciliar el sueño',
            'prm_sueno_id.required' => 'Indique si ha dificultades para conciliar el sueño',
            'prm_riesgo_id.required_if' => 'Indique el nivel de riesgo',
            'prm_lesiva_id.required_if' => 'Indique si tiene conductas auto lesivas',
            'descripcion_alimenticio.required_if' => 'Digite una descripción de las variciones en su habitos alimenticios',
            'prm_alimenticio_id.required' => 'Indique si ha tenido variación en sus habitos alimenticios',
            'motivos.required' => 'Seleccione los motivos o situaciones por el cual ha tenido pensamientos, amenzas e intentos de quitarse la vida',
            'estresantes.required_if' => 'Indicar el tipo de acontencimiento y/o situación',
            'prm_estresante_id.required' => 'Indique si ha ocurrido en su vida algún acontecimiento estresante o traumático que le haya generado afectaciones emocionales',
            'descripcion_estresante.required_if' => 'Digite una descripción de las variciones en su habitos alimenticios',
            'descripcion_motivo.required_if' => 'Digite una descripción de los motivos',
            'descripcion_lesiva.required_if' => 'Digite una descripción de las conductas auto lesivas',
            'dia_morir.required' => 'Indique ¿Desde hace cuánto?',
        ];
        $this->_reglasx = [
            'prm_siente_id' => 'required|exists:parametros,id',
            'descripcion_siente' => 'required|string|max:4000',
            'prm_reacciona_id' => 'nullable|exists:parametros,id',
            'descripcion_reacciona' => 'required|string|max:4000',
            'descripcion_adecuado' => 'required|string|max:4000',
            'prm_estresante_id' => 'required|exists:parametros,id',
            'descripcion_estresante' => 'required_if:prm_estresante_id,227|max:4000',
            'descripcion_dificulta' => 'required|string|max:4000',
            'prm_morir_id' => 'required|exists:parametros,id',
            'dia_morir' => 'nullable|min:0|max:99',
            'mes_morir' => 'nullable|min:0|max:99',
            'ano_morir' => 'nullable|min:0|max:99',
            'prm_pensamiento_id' => 'required',
            'prm_amenaza_id' => 'required',
            'prm_intento_id' => 'required',
            'ideacion' => 'required_if:prm_pensamiento_id,227|min:0|max:99',
            'amenaza' => 'required_if:prm_amenaza_id,227|min:0|max:99',
            'intento' => 'required_if:prm_intento_id,227|min:0|max:99',
            'prm_riesgo_id' => 'required',
            'dia_ultimo' => 'nullable|min:0|max:99',
            'mes_ultimo' => 'nullable|min:0|max:99',
            'ano_ultimo' => 'nullable|min:0|max:99',
            'descripcion_motivo' => 'required|max:4000',
            'prm_lesiva_id' => 'required',
            'descripcion_lesiva' => 'required_if:prm_lesiva_id,227|max:4000',
            'prm_sueno_id' => 'required|exists:parametros,id',
            'dia_sueno' => 'nullable|min:0|max:99',
            'mes_sueno' => 'nullable|min:0|max:99',
            'ano_sueno' => 'nullable|min:0|max:99',
            'descripcion_sueno' => 'required_if:prm_sueno_id,227|max:4000',
            'prm_alimenticio_id' => 'required|exists:parametros,id',
            'dia_alimenticio' => 'nullable|min:0|max:99',
            'mes_alimenticio' => 'nullable|min:0|max:99',
            'ano_alimenticio' => 'nullable|min:0|max:99',
            'descripcion_alimenticio' => 'required_if:prm_alimenticio_id,227|max:4000',
            'adecuados' => 'required|array',
            'dificultades' => 'required|array',
            'estresantes' => 'required_if:prm_estresante_id,227|array',
            'motivos' => 'required|array',
            'lesivas' => 'required_if:prm_lesiva_id,227|array',
            'contexto' => 'required|array',
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
        if (isset($this->dificultades)) {
            if (in_array(931, $this->dificultades)) {
                $this->_reglasx['descripcion_dificulta'] = 'nullable|string|max:4000';
            }
        }
        if (isset($this->adecuados)) {
            if (in_array(931, $this->adecuados)) {
                $this->_reglasx['descripcion_adecuado'] = 'nullable|string|max:4000';
            }
        }

        //validamos que selecione alguno de los tres campos desde hace cuando?
        if ($this->prm_morir_id == '227') {
            if ($this->dia_morir == null && $this->mes_morir == null && $this->ano_morir == null) {
                $this->_reglasx['dia_morir'] = 'required';
            }
        }
    }
}
