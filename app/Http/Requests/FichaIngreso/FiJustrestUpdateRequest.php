<?php

namespace App\Http\Requests\FichaIngreso;

use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Foundation\Http\FormRequest;

class FiJustrestUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;

    public function __construct()
    {

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
        $nnajxxxx = FiDatosBasico::find($this->segments()[1]);
        $this->_mensaje = [
            'i_prm_ha_estado_srpa_id.required' => 'Seleccione ha estado en srpa',
            'i_prm_actualmente_srpa_id.required' => 'Seleccione actualmente está en srpa',
            'i_prm_ha_estado_spoa_id.required' => 'Seleccione ha estado en spoa',
            'i_prm_actualmente_spoa_id.required' => 'Seleccione actualmente está en spoa',
            'i_prm_vinculado_violencia_id.required' => 'Seleccione si ha estado vinculado a delincuencia o violencia',
            'i_prm_riesgo_participar_id.required' => 'Seleccione si ha estado en riesgo de participar actos delictivos',
        ];
        $this->_reglasx = [
            'i_prm_ha_estado_srpa_id' => ['Required'],
            'i_prm_actualmente_srpa_id' => ['Required'],
            'i_prm_ha_estado_spoa_id' => ['Required'],
            'i_prm_actualmente_spoa_id' => ['Required'],
            'i_prm_vinculado_violencia_id' => ['Required'],
            'i_prm_riesgo_participar_id' => ['Required'],
        ];

        if ($nnajxxxx->prm_estrateg_id != 2323) {
            $this->_mensaje['i_prm_ha_estado_pard_id.required'] = 'Seleccione ha estado en pard';
            $this->_mensaje['i_prm_actualmente_pard_id.required'] = 'Seleccione actualmente está en pard';
            $this->_reglasx['i_prm_ha_estado_pard_id'] = ['Required'];
            $this->_reglasx['i_prm_actualmente_pard_id'] = ['Required'];
        }
        if ($this->i_prm_vinculado_violencia_id == 227){
            $this->_mensaje['prm_situacion_id.required'] ='Seleccione causa vinculación a delincuencia o violencia';
            $this->_reglasx['prm_situacion_id']='required';
         }
         if ($this->i_prm_riesgo_participar_id == 227){
            $this->_mensaje['prm_riesgo_id.required'] ='Seleccione causa riesgo participar actos delictivos';
            $this->_reglasx['prm_riesgo_id']='required';
        }
    }
}
