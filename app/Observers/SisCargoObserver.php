<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisCargo;
use App\Models\sistema\SisCargo;

class SisCargoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_cargo'] = $modeloxx->s_cargo;
        $log['itiestan'] = $modeloxx->itiestan;
        $log['itiegabe'] = $modeloxx->itiegabe;
        $log['itigafin'] = $modeloxx->itigafin;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisCargo $modeloxx)
    {
        HSisCargo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisCargo "updated" event.
     *
     * @param  \App\Models\sistema\SisCargo  $modeloxx
     * @return void
     */
    public function updated(SisCargo $modeloxx)
    {
        HSisCargo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisCargo "deleted" event.
     *
     * @param  \App\Models\sistema\SisCargo  $modeloxx
     * @return void
     */
    public function deleted(SisCargo $modeloxx)
    {
        HSisCargo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisCargo "restored" event.
     *
     * @param  \App\Models\sistema\SisCargo  $modeloxx
     * @return void
     */
    public function restored(SisCargo $modeloxx)
    {
        HSisCargo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisCargo "force deleted" event.
     *
     * @param  \App\Models\sistema\SisCargo  $modeloxx
     * @return void
     */
    public function forceDeleted(SisCargo $modeloxx)
    {
        HSisCargo::create($this->getLog($modeloxx));
    }
}