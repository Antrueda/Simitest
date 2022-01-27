<?php

namespace App\Traits\AsisSema;

use App\Models\AsisSema\Asissema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait AsisSemaCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAsisSema($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
              
                $dataxxxx['modeloxx'] = Asissema::create([
                    'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                    'sis_servicio_id'=>$dataxxxx['requestx']->sis_servicio_id,
                    'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                    'curso_id'=>$dataxxxx['requestx']->prm_curso,
                    'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                    'user_fun_id'=>1,
                    'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                    'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                    'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                ]);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
