<?php

namespace App\Http\Requests\Vsi;

use Illuminate\Foundation\Http\FormRequest;

class VsiAbuSexualEditarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_evento_id.required' => 'Seleccione un evento',
            'prm_momento_id.required_if' => 'En que momento se presento el evento',
            'prm_terapia_id.required_if' => 'Indique si ha recibido apoyo terapéutico',
            'prm_estado_id.required_if' => 'Indique en que estado se encuentrao el proceso terapéutico',
            'prm_momento_ult_id.required_if' => 'En que momento se presento el evento',
            'prm_persona_ult_id.required_if' => 'Que persona se encuentra involucrada',
            'prm_tipo_id.required' => '¿Cual fue el tipo de evento?',
            'prm_tipo_ult_id.required_if' => '¿Cual fue el tipo de evento?',
            'prm_convive_id.required_if' => 'Indique si actualmente convive con el agresor',
            'prm_presencia_id.required_if' => '¿Hay presencia o cercanía en la vivienda con el agresor?',
            'prm_reconoce_id.required_if' => '¿Existe reconocimiento de la situacion por parte de la familia?',
            'prm_apoyo_id.required_if' => '¿Existe apoyo de la situacion por parte de familia?',
            'prm_denuncia_id.required_if' => 'Indique si se ha presentado denuncia',
        ];
        $this->_reglasx = [
            'prm_evento_id' => 'required|exists:parametros,id',
            'dia' => 'nullable:prm_evento_id,227|min:0|max:99',
            'mes' => 'nullable:prm_evento_id,227|min:0|max:99',
            'ano' => 'nullable:prm_evento_id,227|min:0|max:99',
            'prm_persona_id' => 'nullable:prm_evento_id,227',
            'prm_terapia_id' => 'required_if:prm_evento_id,227',
            'prm_estado_id' => 'required_if:prm_terapia_id,227',
            'prm_momento_id' => 'required_if:prm_evento_id,227',
            'dia_ult' => 'nullable:prm_momento_id,1014|min:0|max:99',
            'mes_ult' => 'nullable:prm_momento_id,1014|min:0|max:99',
            'ano_ult' => 'nullable:prm_momento_id,1014|min:0|max:99',
            'prm_momento_ult_id' => 'required_if:prm_evento_id,227',
            'prm_persona_ult_id' => 'required_if:prm_evento_id,227',
            'prm_tipo_ult_id' => 'required_if:prm_evento_id,227',
            'prm_tipo_id' => 'required',
            'prm_convive_id' => 'required_if:prm_tipo_id,338',
            'prm_presencia_id' => 'required_if:prm_tipo_id,338',
            'prm_reconoce_id' => 'required_if:prm_tipo_id,338',
            'prm_apoyo_id' => 'required_if:prm_tipo_id,338',
            'prm_denuncia_id' => 'required_if:prm_tipo_id,338',
            'informacion' => 'nullable|string|max:4000',
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
