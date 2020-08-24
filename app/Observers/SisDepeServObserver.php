<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisDepeServ;
use App\Models\sistema\SisDepeServ;

class SisDepeServObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
        $log['sis_servicio_id'] = $modeloxx->sis_servicio_id;
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

    public function created(SisDepeServ $modeloxx)
    {
        HSisDepeServ::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepeServ "updated" event.
     *
     * @param  \App\Models\sistema\SisDepeServ  $modeloxx
     * @return void
     */
    public function updated(SisDepeServ $modeloxx)
    {
        HSisDepeServ::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepeServ "deleted" event.
     *
     * @param  \App\Models\sistema\SisDepeServ  $modeloxx
     * @return void
     */
    public function deleted(SisDepeServ $modeloxx)
    {
        HSisDepeServ::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepeServ "restored" event.
     *
     * @param  \App\Models\sistema\SisDepeServ  $modeloxx
     * @return void
     */
    public function restored(SisDepeServ $modeloxx)
    {
        HSisDepeServ::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepeServ "force deleted" event.
     *
     * @param  \App\Models\sistema\SisDepeServ  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDepeServ $modeloxx)
    {
        HSisDepeServ::create($this->getLog($modeloxx));
    }
}