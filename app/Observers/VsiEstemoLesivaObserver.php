<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEstemoLesiva;
use App\Models\sicosocial\Pivotes\VsiEstemoLesiva;

class VsiEstemoLesivaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_estemocional_id'] = $modeloxx->vsi_estemocional_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiEstemoLesiva $modeloxx)
    {
        HVsiEstemoLesiva::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoLesiva "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoLesiva  $modeloxx
     * @return void
     */
    public function updated(VsiEstemoLesiva $modeloxx)
    {
        HVsiEstemoLesiva::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoLesiva "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoLesiva  $modeloxx
     * @return void
     */
    public function deleted(VsiEstemoLesiva $modeloxx)
    {
        HVsiEstemoLesiva::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoLesiva "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoLesiva  $modeloxx
     * @return void
     */
    public function restored(VsiEstemoLesiva $modeloxx)
    {
        HVsiEstemoLesiva::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoLesiva "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoLesiva  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEstemoLesiva $modeloxx)
    {
        HVsiEstemoLesiva::create($this->getLog($modeloxx));
    }
}
