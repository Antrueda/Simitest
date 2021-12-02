<?php

namespace App\Observers;

use App\Models\Actaencu\AeDirregi;
use App\Models\Actaencu\Logs\HAeDirregi;

class AeDirregiObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['ae_asistencia_id'] = $modeloxx->ae_asistencia_id;
        $log['i_prm_tipo_via_id'] = $modeloxx->i_prm_tipo_via_id;
        $log['s_complemento'] = $modeloxx->s_complemento;
        $log['s_nombre_via'] = $modeloxx->s_nombre_via;
        $log['i_prm_alfabeto_via_id'] = $modeloxx->i_prm_alfabeto_via_id;
        $log['i_prm_tiene_bis_id'] = $modeloxx->i_prm_tiene_bis_id;
        $log['i_prm_bis_alfabeto_id'] = $modeloxx->i_prm_bis_alfabeto_id;
        $log['i_prm_cuadrante_vp_id'] = $modeloxx->i_prm_cuadrante_vp_id;
        $log['i_via_generadora'] = $modeloxx->i_via_generadora;
        $log['i_prm_alfabetico_vg_id'] = $modeloxx->i_prm_alfabetico_vg_id;
        $log['i_placa_vg'] = $modeloxx->i_placa_vg;
        $log['i_prm_cuadrante_vg_id'] = $modeloxx->i_prm_cuadrante_vg_id;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(AeDirregi $modeloxx)
    {
        HAeDirregi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\AeDirregi  $modeloxx
     * @return void
     */
    public function updated(AeDirregi $modeloxx)
    {
        HAeDirregi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeDirregi "deleted" event.
     *
     * @param  \App\Models\Actaencu\AeDirregi  $modeloxx
     * @return void
     */
    public function deleted(AeDirregi $modeloxx)
    {
        HAeDirregi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeDirregi "restored" event.
     *
     * @param  \App\Models\Actaencu\AeDirregi  $modeloxx
     * @return void
     */
    public function restored(AeDirregi $modeloxx)
    {
        HAeDirregi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeDirregi "force deleted" event.
     *
     * @param  \App\Models\Actaencu\AeDirregi  $modeloxx
     * @return void
     */
    public function forceDeleted(AeDirregi $modeloxx)
    {
        HAeDirregi::create($this->getLog($modeloxx));
    }
}