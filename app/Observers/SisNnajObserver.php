<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisNnaj;
use App\Models\Sistema\SisNnaj;

class SisNnajObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['prm_escomfam_id'] = $modeloxx->prm_escomfam_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisNnaj $modeloxx)
    {
        HSisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisNnaj "updated" event.
     *
     * @param  \App\Models\Sistema\SisNnaj  $modeloxx
     * @return void
     */
    public function updated(SisNnaj $modeloxx)
    {
        HSisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisNnaj "deleted" event.
     *
     * @param  \App\Models\Sistema\SisNnaj  $modeloxx
     * @return void
     */
    public function deleted(SisNnaj $modeloxx)
    {
        HSisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisNnaj "restored" event.
     *
     * @param  \App\Models\Sistema\SisNnaj  $modeloxx
     * @return void
     */
    public function restored(SisNnaj $modeloxx)
    {
        HSisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisNnaj "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisNnaj  $modeloxx
     * @return void
     */
    public function forceDeleted(SisNnaj $modeloxx)
    {
        HSisNnaj::create($this->getLog($modeloxx));
    }
}
