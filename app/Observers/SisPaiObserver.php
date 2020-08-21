<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisPai;
use App\Models\sistema\SisPai;

class SisPaiObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_iso'] = $modeloxx->s_iso;
        $log['s_pais'] = $modeloxx->s_pais;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisPai $modeloxx)
    {
        HSisPai::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisPai "updated" event.
     *
     * @param  \App\Models\sistema\SisPai  $modeloxx
     * @return void
     */
    public function updated(SisPai $modeloxx)
    {
        HSisPai::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisPai "deleted" event.
     *
     * @param  \App\Models\sistema\SisPai  $modeloxx
     * @return void
     */
    public function deleted(SisPai $modeloxx)
    {
        HSisPai::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisPai "restored" event.
     *
     * @param  \App\Models\sistema\SisPai  $modeloxx
     * @return void
     */
    public function restored(SisPai $modeloxx)
    {
        HSisPai::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisPai "force deleted" event.
     *
     * @param  \App\Models\sistema\SisPai  $modeloxx
     * @return void
     */
    public function forceDeleted(SisPai $modeloxx)
    {
        HSisPai::create($this->getLog($modeloxx));
    }
}