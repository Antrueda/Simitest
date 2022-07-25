<?php

namespace App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\ValoIdentHabOcupacional;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\Vih;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait VihCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setValoIdentificion($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'fecha'=>$dataxxxx['requestx']->fecha,
                    'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                    'antecede_clin'=>$dataxxxx['requestx']->antecede_clin,
                    'prm_dinconsumo'=>$dataxxxx['requestx']->prm_dinconsumo,
                    'obs_sustanpsico'=>$dataxxxx['requestx']->obs_sustanpsico,
                    'prm_autocuidado'=>$dataxxxx['requestx']->prm_autocuidado,
                    'prm_rutinas'=>$dataxxxx['requestx']->prm_rutinas,
                    'obs_habitos'=>$dataxxxx['requestx']->obs_habitos,
                    'antece_ocupa'=>$dataxxxx['requestx']->antece_ocupa,
                    'antece_tiempo'=>$dataxxxx['requestx']->antece_tiempo,
                    'prospeccion'=>$dataxxxx['requestx']->prospeccion,
                    'familia_nucleo'=>$dataxxxx['requestx']->familia_nucleo,
                    'conc_ocupa'=>$dataxxxx['requestx']->conc_ocupa,
                    'prm_remitir'=>$dataxxxx['requestx']->prm_remitir,
                    'interinstitu'=>$dataxxxx['requestx']->interinstitu,
                    'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                ]);
                $dataxxxx['modeloxx']->fortalecer()->sync($dataxxxx['requestx']->fortalecer);
                $dataxxxx['modeloxx']->intrainstitucional()->sync($dataxxxx['requestx']->intrainstitucional);

                $data=[];
                foreach ($dataxxxx['requestx']->compdesempenio as $key => $item) {
                    array_push($data,['vih_subarea_id'=>$key,'prm_respuesta'=>$item]);
                }

                $data2=[];
                foreach ($dataxxxx['requestx']->obsarea as $key => $item) {
                    array_push($data2,['vih_area_id'=>$key,'descripcion'=>$item]);
                }
                $dataxxxx['modeloxx']->descriptareas()->detach();
                $dataxxxx['modeloxx']->resultssubareas()->detach();
                $dataxxxx['modeloxx']->descriptareas()->sync($data2);
                $dataxxxx['modeloxx']->resultssubareas()->sync($data);

            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = Vih::create([
                    'sis_nnaj_id'=>$dataxxxx['requestx']->sis_nnaj_id,
                    'fecha'=>$dataxxxx['requestx']->fecha,
                    'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                    'antecede_clin'=>$dataxxxx['requestx']->antecede_clin,
                    'prm_dinconsumo'=>$dataxxxx['requestx']->prm_dinconsumo,
                    'obs_sustanpsico'=>$dataxxxx['requestx']->obs_sustanpsico,
                    'prm_autocuidado'=>$dataxxxx['requestx']->prm_autocuidado,
                    'prm_rutinas'=>$dataxxxx['requestx']->prm_rutinas,
                    'obs_habitos'=>$dataxxxx['requestx']->obs_habitos,
                    'antece_ocupa'=>$dataxxxx['requestx']->antece_ocupa,
                    'antece_tiempo'=>$dataxxxx['requestx']->antece_tiempo,
                    'prospeccion'=>$dataxxxx['requestx']->prospeccion,
                    'familia_nucleo'=>$dataxxxx['requestx']->familia_nucleo,
                    'conc_ocupa'=>$dataxxxx['requestx']->conc_ocupa,
                    'prm_remitir'=>$dataxxxx['requestx']->prm_remitir,
                    'interinstitu'=>$dataxxxx['requestx']->interinstitu,
                    'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                    'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                ]);
                $dataxxxx['modeloxx']->fortalecer()->sync($dataxxxx['requestx']->fortalecer);
                $dataxxxx['modeloxx']->intrainstitucional()->sync($dataxxxx['requestx']->intrainstitucional);

                $data=[];
                foreach ($dataxxxx['requestx']->compdesempenio as $key => $item) {
                    array_push($data,['vih_subarea_id'=>$key,'prm_respuesta'=>$item]);
                }

                $data2=[];
                foreach ($dataxxxx['requestx']->obsarea as $key => $item) {
                    array_push($data2,['vih_area_id'=>$key,'descripcion'=>$item]);
                }
                
                $dataxxxx['modeloxx']->descriptareas()->sync($data2);
                $dataxxxx['modeloxx']->resultssubareas()->sync($data);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}