<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgConvenio;
use App\Models\Acciones\Grupales\Logs\HAgConvenio;

class AgConvenioObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_convenio'] = $modeloxx->s_convenio;
        $log['i_prm_tconvenio_id'] = $modeloxx->i_prm_tconvenio_id;
        $log['i_prm_entidad_id'] = $modeloxx->i_prm_entidad_id;
        $log['s_descripcion'] = $modeloxx->s_descripcion;
        $log['i_nconvenio'] = $modeloxx->i_nconvenio;
        $log['d_subscrip'] = $modeloxx->d_subscrip;
        $log['d_terminac'] = $modeloxx->d_terminac;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgConvenio $modeloxx)
    {
        HAgConvenio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgConvenio "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgConvenio  $modeloxx
     * @return void
     */
    public function updated(AgConvenio $modeloxx)
    {
        HAgConvenio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgConvenio "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgConvenio  $modeloxx
     * @return void
     */
    public function deleted(AgConvenio $modeloxx)
    {
        HAgConvenio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgConvenio "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgConvenio  $modeloxx
     * @return void
     */
    public function restored(AgConvenio $modeloxx)
    {
        HAgConvenio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgConvenio "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgConvenio  $modeloxx
     * @return void
     */
    public function forceDeleted(AgConvenio $modeloxx)
    {
        HAgConvenio::create($this->getLog($modeloxx));
    }
}
