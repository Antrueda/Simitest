<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisDocumentoFuente;
use App\Models\Sistema\SisDocumentoFuente;

class SisDocumentoFuenteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['nombre'] = $modeloxx->nombre;
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

    public function created(SisDocumentoFuente $modeloxx)
    {
        HSisDocumentoFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDocumentoFuente "updated" event.
     *
     * @param  \App\Models\Sistema\SisDocumentoFuente  $modeloxx
     * @return void
     */
    public function updated(SisDocumentoFuente $modeloxx)
    {
        HSisDocumentoFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDocumentoFuente "deleted" event.
     *
     * @param  \App\Models\Sistema\SisDocumentoFuente  $modeloxx
     * @return void
     */
    public function deleted(SisDocumentoFuente $modeloxx)
    {
        HSisDocumentoFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDocumentoFuente "restored" event.
     *
     * @param  \App\Models\Sistema\SisDocumentoFuente  $modeloxx
     * @return void
     */
    public function restored(SisDocumentoFuente $modeloxx)
    {
        HSisDocumentoFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDocumentoFuente "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisDocumentoFuente  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDocumentoFuente $modeloxx)
    {
        HSisDocumentoFuente::create($this->getLog($modeloxx));
    }
}