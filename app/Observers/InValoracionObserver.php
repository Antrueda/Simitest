<?php

namespace App\Observers;

use App\Models\Indicadores\InValoracion;
use App\Models\Indicadores\Logs\HInValoracion;

class InValoracionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['in_lineabase_nnaj_id'] = $modeloxx->in_lineabase_nnaj_id;
        $log['i_prm_categoria_id'] = $modeloxx->i_prm_categoria_id;
        $log['i_prm_cactual_id'] = $modeloxx->i_prm_cactual_id;
        $log['i_prm_avance_id'] = $modeloxx->i_prm_avance_id;
        $log['i_prm_nivel_id'] = $modeloxx->i_prm_nivel_id;
        $log['s_valoracion'] = $modeloxx->s_valoracion;
        $log['deleted_at'] = $modeloxx->deleted_at;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InValoracion $modeloxx)
    {
        HInValoracion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InValoracion "updated" event.
     *
     * @param  \App\Models\Indicadores\InValoracion  $modeloxx
     * @return void
     */
    public function updated(InValoracion $modeloxx)
    {
        hinvaloracion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InValoracion "deleted" event.
     *
     * @param  \App\Models\Indicadores\InValoracion  $modeloxx
     * @return void
     */
    public function deleted(InValoracion $modeloxx)
    {
        hinvaloracion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InValoracion "restored" event.
     *
     * @param  \App\Models\Indicadores\InValoracion  $modeloxx
     * @return void
     */
    public function restored(InValoracion $modeloxx)
    {
        hinvaloracion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InValoracion "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InValoracion  $modeloxx
     * @return void
     */
    public function forceDeleted(InValoracion $modeloxx)
    {
        hinvaloracion::create($this->getLog($modeloxx));
    }
}