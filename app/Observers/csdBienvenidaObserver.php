<?php

namespace App\Observers;

use App\Models\consulta\csdBienvenida;
use App\Models\consulta\Logs\HcsdBienvenida;

class csdBienvenidaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['prm_persona_id'] = $modeloxx->prm_persona_id;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(csdBienvenida $modeloxx)
    {
        HcsdBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the csdBienvenida "updated" event.
     *
     * @param  \App\Models\consulta\csdBienvenida  $modeloxx
     * @return void
     */
    public function updated(csdBienvenida $modeloxx)
    {
        HcsdBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the csdBienvenida "deleted" event.
     *
     * @param  \App\Models\consulta\csdBienvenida  $modeloxx
     * @return void
     */
    public function deleted(csdBienvenida $modeloxx)
    {
        HcsdBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the csdBienvenida "restored" event.
     *
     * @param  \App\Models\consulta\csdBienvenida  $modeloxx
     * @return void
     */
    public function restored(csdBienvenida $modeloxx)
    {
        HcsdBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the csdBienvenida "force deleted" event.
     *
     * @param  \App\Models\consulta\csdBienvenida  $modeloxx
     * @return void
     */
    public function forceDeleted(csdBienvenida $modeloxx)
    {
        HcsdBienvenida::create($this->getLog($modeloxx));
    }
}