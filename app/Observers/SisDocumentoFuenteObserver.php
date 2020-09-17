<?php

namespace App\Observers;


use App\Models\Sistema\SisDocfuen;
use App\Models\Sistema\Logs\HSisDocfuen;

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

    public function created(SisDocfuen $modeloxx)
    {
        HSisDocfuen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDocumentoFuente "updated" event.
     *
     * @param  \App\Models\Sistema\SisDocumentoFuente  $modeloxx
     * @return void
     */
    public function updated(SisDocfuen $modeloxx)
    {
        HSisDocfuen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDocfuen "deleted" event.
     *
     * @param  \App\Models\Sistema\SisDocfuen  $modeloxx
     * @return void
     */
    public function deleted(SisDocfuen $modeloxx)
    {
        HSisDocfuen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDocfuen "restored" event.
     *
     * @param  \App\Models\Sistema\SisDocfuen  $modeloxx
     * @return void
     */
    public function restored(SisDocfuen $modeloxx)
    {
        HSisDocfuen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDocfuen "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisDocfuen  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDocfuen $modeloxx)
    {
        HSisDocfuen::create($this->getLog($modeloxx));
    }
}
