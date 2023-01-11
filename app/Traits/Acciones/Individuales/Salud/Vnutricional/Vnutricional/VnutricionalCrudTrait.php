<?php

namespace App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Salud\Vnutricional\Vnutricion;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait VnutricionalCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setVnutricional($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'sis_depen_id' => $dataxxxx['requestx']->sis_depen_id,
                    'fechdili' => $dataxxxx['requestx']->fechdili,
                    'prm_estado_gesta' => $dataxxxx['requestx']->prm_estado_gesta,
                    'edad_gesta' => $dataxxxx['requestx']->edad_gesta,
                    'peso' => $dataxxxx['requestx']->peso,
                    'talla' => $dataxxxx['requestx']->talla,
                    'cintura_cc' => $dataxxxx['requestx']->cintura_cc,
                    'prm_cod_imcedad' => $dataxxxx['requestx']->prm_cod_imcedad,
                    'prm_cod_te' => $dataxxxx['requestx']->prm_cod_te,
                    'prm_acti_fisica' => $dataxxxx['requestx']->prm_acti_fisica,
                    'prm_apetito' => $dataxxxx['requestx']->prm_apetito,
                    'n_comidas' => $dataxxxx['requestx']->n_comidas,
                    'prm_accion_aume' => $dataxxxx['requestx']->prm_accion_aume,
                    'prm_accion_dism' => $dataxxxx['requestx']->prm_accion_dism,
                    'prm_seg_consumo' => $dataxxxx['requestx']->prm_seg_consumo,
                    'prm_diagnostico' => $dataxxxx['requestx']->prm_diagnostico,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'prm_requi_certi' => $dataxxxx['requestx']->prm_requi_certi,
                    'prm_certi_recomen' => $dataxxxx['requestx']->prm_certi_recomen,
                    'plan_alimentacion' => $dataxxxx['requestx']->plan_alimentacion,
                    'suplemen_nutri' => $dataxxxx['requestx']->suplemen_nutri,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                ]);

                $dataxxxx['modeloxx']->intrainstitucional()->sync($dataxxxx['requestx']->intrainstitucional);
                $data = [];
                foreach ($dataxxxx['requestx']->resp_alimentos as $key => $item) {
                    array_push($data, ['prm_alimentos' => $key, 'prm_frecuencia' => $item]);
                }

                $enfermedades = [];
                foreach ($dataxxxx['requestx']->resp_enfermedades as $key => $item) {
                    if ($item != null) {
                        array_push($enfermedades, ['asigna_enfermedad_id' => $item]);
                    }
                }
                $dataxxxx['modeloxx']->resalimentos()->detach();
                $dataxxxx['modeloxx']->resenfermedades()->detach();
                $dataxxxx['modeloxx']->resalimentos()->sync($data);
                $dataxxxx['modeloxx']->resenfermedades()->sync($enfermedades);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = Vnutricion::create([
                    'sis_nnaj_id' => $dataxxxx['requestx']->sis_nnaj_id,
                    'sis_depen_id' => $dataxxxx['requestx']->sis_depen_id,
                    'fechdili' => $dataxxxx['requestx']->fechdili,
                    'prm_estado_gesta' => $dataxxxx['requestx']->prm_estado_gesta,
                    'edad_gesta' => $dataxxxx['requestx']->edad_gesta,
                    'peso' => $dataxxxx['requestx']->peso,
                    'talla' => $dataxxxx['requestx']->talla,
                    'cintura_cc' => $dataxxxx['requestx']->cintura_cc,
                    'prm_cod_imcedad' => $dataxxxx['requestx']->prm_cod_imcedad,
                    'prm_cod_te' => $dataxxxx['requestx']->prm_cod_te,
                    'prm_acti_fisica' => $dataxxxx['requestx']->prm_acti_fisica,
                    'prm_apetito' => $dataxxxx['requestx']->prm_apetito,
                    'n_comidas' => $dataxxxx['requestx']->n_comidas,
                    'prm_accion_aume' => $dataxxxx['requestx']->prm_accion_aume,
                    'prm_accion_dism' => $dataxxxx['requestx']->prm_accion_dism,
                    'prm_seg_consumo' => $dataxxxx['requestx']->prm_seg_consumo,
                    'prm_diagnostico' => $dataxxxx['requestx']->prm_diagnostico,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'prm_requi_certi' => $dataxxxx['requestx']->prm_requi_certi,
                    'prm_certi_recomen' => $dataxxxx['requestx']->prm_certi_recomen,
                    'plan_alimentacion' => $dataxxxx['requestx']->plan_alimentacion,
                    'suplemen_nutri' => $dataxxxx['requestx']->suplemen_nutri,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_crea_id' => $dataxxxx['requestx']->user_crea_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id' => $dataxxxx['requestx']->sis_esta_id,
                    'is_seguimiento' => 0,
                ]);
                $dataxxxx['modeloxx']->intrainstitucional()->sync($dataxxxx['requestx']->intrainstitucional);

                $data = [];
                foreach ($dataxxxx['requestx']->resp_alimentos as $key => $item) {
                    array_push($data, ['prm_alimentos' => $key, 'prm_frecuencia' => $item]);
                }

                $enfermedades = [];
                foreach ($dataxxxx['requestx']->resp_enfermedades as $key => $item) {
                    if ($item != null) {
                        array_push($enfermedades, ['asigna_enfermedad_id' => $item]);
                    }
                }

                $dataxxxx['modeloxx']->resalimentos()->sync($data);
                $dataxxxx['modeloxx']->resenfermedades()->sync($enfermedades);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setSeguimientoVnutricional($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'sis_depen_id' => $dataxxxx['requestx']->sis_depen_id,
                    'fechdili' => $dataxxxx['requestx']->fechdili,
                    'prm_estado_gesta' => $dataxxxx['requestx']->prm_estado_gesta,
                    'edad_gesta' => $dataxxxx['requestx']->edad_gesta,
                    'peso' => $dataxxxx['requestx']->peso,
                    'talla' => $dataxxxx['requestx']->talla,
                    'cintura_cc' => $dataxxxx['requestx']->cintura_cc,
                    'prm_cod_imcedad' => $dataxxxx['requestx']->prm_cod_imcedad,
                    'prm_cod_te' => $dataxxxx['requestx']->prm_cod_te,
                    'prm_acti_fisica' => $dataxxxx['requestx']->prm_acti_fisica,
                    'prm_apetito' => $dataxxxx['requestx']->prm_apetito,
                    'prm_accion_aume' => $dataxxxx['requestx']->prm_accion_aume,
                    'prm_accion_dism' => $dataxxxx['requestx']->prm_accion_dism,
                    'prm_seg_consumo' => $dataxxxx['requestx']->prm_seg_consumo,
                    'prm_diagnostico' => $dataxxxx['requestx']->prm_diagnostico,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'prm_requi_certi' => $dataxxxx['requestx']->prm_requi_certi,
                    'prm_certi_recomen' => $dataxxxx['requestx']->prm_certi_recomen,
                    'plan_alimentacion' => $dataxxxx['requestx']->plan_alimentacion,
                    'suplemen_nutri' => $dataxxxx['requestx']->suplemen_nutri,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                ]);

                $dataxxxx['modeloxx']->intrainstitucional()->sync($dataxxxx['requestx']->intrainstitucional);

                $data = [];
                foreach ($dataxxxx['requestx']->resp_alimentos as $key => $item) {
                    if ($item != null) {
                        array_push($data, ['prm_alimentos' => $key, 'prm_frecuencia' => $item]);
                    }
                }

                $enfermedades = [];
                foreach ($dataxxxx['requestx']->resp_enfermedades as $key => $item) {
                    if ($item != null) {
                        array_push($enfermedades, ['asigna_enfermedad_id' => $item]);
                    }
                }
                $dataxxxx['modeloxx']->resalimentos()->detach();
                $dataxxxx['modeloxx']->resenfermedades()->detach();
                $dataxxxx['modeloxx']->resalimentos()->sync($data);
                $dataxxxx['modeloxx']->resenfermedades()->sync($enfermedades);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = Vnutricion::create([
                    'sis_nnaj_id' => $dataxxxx['requestx']->sis_nnaj_id,
                    'sis_depen_id' => $dataxxxx['requestx']->sis_depen_id,
                    'fechdili' => $dataxxxx['requestx']->fechdili,
                    'prm_estado_gesta' => $dataxxxx['requestx']->prm_estado_gesta,
                    'edad_gesta' => $dataxxxx['requestx']->edad_gesta,
                    'peso' => $dataxxxx['requestx']->peso,
                    'talla' => $dataxxxx['requestx']->talla,
                    'cintura_cc' => $dataxxxx['requestx']->cintura_cc,
                    'prm_cod_imcedad' => $dataxxxx['requestx']->prm_cod_imcedad,
                    'prm_cod_te' => $dataxxxx['requestx']->prm_cod_te,
                    'prm_acti_fisica' => $dataxxxx['requestx']->prm_acti_fisica,
                    'prm_apetito' => $dataxxxx['requestx']->prm_apetito,
                    'prm_accion_aume' => $dataxxxx['requestx']->prm_accion_aume,
                    'prm_accion_dism' => $dataxxxx['requestx']->prm_accion_dism,
                    'prm_seg_consumo' => $dataxxxx['requestx']->prm_seg_consumo,
                    'prm_diagnostico' => $dataxxxx['requestx']->prm_diagnostico,
                    'observacion' => $dataxxxx['requestx']->observacion,
                    'prm_requi_certi' => $dataxxxx['requestx']->prm_requi_certi,
                    'prm_certi_recomen' => $dataxxxx['requestx']->prm_certi_recomen,
                    'plan_alimentacion' => $dataxxxx['requestx']->plan_alimentacion,
                    'suplemen_nutri' => $dataxxxx['requestx']->suplemen_nutri,
                    'user_fun_id' => $dataxxxx['requestx']->user_fun_id,
                    'user_crea_id' => $dataxxxx['requestx']->user_crea_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id' => $dataxxxx['requestx']->sis_esta_id,
                    'is_seguimiento' => 1,
                    'vnutricion_id' => $dataxxxx['requestx']->vnutricion_id,
                ]);
                $dataxxxx['modeloxx']->intrainstitucional()->sync($dataxxxx['requestx']->intrainstitucional);

                $data = [];
                foreach ($dataxxxx['requestx']->resp_alimentos as $key => $item) {
                    if ($item != null) {
                        array_push($data, ['prm_alimentos' => $key, 'prm_frecuencia' => $item]);
                    }
                }

                $enfermedades = [];
                foreach ($dataxxxx['requestx']->resp_enfermedades as $key => $item) {
                    if ($item != null) {
                        array_push($enfermedades, ['asigna_enfermedad_id' => $item]);
                    }
                }
                $dataxxxx['modeloxx']->resalimentos()->sync($data);
                $dataxxxx['modeloxx']->resenfermedades()->sync($enfermedades);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
