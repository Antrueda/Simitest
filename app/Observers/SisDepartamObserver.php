<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisDepartam;
use App\Models\Sistema\SisDepartam;

class SisDepartamObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['sis_pai_id'] = $modeloxx->sis_pai_id;
        $log['s_departamento'] = $modeloxx->s_departamento;
        $log['simianti_id'] = $modeloxx->simianti_id;

        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisDepartam $modeloxx)
    {
        HSisDepartam::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepartam "updated" event.
     *
     * @param  \App\Models\Sistema\SisDepartam  $modeloxx
     * @return void
     */
    public function updated(SisDepartam $modeloxx)
    {
        HSisDepartam::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepartam "deleted" event.
     *
     * @param  \App\Models\Sistema\SisDepartam  $modeloxx
     * @return void
     */
    public function deleted(SisDepartam $modeloxx)
    {
        HSisDepartam::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepartam "restored" event.
     *
     * @param  \App\Models\Sistema\SisDepartam  $modeloxx
     * @return void
     */
    public function restored(SisDepartam $modeloxx)
    {
        HSisDepartam::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepartam "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisDepartam  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDepartam $modeloxx)
    {
        HSisDepartam::create($this->getLog($modeloxx));
    }
}
