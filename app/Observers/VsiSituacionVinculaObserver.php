<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiSituacionVincula;
use App\Models\sicosocial\Pivotes\VsiSituacionVincula;

class VsiSituacionVinculaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_datos_vincula_id'] = $modeloxx->vsi_datos_vincula_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiSituacionVincula $modeloxx)
    {
        HVsiSituacionVincula::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSituacionVincula "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSituacionVincula  $modeloxx
     * @return void
     */
    public function updated(VsiSituacionVincula $modeloxx)
    {
        HVsiSituacionVincula::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSituacionVincula "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSituacionVincula  $modeloxx
     * @return void
     */
    public function deleted(VsiSituacionVincula $modeloxx)
    {
        HVsiSituacionVincula::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSituacionVincula "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSituacionVincula  $modeloxx
     * @return void
     */
    public function restored(VsiSituacionVincula $modeloxx)
    {
        HVsiSituacionVincula::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSituacionVincula "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSituacionVincula  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiSituacionVincula $modeloxx)
    {
        HVsiSituacionVincula::create($this->getLog($modeloxx));
    }
}