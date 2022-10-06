<?php

namespace App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\Vsrrd;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait VpsiCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setVsrrdSave($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'fecha' => $dataxxxx['requestx']->fecha,
                    'sis_origen_id' => $dataxxxx['requestx']->sis_origen_id,
                    'sis_atenc_id' => $dataxxxx['requestx']->sis_atenc_id,
                    'prm_pre_mitigacion' => $dataxxxx['requestx']->prm_pre_mitigacion,
                    'prm_faseacomp' => $dataxxxx['requestx']->prm_faseacomp,
                    'prm_tipoacomp' => $dataxxxx['requestx']->prm_tipoacomp,
                    'prm_actiemocional' => $dataxxxx['requestx']->prm_actiemocional,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'concepto_rrd' => $dataxxxx['requestx']->concepto_rrd,
                    'prm_requi_certi' => $dataxxxx['requestx']->prm_requi_certi,
                    'requi_certi_recomend' => $dataxxxx['requestx']->requi_certi_recomend,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                ]);

                $sintomas = [];
                foreach ($dataxxxx['requestx']->sintomas as $key => $item) {
                    array_push($sintomas, ['vsrrd_Sintoma_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultSintomas()->detach();
                $dataxxxx['modeloxx']->resultSintomas()->sync($sintomas);

                $factores = [];
                foreach ($dataxxxx['requestx']->entorno_factores as $key => $item) {
                    array_push($factores, ['vsrrd_entorno_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultFactores()->detach();
                $dataxxxx['modeloxx']->resultFactores()->sync($factores);

                $ep = [];
                foreach ($dataxxxx['requestx']->entornoep as $key => $item) {
                    array_push($ep, ['vsrrd_entorno_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultEntornosep()->detach();
                $dataxxxx['modeloxx']->resultEntornosep()->sync($ep);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);

                $dataxxxx['modeloxx'] = Vsrrd::create([
                    'sis_nnaj_id' => $dataxxxx['requestx']->sis_nnaj_id,
                    'fecha' => $dataxxxx['requestx']->fecha,
                    'sis_origen_id' => $dataxxxx['requestx']->sis_origen_id,
                    'sis_atenc_id' => $dataxxxx['requestx']->sis_atenc_id,
                    'prm_pre_mitigacion' => $dataxxxx['requestx']->prm_pre_mitigacion,
                    'prm_faseacomp' => $dataxxxx['requestx']->prm_faseacomp,
                    'prm_tipoacomp' => $dataxxxx['requestx']->prm_tipoacomp,
                    'prm_actiemocional' => $dataxxxx['requestx']->prm_actiemocional,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'concepto_rrd' => $dataxxxx['requestx']->concepto_rrd,
                    'prm_requi_certi' => $dataxxxx['requestx']->prm_requi_certi,
                    'requi_certi_recomend' => $dataxxxx['requestx']->requi_certi_recomend,
                    'num_sesion' => $dataxxxx['requestx']->num_sesion,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_crea_id' => $dataxxxx['requestx']->user_crea_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id' => $dataxxxx['requestx']->sis_esta_id,
                ]);

                $sintomas = [];
                foreach ($dataxxxx['requestx']->sintomas as $key => $item) {
                    array_push($sintomas, ['vsrrd_Sintoma_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultSintomas()->sync($sintomas);

                $factores = [];
                foreach ($dataxxxx['requestx']->entorno_factores as $key => $item) {
                    array_push($factores, ['vsrrd_entorno_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultFactores()->sync($factores);

                $ep = [];
                foreach ($dataxxxx['requestx']->entornoep as $key => $item) {
                    array_push($ep, ['vsrrd_entorno_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultEntornosep()->sync($ep);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
