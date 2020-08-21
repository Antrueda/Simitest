<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdDinfamEstablecen;
use App\Models\consulta\pivotes\Logs\HCsdDinfamEstablecen;

class CsdDinfamEstablecenObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['csd_dinfamiliar_id'] = $modeloxx->csd_dinfamiliar_id;
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

    public function created(CsdDinfamEstablecen $modeloxx)
    {
        HCsdDinfamEstablecen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamEstablecen "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamEstablecen  $modeloxx
     * @return void
     */
    public function updated(CsdDinfamEstablecen $modeloxx)
    {
        HCsdDinfamEstablecen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamEstablecen "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamEstablecen  $modeloxx
     * @return void
     */
    public function deleted(CsdDinfamEstablecen $modeloxx)
    {
        HCsdDinfamEstablecen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamEstablecen "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamEstablecen  $modeloxx
     * @return void
     */
    public function restored(CsdDinfamEstablecen $modeloxx)
    {
        HCsdDinfamEstablecen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamEstablecen "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamEstablecen  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdDinfamEstablecen $modeloxx)
    {
        HCsdDinfamEstablecen::create($this->getLog($modeloxx));
    }
}