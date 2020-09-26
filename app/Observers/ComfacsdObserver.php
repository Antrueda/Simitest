<?php

namespace App\Observers;

use App\Models\consulta\Comfacsd;
use App\Models\consulta\Logs\HComfacsd;


class ComfacsdObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['fi_compfami_id'] = $modeloxx->fi_compfami_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(Comfacsd $modeloxx)
    {
        HComfacsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the csdBienvenida "updated" event.
     *
     * @param  \App\Models\consulta\CsdBienvenida  $modeloxx
     * @return void
     */
    public function updated(Comfacsd $modeloxx)
    {
        HComfacsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the csdBienvenida "deleted" event.
     *
     * @param  \App\Models\consulta\CsdBienvenida  $modeloxx
     * @return void
     */
    public function deleted(Comfacsd $modeloxx)
    {
        HComfacsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenida "restored" event.
     *
     * @param  \App\Models\consulta\CsdBienvenida  $modeloxx
     * @return void
     */
    public function restored(Comfacsd $modeloxx)
    {
        HComfacsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenida "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdBienvenida  $modeloxx
     * @return void
     */
    public function forceDeleted(Comfacsd $modeloxx)
    {
        HComfacsd::create($this->getLog($modeloxx));
    }
}