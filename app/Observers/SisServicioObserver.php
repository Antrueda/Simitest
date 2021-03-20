<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisServicio;
use App\Models\Sistema\SisServicio;

class SisServicioObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_servicio'] = $modeloxx->s_servicio;
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

    public function created(SisServicio $modeloxx)
    {
        HSisServicio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisServicio "updated" event.
     *
     * @param  \App\Models\Sistema\SisServicio  $modeloxx
     * @return void
     */
    public function updated(SisServicio $modeloxx)
    {
        HSisServicio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisServicio "deleted" event.
     *
     * @param  \App\Models\Sistema\SisServicio  $modeloxx
     * @return void
     */
    public function deleted(SisServicio $modeloxx)
    {
        HSisServicio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisServicio "restored" event.
     *
     * @param  \App\Models\Sistema\SisServicio  $modeloxx
     * @return void
     */
    public function restored(SisServicio $modeloxx)
    {
        HSisServicio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisServicio "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisServicio  $modeloxx
     * @return void
     */
    public function forceDeleted(SisServicio $modeloxx)
    {
        HSisServicio::create($this->getLog($modeloxx));
    }
}
