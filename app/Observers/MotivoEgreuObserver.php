<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\Traslado\Logs\HMotivoEgreu;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;

class MotivoEgreuObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        // $log['estusuario_id'] = $modeloxx->estusuario_id;
        $log['motivoe_id'] = $modeloxx->motivoe_id;
        $log['motivoese_id'] = $modeloxx->motivoese_id;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(MotivoEgreu $modeloxx)
    {
        HMotivoEgreu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Parametro  $modeloxx
     * @return void
     */
    public function updated(MotivoEgreu $modeloxx)
    {
        HMotivoEgreu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MotivoEgreu "deleted" event.
     *
     * @param  \App\Models\MotivoEgreu  $modeloxx
     * @return void
     */
    public function deleted(MotivoEgreu $modeloxx)
    {
        HMotivoEgreu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MotivoEgreu "restored" event.
     *
     * @param  \App\Models\MotivoEgreu  $modeloxx
     * @return void
     */
    public function restored(MotivoEgreu $modeloxx)
    {
        HMotivoEgreu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MotivoEgreu "force deleted" event.
     *
     * @param  \App\Models\MotivoEgreu  $modeloxx
     * @return void
     */
    public function forceDeleted(MotivoEgreu $modeloxx)
    {
        HMotivoEgreu::create($this->getLog($modeloxx));
    }
}