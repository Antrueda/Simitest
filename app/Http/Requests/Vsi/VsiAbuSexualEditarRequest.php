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
        ];
        $this->_reglasx = [
            'prm_evento_id' => 'required|exists:parametros,id',
            'dia' => 'nullable:prm_evento_id,227|min:0|max:99',
            'mes' => 'nullable:prm_evento_id,227|min:0|max:99',
            'ano' => 'nullable:prm_evento_id,227|min:0|max:99',
            'prm_persona_id' => 'required_if:prm_evento_id,227|exists:parametros,id',
            'prm_terapia_id' => 'required_if:prm_evento_id,227',
            'prm_estado_id' => 'required_if:prm_terapia_id,227',
            'prm_momento_id' => 'required_if:prm_evento_id,227|exists:parametros,id',
            'dia_ult' => 'nullable|min:0|max:99',
            'mes_ult' => 'nullable|min:0|max:99',
            'ano_ult' => 'nullable|min:0|max:99',
            'prm_momento_ult_id' => 'required_if:prm_momento_id,1014',
            'prm_persona_ult_id' => 'required_if:prm_momento_id,1014',
            'prm_tipo_ult_id' => 'required_if:prm_momento_id,1014',
            'prm_tipo_id' => 'required|exists:parametros,id',
            'prm_convive_id' => 'required_unless:prm_tipo_id,338',
            'prm_presencia_id' => 'required_unless:prm_tipo_id,338',
            'prm_reconoce_id' => 'required_unless:prm_tipo_id,338',
            'prm_apoyo_id' => 'required_unless:prm_tipo_id,338',
            'prm_denuncia_id' => 'required_unless:prm_tipo_id,338',
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
