<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisUpzbarri;
use App\Models\Sistema\SisUpzbarri;

class SisUpzbarriObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_localupz_id'] = $modeloxx->sis_localupz_id;
        $log['sis_barrio_id'] = $modeloxx->sis_barrio_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisUpzbarri $modeloxx)
    {
        HSisUpzbarri::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisUpzbarri "updated" event.
     *
     * @param  \App\Models\Sistema\SisUpzbarri  $modeloxx
     * @return void
     */
    public function updated(SisUpzbarri $modeloxx)
    {
        HSisUpzbarri::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisUpzbarri "deleted" event.
     *
     * @param  \App\Models\Sistema\SisUpzbarri  $modeloxx
     * @return void
     */
    public function deleted(SisUpzbarri $modeloxx)
    {
        HSisUpzbarri::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisUpzbarri "restored" event.
     *
     * @param  \App\Models\Sistema\SisUpzbarri  $modeloxx
     * @return void
     */
    public function restored(SisUpzbarri $modeloxx)
    {
        HSisUpzbarri::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisUpzbarri "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisUpzbarri  $modeloxx
     * @return void
     */
    public function forceDeleted(SisUpzbarri $modeloxx)
    {
        HSisUpzbarri::create($this->getLog($modeloxx));
    }
}