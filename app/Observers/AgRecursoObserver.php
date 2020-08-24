<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\Logs\HAgRecurso;

class AgRecursoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_recurso'] = $modeloxx->s_recurso;
        $log['i_prm_trecurso_id'] = $modeloxx->i_prm_trecurso_id;
        $log['i_prm_umedida_id'] = $modeloxx->i_prm_umedida_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgRecurso $modeloxx)
    {
        HAgRecurso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgRecurso "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgRecurso  $modeloxx
     * @return void
     */
    public function updated(AgRecurso $modeloxx)
    {
        HAgRecurso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgRecurso "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgRecurso  $modeloxx
     * @return void
     */
    public function deleted(AgRecurso $modeloxx)
    {
        HAgRecurso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgRecurso "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgRecurso  $modeloxx
     * @return void
     */
    public function restored(AgRecurso $modeloxx)
    {
        HAgRecurso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgRecurso "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgRecurso  $modeloxx
     * @return void
     */
    public function forceDeleted(AgRecurso $modeloxx)
    {
        HAgRecurso::create($this->getLog($modeloxx));
    }
}