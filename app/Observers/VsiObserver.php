<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsi;
use App\Models\sicosocial\Vsi;

class VsiObserver
{
    private function getLog($modeloxx)
    {
// campos por defecto, no borrar.        
        $log = [];
        $log['id_old'] = $modeloxx->id;
// campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
        $log['fecha'] = $modeloxx->fecha;
// campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    } 
    
    public function created(Vsi $modeloxx)
    {
        HVsi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the vsi "updated" event.
     *
     * @param  \App\Models\sicosocial\Vsi  $modeloxx
     * @return void
     */
    public function updated(Vsi $modeloxx)
    {
        HVsi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the vsi "deleted" event.
     *
     * @param  \App\Models\sicosocial\Vsi  $modeloxx
     * @return void
     */
    public function deleted(Vsi $modeloxx)
    {
        HVsi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the vsi "restored" event.
     *
     * @param  \App\Models\sicosocial\Vsi  $modeloxx
     * @return void
     */
    public function restored(Vsi $modeloxx)
    {
        HVsi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the vsi "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Vsi  $modeloxx
     * @return void
     */
    public function forceDeleted(Vsi $modeloxx)
    {
        HVsi::create($this->getLog($modeloxx));
    }
}