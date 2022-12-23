<?php

namespace App\Traits\Acciones\Individuales\Emprender\Egreso\Seguimiento;

use App\Models\Acciones\Individuales\Emprender\Egreso\EgreSegui;
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
            $ingreso=$dataxxxx['padrexxx']->fi_generacion_ingresos;
            $fisitua=$dataxxxx['padrexxx']->fi_situacion_especials;
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);

            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $ingreso->update([
                    'prm_actgeing_id' => $dataxxxx['requestx']->vincula_id, 
                    's_trabajo_formal' => $dataxxxx['requestx']->s_trabajo_formal,
                    'prm_trabinfo_id' => $dataxxxx['requestx']->prm_trabinfo_id,
                    'prm_otractiv_id' => $dataxxxx['requestx']->prm_otractiv_id,
                    'prm_tiprelab_id' => $dataxxxx['requestx']->prm_tiprelab_id,

                ]);
                
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = EgreSegui::create($dataxxxx['requestx']->all());
                $ingreso->update([
                    'prm_actgeing_id' => $dataxxxx['requestx']->i_prm_estudia_id, 
                    's_trabajo_formal' => $dataxxxx['requestx']->s_trabajo_formal,
                    'prm_trabinfo_id' => $dataxxxx['requestx']->prm_trabinfo_id,
                    'prm_otractiv_id' => $dataxxxx['requestx']->prm_otractiv_id,
                    'prm_tiprelab_id' => $dataxxxx['requestx']->prm_tiprelab_id,
            ]);
            }
            $fisitua->prm_situacion_vulnera_id()->detach();
            if($dataxxxx['requestx']->prm_situacion_vulnera_id){
                foreach ($dataxxxx['requestx']->prm_situacion_vulnera_id as $d) {
                    $fisitua->prm_situacion_vulnera_id()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'sis_esta_id'=>1,'fi_situacion_especial_id'=>$fisitua->id]);
                }
            }
            $fisitua->riesgo_escnnas()->detach();
            if($dataxxxx['requestx']->i_prm_riesgo_escnna_id){
                foreach ($dataxxxx['requestx']->i_prm_riesgo_escnna_id as $d) {
                    $fisitua->riesgo_escnnas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'sis_esta_id'=>1,'fi_situacion_especial_id'=>$fisitua->id]);
                }
            }
            $fisitua->victima_escnnas()->detach();
            if($dataxxxx['requestx']->i_prm_victima_escnna_id){
                foreach ($dataxxxx['requestx']->i_prm_victima_escnna_id as $d) {
                    $fisitua->victima_escnnas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'sis_esta_id'=>1,'fi_situacion_especial_id'=>$fisitua->id]);
                }
            }
            
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
