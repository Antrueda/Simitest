<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInLineabaseNnaj;
use App\Models\Indicadores\InLineabaseNnaj;

class InLineabaseNnajObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['in_fuente_id'] = $modeloxx->in_fuente_id;
        $log['i_prm_categoria_id'] = $modeloxx->i_prm_categoria_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InLineabaseNnaj $modeloxx)
    {
        HInLineabaseNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLineabaseNnaj "updated" event.
     *
     * @param  \App\Models\Indicadores\InLineabaseNnaj  $modeloxx
     * @return void
     */
    public function updated(InLineabaseNnaj $modeloxx)
    {
        HInLineabaseNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLineabaseNnaj "deleted" event.
     *
     * @param  \App\Models\Indicadores\InLineabaseNnaj  $modeloxx
     * @return void
     */
    public function deleted(InLineabaseNnaj $modeloxx)
    {
        HInLineabaseNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLineabaseNnaj "restored" event.
     *
     * @param  \App\Models\Indicadores\InLineabaseNnaj  $modeloxx
     * @return void
     */
    public function restored(InLineabaseNnaj $modeloxx)
    {
        HInLineabaseNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLineabaseNnaj "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InLineabaseNnaj  $modeloxx
     * @return void
     */
    public function forceDeleted(InLineabaseNnaj $modeloxx)
    {
        HInLineabaseNnaj::create($this->getLog($modeloxx));
    }
}