<?php

namespace App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd;

use App\Models\Acciones\Individuales\Salud\Labrrd\Labrrd;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\Dast;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPuntaje;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastResultado;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastSeguimiento;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait LabrrdCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setLabrrd($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'fecha' => $dataxxxx['requestx']->fecha,
                    'sis_depen_id' => $dataxxxx['requestx']->sis_depen_id,
                    'prm_requiere_vespa' => $dataxxxx['requestx']->prm_requiere_vespa,
                    'fecha_vespa' => $dataxxxx['requestx']->fecha_vespa,
                    'accion_desarrolla' => $dataxxxx['requestx']->accion_desarrolla,
                    'prm_patron_con' => $dataxxxx['requestx']->prm_patron_con,
                    'obs_patron_con' => $dataxxxx['requestx']->obs_patron_con,
                    'accion_curso' => $dataxxxx['requestx']->accion_curso,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'prm_diligencia' => $dataxxxx['requestx']->prm_diligencia,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                ]);

                $data = [];
                foreach ($dataxxxx['requestx']->respuestas as $key => $item) {
                    array_push($data, ['dast_pregunta_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->respuestas()->detach();
                $dataxxxx['modeloxx']->respuestas()->sync($data);

                $puntaje = DastPuntaje::select('dast_puntajes.id', 'dast_puntajes.minimo', 'dast_puntajes.superior', 'dast_puntajes.grado_problema', 'dast_puntajes.accion_id', 'dast_acciones.nombre')
                    ->join('dast_acciones', 'dast_puntajes.accion_id', '=', 'dast_acciones.id')
                    ->where('dast_puntajes.id', $dataxxxx['requestx']->resultado_id)->first();
                $dataxxxx['modeloxx']->resultado()->update([
                    'resultado' => $dataxxxx['requestx']->resultado,
                    'valores' => $puntaje->minimo . ' a ' . $puntaje->superior,
                    'grado_problema' => $puntaje->grado_problema,
                    'accion' => $puntaje->nombre,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                ]);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);

                $dataxxxx['modeloxx'] = Labrrd::create([
                    'sis_nnaj_id' => $dataxxxx['requestx']->sis_nnaj_id,
                    'fechdili' => $dataxxxx['requestx']->fechdili,
                    'sis_origen_id' => $dataxxxx['requestx']->sis_origen_id,
                    'sis_atenc_id' => $dataxxxx['requestx']->sis_atenc_id,
                    'prm_faseacomp' => $dataxxxx['requestx']->prm_faseacomp,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_crea_id' => $dataxxxx['requestx']->user_crea_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id' => $dataxxxx['requestx']->sis_esta_id,
                    'lugar_externo' => $dataxxxx['requestx']->lugar_externo,
                    'num_sesion' => $dataxxxx['requestx']->num_sesion,
                ]);

                $dataxxxx['modeloxx']->gustos_intereses()->sync($dataxxxx['requestx']->gustos_intereses);
                $dataxxxx['modeloxx']->habilidades()->sync($dataxxxx['requestx']->habilidades);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setSeguimientoDast($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'fecha' => $dataxxxx['requestx']->fecha,
                    'sis_depen_id' => $dataxxxx['requestx']->sis_depen_id,
                    'prm_tipo_seguimiento' => $dataxxxx['requestx']->prm_tipo_seguimiento,
                    'obs_seguimiento' => $dataxxxx['requestx']->obs_seguimiento,
                    'prm_diligencia' => $dataxxxx['requestx']->prm_diligencia,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                ]);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = DastSeguimiento::create([
                    'dast_id' => $dataxxxx['requestx']->dast_id,
                    'fecha' => $dataxxxx['requestx']->fecha,
                    'sis_depen_id' => $dataxxxx['requestx']->sis_depen_id,
                    'prm_tipo_seguimiento' => $dataxxxx['requestx']->prm_tipo_seguimiento,
                    'obs_seguimiento' => $dataxxxx['requestx']->obs_seguimiento,
                    'prm_diligencia' => $dataxxxx['requestx']->prm_diligencia,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_crea_id' => $dataxxxx['requestx']->user_crea_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id' => $dataxxxx['requestx']->sis_esta_id,
                ]);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
