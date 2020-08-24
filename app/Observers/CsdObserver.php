<?php

namespace App\Observers;

use App\Models\consulta\Csd;
use App\Models\consulta\Logs\HCsd;

class CsdObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['proposito'] = $modeloxx->proposito;
        $log['fecha'] = $modeloxx->fecha;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
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

    public function created(Csd $modeloxx)
    {
        HCsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Csd "updated" event.
     *
     * @param  \App\Models\consulta\Csd  $modeloxx
     * @return void
     */
    public function updated(Csd $modeloxx)
    {
        HCsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Csd "deleted" event.
     *
     * @param  \App\Models\consulta\Csd  $modeloxx
     * @return void
     */
    public function deleted(Csd $modeloxx)
    {
        HCsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Csd "restored" event.
     *
     * @param  \App\Models\consulta\Csd  $modeloxx
     * @return void
     */
    public function restored(Csd $modeloxx)
    {
        HCsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Csd "force deleted" event.
     *
     * @param  \App\Models\consulta\Csd  $modeloxx
     * @return void
     */
    public function forceDeleted(Csd $modeloxx)
    {
        HCsd::create($this->getLog($modeloxx));
    }
}