<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiGeningQuien;
use App\Models\sicosocial\Pivotes\VsiGeningQuien;

class VsiGeningQuienObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.        
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_geningreso_id'] = $modeloxx->vsi_geningreso_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiGeningQuien $modeloxx)
    {
        HVsiGeningQuien::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningQuien "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiGeningQuien  $modeloxx
     * @return void
     */
    public function updated(VsiGeningQuien $modeloxx)
    {
        HVsiGeningQuien::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningQuien "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiGeningQuien  $modeloxx
     * @return void
     */
    public function deleted(VsiGeningQuien $modeloxx)
    {
        HVsiGeningQuien::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningQuien "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiGeningQuien  $modeloxx
     * @return void
     */
    public function restored(VsiGeningQuien $modeloxx)
    {
        HVsiGeningQuien::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningQuien "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiGeningQuien  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiGeningQuien $modeloxx)
    {
        HVsiGeningQuien::create($this->getLog($modeloxx));
    }
}
