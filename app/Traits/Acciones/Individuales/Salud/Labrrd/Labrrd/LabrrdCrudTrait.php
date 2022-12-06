<?php

namespace App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Salud\Labrrd\Labrrd;
use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdSeg;

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
                    'fechdili' => $dataxxxx['requestx']->fechdili,
                    'sis_origen_id' => $dataxxxx['requestx']->sis_origen_id,
                    'sis_atenc_id' => $dataxxxx['requestx']->sis_atenc_id,
                    'prm_faseacomp' => $dataxxxx['requestx']->prm_faseacomp,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'lugar_externo' => $dataxxxx['requestx']->lugar_externo,
                ]);

                $dataxxxx['modeloxx']->gustos_intereses()->sync($dataxxxx['requestx']->gustos_intereses);
                $dataxxxx['modeloxx']->habilidades()->sync($dataxxxx['requestx']->habilidades);

                $resultados = [];
                foreach ($dataxxxx['requestx']->resultados as $key => $item) {
                    array_push($resultados, ['labrrd_componente_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultadoAnalisis()->detach();
                $dataxxxx['modeloxx']->resultadoAnalisis()->sync($resultados);
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

                $resultados = [];
                foreach ($dataxxxx['requestx']->resultados as $key => $item) {
                    array_push($resultados, ['labrrd_componente_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultadoAnalisis()->sync($resultados);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setSeguimientoLabrrd($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'fechdili' => $dataxxxx['requestx']->fechdili,
                    'sis_origen_id' => $dataxxxx['requestx']->sis_origen_id,
                    'sis_atenc_id' => $dataxxxx['requestx']->sis_atenc_id,
                    'prm_faseacomp' => $dataxxxx['requestx']->prm_faseacomp,
                    'observacion_pro' => $dataxxxx['requestx']->observacion_pro,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'lugar_externo' => $dataxxxx['requestx']->lugar_externo,
                    'observacion_afront' => $dataxxxx['requestx']->observacion_afront,
                    'observacion_impu' => $dataxxxx['requestx']->observacion_impu,
                    'observacion_violen' => $dataxxxx['requestx']->observacion_violen,
                    'observacion_auto' => $dataxxxx['requestx']->observacion_auto,
                ]);

                $dataxxxx['modeloxx']->habilidades()->sync($dataxxxx['requestx']->habilidades);

                $resultados = [];
                foreach ($dataxxxx['requestx']->resultados as $key => $item) {
                    array_push($resultados, ['labrrd_componente_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultadoAnalisis()->detach();
                $dataxxxx['modeloxx']->resultadoAnalisis()->sync($resultados);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $nsesion = $this->numeroSesion($dataxxxx['requestx']->labrrd_id);
                $dataxxxx['modeloxx'] = LabrrdSeg::create([
                    'labrrd_id' => $dataxxxx['requestx']->labrrd_id,
                    'fechdili' => $dataxxxx['requestx']->fechdili,
                    'sis_origen_id' => $dataxxxx['requestx']->sis_origen_id,
                    'sis_atenc_id' => $dataxxxx['requestx']->sis_atenc_id,
                    'prm_faseacomp' => $dataxxxx['requestx']->prm_faseacomp,
                    'observacion_pro' => $dataxxxx['requestx']->observacion_pro,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_crea_id' => $dataxxxx['requestx']->user_crea_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id' => $dataxxxx['requestx']->sis_esta_id,
                    'lugar_externo' => $dataxxxx['requestx']->lugar_externo,
                    'num_sesion' => $nsesion,
                    'observacion_afront' => $dataxxxx['requestx']->observacion_afront,
                    'observacion_impu' => $dataxxxx['requestx']->observacion_impu,
                    'observacion_violen' => $dataxxxx['requestx']->observacion_violen,
                    'observacion_auto' => $dataxxxx['requestx']->observacion_auto,
                ]);

                $dataxxxx['modeloxx']->habilidades()->sync($dataxxxx['requestx']->habilidades);

                $resultados = [];
                foreach ($dataxxxx['requestx']->resultados as $key => $item) {
                    array_push($resultados, ['labrrd_componente_id' => $key, 'respuesta' => $item]);
                }
                $dataxxxx['modeloxx']->resultadoAnalisis()->sync($resultados);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function numeroSesion($labrrd)
    {
        $seguimiento = LabrrdSeg::where('labrrd_id', $labrrd)->orderBy('created_at', 'desc')->first();
        if ($seguimiento == null) {
            return "2";
        } else {
            return ($seguimiento->num_sesion + 1);
        }
    }
}
