<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\consulta\pivotes\Logs\HCsdSisNnaj;

class CsdSisNnajObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
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

    public function created(CsdSisNnaj $modeloxx)
    {
        HCsdSisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdSisNnaj "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdSisNnaj  $modeloxx
     * @return void
     */
    public function updated(CsdSisNnaj $modeloxx)
    {
        HCsdSisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdSisNnaj "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdSisNnaj  $modeloxx
     * @return void
     */
    public function deleted(CsdSisNnaj $modeloxx)
    {
        HCsdSisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdSisNnaj "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdSisNnaj  $modeloxx
     * @return void
     */
    public function restored(CsdSisNnaj $modeloxx)
    {
        HCsdSisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdSisNnaj "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdSisNnaj  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdSisNnaj $modeloxx)
    {
        HCsdSisNnaj::create($this->getLog($modeloxx));
    }
}