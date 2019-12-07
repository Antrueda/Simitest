<?php

namespace App\Http\Requests\FichaIngreso;

use Illuminate\Foundation\Http\FormRequest;

class FiJusticiaRestaurativaUpdateRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    
    public function __construct()
    {
        $this->_mensaje = [
            'i_prm_ha_estado_pard_id.required' => 'Seleccione ha estado en pard',
            'i_prm_actualmente_pard_id.required' => 'Seleccione actualmente está en pard',
            'i_prm_ha_estado_srpa_id.required' => 'Seleccione ha estado en srpa',
            'i_prm_actualmente_srpa_id.required' => 'Seleccione actualmente está en srpa',
            'i_prm_ha_estado_spoa_id.required' => 'Seleccione ha estado en spoa',
            'i_prm_actualmente_spoa_id.required' => 'Seleccione actualmente está en spoa',
            'i_prm_vinculado_violencia_id.required' => 'Seleccione si ha estado vinculado a delincuencia o violencia',
            'i_prm_riesgo_participar_id.required' => 'Seleccione si ha estado en riesgo de participar actos delictivos',
        ];
        $this->_reglasx = [
            'i_prm_ha_estado_pard_id' => ['Required'],
            'i_prm_actualmente_pard_id' => ['Required'],
            'i_prm_ha_estado_srpa_id' => ['Required'],
            'i_prm_actualmente_srpa_id' => ['Required'],
            'i_prm_ha_estado_spoa_id' => ['Required'],
            'i_prm_actualmente_spoa_id' => ['Required'],
            'i_prm_vinculado_violencia_id' => ['Required'],
            'i_prm_riesgo_participar_id' => ['Required'],
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

        // if ($dataxxxx['i_prm_actualmente_pard_id'] == 227){
        //     $this->_mensaje['i_cuanto_pard.required'] ='Seleccione hace cuanto está en pard';
        //     $this->_reglasx['i_cuanto_pard']='required';
        //     $this->_mensaje['i_prm_tipo_tiempo_pard_id.required'] ='Seleccione tipo tiempo hace cuanto está en pard';
        //     $this->_reglasx['i_prm_tipo_tiempo_pard_id']='required';
        //     $this->_mensaje['i_prm_motivo_pard_id.required'] ='Seleccione motivo pard';
        //     $this->_reglasx['i_prm_motivo_pard_id']='required';
        //     $this->_mensaje['s_nombre_defensor.required'] ='Seleccione nombre defensor de familia';
        //     $this->_reglasx['s_nombre_defensor']='required';
        //     $this->_mensaje['s_telefono_defensor.required'] ='Seleccione teléfono defensor de familia';
        //     $this->_reglasx['s_telefono_defensor']='required';
        //     $this->_mensaje['s_lugar_abierto_pard.required'] ='Seleccione lugar donde está abierto el pard';
        //     $this->_reglasx['s_lugar_abierto_pard']='required';
        // }
        
        // if ($dataxxxx['i_prm_actualmente_srpa_id'] == 227){
        //     $this->_mensaje['i_cuanto_srpa.required'] ='Seleccione hace cuanto está en srpa';
        //     $this->_reglasx['i_cuanto_srpa']='required';
        //     $this->_mensaje['i_prm_tipo_tiempo_srpa_id.required'] ='Seleccione tipo tiempo hace cuanto está en srpa';
        //     $this->_reglasx['i_prm_tipo_tiempo_srpa_id']='required';
        //     $this->_mensaje['i_prm_motivo_srpa_id.required'] ='Seleccione motivo srpa';
        //     $this->_reglasx['i_prm_motivo_srpa_id']='required';
        //     $this->_mensaje['i_prm_sancion_srpa_id.required'] ='Seleccione sanción pedagógica srpa';
        //     $this->_reglasx['i_prm_sancion_srpa_id']='required';
        // }

        // if ($dataxxxx['i_prm_actualmente_spoa_id'] == 227){
        //     $this->_mensaje['i_cuanto_spoa.required'] ='Seleccione hace cuanto está en spoa';
        //     $this->_reglasx['i_cuanto_spoa']='required';
        //     $this->_mensaje['i_prm_tipo_tiempo_spoa_id.required'] ='Seleccione tipo tiempo hace cuanto está en spoa';
        //     $this->_reglasx['i_prm_tipo_tiempo_spoa_id']='required';
        //     $this->_mensaje['i_prm_motivo_spoa_id.required'] ='Seleccione motivo spoa';
        //     $this->_reglasx['i_prm_motivo_spoa_id']='required';
        //     $this->_mensaje['i_prm_mod_cumple_pena_id.required'] ='Seleccione modalidad cumplimiento de pena';
        //     $this->_reglasx['i_prm_mod_cumple_pena_id']='required';
        //     $this->_mensaje['i_prm_ha_estado_preso_id.required'] ='Seleccione si ha estado privado de la libertad';
        //     $this->_reglasx['i_prm_ha_estado_preso_id']='required';
        // }

        if ($dataxxxx['i_prm_vinculado_violencia_id'] == 227){
            $this->_mensaje['i_prm_causa_vincula_vio_id.required'] ='Seleccione causa vinculación a delincuencia o violencia';
            $this->_reglasx['i_prm_causa_vincula_vio_id']='required';
        }

        if ($dataxxxx['i_prm_vinculado_violencia_id'] == 227){
            $this->_mensaje['i_prm_riesgo_participar_id.required'] ='Seleccione causa riesgo participar actos delictivos';
            $this->_reglasx['i_prm_riesgo_participar_id']='required';
        }
    }
}