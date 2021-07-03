<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisDiaFestivo;
use App\Models\Sistema\SisDiaFestivo;

class SisDiaFestivoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['dia'] = $modeloxx->dia;
        $log['mes'] = $modeloxx->mes;
        $log['anio'] = $modeloxx->anio;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisDiaFestivo $modeloxx)
    {
        HSisDiaFestivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDiaFestivo "updated" event.
     *
     * @param  \App\Models\Sistema\SisDiaFestivo  $modeloxx
     * @return void
     */
    public function updated(SisDiaFestivo $modeloxx)
    {
        HSisDiaFestivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDiaFestivo "deleted" event.
     *
     * @param  \App\Models\Sistema\SisDiaFestivo  $modeloxx
     * @return void
     */
    public function deleted(SisDiaFestivo $modeloxx)
    {
        HSisDiaFestivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDiaFestivo "restored" event.
     *
     * @param  \App\Models\Sistema\SisDiaFestivo  $modeloxx
     * @return void
     */
    public function restored(SisDiaFestivo $modeloxx)
    {
        HSisDiaFestivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDiaFestivo "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisDiaFestivo  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDiaFestivo $modeloxx)
    {
        HSisDiaFestivo::create($this->getLog($modeloxx));
    }
}
