<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiDatosVincula;
use App\Models\sicosocial\VsiDatosVincula;

class VsiDatosVinculaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_razon_id'] = $modeloxx->prm_razon_id;
        $log['dia'] = $modeloxx->dia;
        $log['mes'] = $modeloxx->mes;
        $log['ano'] = $modeloxx->ano;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiDatosVincula $modeloxx)
    {
        HVsiDatosVincula::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDatosVincula "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiDatosVincula  $modeloxx
     * @return void
     */
    public function updated(VsiDatosVincula $modeloxx)
    {
        HVsiDatosVincula::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDatosVincula "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDatosVincula  $modeloxx
     * @return void
     */
    public function deleted(VsiDatosVincula $modeloxx)
    {
        HVsiDatosVincula::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDatosVincula "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiDatosVincula  $modeloxx
     * @return void
     */
    public function restored(VsiDatosVincula $modeloxx)
    {
        HVsiDatosVincula::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDatosVincula "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDatosVincula  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDatosVincula $modeloxx)
    {
        HVsiDatosVincula::create($this->getLog($modeloxx));
    }
}
