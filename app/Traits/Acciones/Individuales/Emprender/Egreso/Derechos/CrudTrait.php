<?php

namespace App\Traits\Acciones\Individuales\Emprender\Egreso\Derechos;

use App\Models\Acciones\Individuales\Emprender\Egreso\EgresoDere;
use App\Models\Acciones\Individuales\Emprender\Egreso\SEgreso;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setEgreso($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $saludxxx=$dataxxxx['padrexxx']->fi_saluds;
            $formacion=$dataxxxx['padrexxx']->fi_formacions;
            $pard=$dataxxxx['padrexxx']->fi_justrests->fi_proceso_pard;
            $spoa=$dataxxxx['padrexxx']->fi_justrests->fi_proceso_spoas;
            $srpa=$dataxxxx['padrexxx']->fi_justrests->fi_proceso_srpas;
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $saludxxx->update(['prm_regisalu_id' => $dataxxxx['requestx']->prm_regisalu_id, 'sis_entidad_salud_id' => $dataxxxx['requestx']->sis_entidad_salud_id]);    
                $formacion->update([
                    'i_prm_estudia_id' => $dataxxxx['requestx']->i_prm_estudia_id, 
                    'prm_jornestu_id' => $dataxxxx['requestx']->prm_jornestu_id,
                    'prm_natuenti_id' => $dataxxxx['requestx']->prm_natuenti_id,
                    's_institucion_edu' => $dataxxxx['requestx']->s_institucion_edu,
                    'diasines' => $dataxxxx['requestx']->diasines,
                    'mesinest' => $dataxxxx['requestx']->mesinest,
                    'anosines' => $dataxxxx['requestx']->anosines,
                ]);
                $spoa->update([
                    'i_prm_ha_estado_spoa_id' => $dataxxxx['requestx']->i_prm_ha_estado_spoa_id, 
                    'i_prm_actualmente_spoa_id' => $dataxxxx['requestx']->i_prm_actualmente_spoa_id,
                    'i_cuanto_spoa' => $dataxxxx['requestx']->i_cuanto_spoa,
                    'i_prm_tipo_tiempo_spoa_id' => $dataxxxx['requestx']->i_prm_tipo_tiempo_spoa_id,
                    'i_prm_motivo_spoa_id' => $dataxxxx['requestx']->i_prm_motivo_spoa_id,
                    'i_prm_mod_cumple_pena_id' => $dataxxxx['requestx']->i_prm_mod_cumple_pena_id,
                    'i_prm_ha_estado_preso_id' => $dataxxxx['requestx']->i_prm_ha_estado_preso_id,
                ]);
                $srpa->update([
                    'i_prm_ha_estado_srpa_id' => $dataxxxx['requestx']->i_prm_ha_estado_srpa_id, 
                    'i_prm_actualmente_srpa_id' => $dataxxxx['requestx']->i_prm_actualmente_srpa_id,
                    'i_cuanto_srpa' => $dataxxxx['requestx']->i_cuanto_srpa,
                    'i_prm_tipo_tiempo_srpa_id' => $dataxxxx['requestx']->i_prm_tipo_tiempo_srpa_id,
                    'i_prm_motivo_srpa_id' => $dataxxxx['requestx']->i_prm_motivo_srpa_id,
                    'i_prm_sancion_srpa_id' => $dataxxxx['requestx']->i_prm_sancion_srpa_id,
                ]);
                $pard->update([
                    'i_prm_ha_estado_pard_id' => $dataxxxx['requestx']->i_prm_ha_estado_pard_id, 
                    'i_prm_actualmente_pard_id' => $dataxxxx['requestx']->i_prm_actualmente_pard_id,
                    'i_cuanto_pard' => $dataxxxx['requestx']->i_cuanto_pard,
                    'i_prm_tipo_tiempo_pard_id' => $dataxxxx['requestx']->i_prm_tipo_tiempo_pard_id,
                    'i_prm_motivo_pard_id' => $dataxxxx['requestx']->i_prm_motivo_pard_id,
                    's_nombre_defensor' => $dataxxxx['requestx']->s_nombre_defensor,
                    's_telefono_defensor' => $dataxxxx['requestx']->s_telefono_defensor,
                ]);
                
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = EgresoDere::create($dataxxxx['requestx']->all());
                $saludxxx->update(['prm_regisalu_id' => $dataxxxx['requestx']->prm_regisalu_id, 'sis_entidad_salud_id' => $dataxxxx['requestx']->sis_entidad_salud_id]);
                $formacion->update([
                    'i_prm_estudia_id' => $dataxxxx['requestx']->i_prm_estudia_id, 
                    'prm_jornestu_id' => $dataxxxx['requestx']->prm_jornestu_id,
                    'prm_natuenti_id' => $dataxxxx['requestx']->prm_natuenti_id,
                    's_institucion_edu' => $dataxxxx['requestx']->s_institucion_edu,
                    'diasines' => $dataxxxx['requestx']->diasines,
                    'mesinest' => $dataxxxx['requestx']->mesinest,
                    'anosines' => $dataxxxx['requestx']->anosines,
                ]);
                $spoa->update([
                    'i_prm_ha_estado_spoa_id' => $dataxxxx['requestx']->i_prm_ha_estado_spoa_id, 
                    'i_prm_actualmente_spoa_id' => $dataxxxx['requestx']->i_prm_actualmente_spoa_id,
                    'i_cuanto_spoa' => $dataxxxx['requestx']->i_cuanto_spoa,
                    'i_prm_tipo_tiempo_spoa_id' => $dataxxxx['requestx']->i_prm_tipo_tiempo_spoa_id,
                    'i_prm_motivo_spoa_id' => $dataxxxx['requestx']->i_prm_motivo_spoa_id,
                    'i_prm_mod_cumple_pena_id' => $dataxxxx['requestx']->i_prm_mod_cumple_pena_id,
                    'i_prm_ha_estado_preso_id' => $dataxxxx['requestx']->i_prm_ha_estado_preso_id,
                ]);
                $srpa->update([
                    'i_prm_ha_estado_srpa_id' => $dataxxxx['requestx']->i_prm_ha_estado_srpa_id, 
                    'i_prm_actualmente_srpa_id' => $dataxxxx['requestx']->i_prm_actualmente_srpa_id,
                    'i_cuanto_srpa' => $dataxxxx['requestx']->i_cuanto_srpa,
                    'i_prm_tipo_tiempo_srpa_id' => $dataxxxx['requestx']->i_prm_tipo_tiempo_srpa_id,
                    'i_prm_motivo_srpa_id' => $dataxxxx['requestx']->i_prm_motivo_srpa_id,
                    'i_prm_sancion_srpa_id' => $dataxxxx['requestx']->i_prm_sancion_srpa_id,
                ]);
                $pard->update([
                    'i_prm_ha_estado_pard_id' => $dataxxxx['requestx']->i_prm_ha_estado_pard_id, 
                    'i_prm_actualmente_pard_id' => $dataxxxx['requestx']->i_prm_actualmente_pard_id,
                    'i_cuanto_pard' => $dataxxxx['requestx']->i_cuanto_pard,
                    'i_prm_tipo_tiempo_pard_id' => $dataxxxx['requestx']->i_prm_tipo_tiempo_pard_id,
                    'i_prm_motivo_pard_id' => $dataxxxx['requestx']->i_prm_motivo_pard_id,
                    's_nombre_defensor' => $dataxxxx['requestx']->s_nombre_defensor,
                    's_telefono_defensor' => $dataxxxx['requestx']->s_telefono_defensor,
                ]);
                
                
            }
            
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
