<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\Traslado\Logs\HMotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;

class MotivoEgresoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['estusuario_id'] = $modeloxx->estusuario_id;
        $log['nombre'] = $modeloxx->nombre;
        $log['descripcion'] = $modeloxx->descripcion;

        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;

        /*
      'estusuario_id', 
         'nombre','descripcion', 
        */

    }

    public function created(MotivoEgreso $modeloxx)
    {
        HMotivoEgreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Parametro  $modeloxx
     * @return void
     */
    public function updated(MotivoEgreso $modeloxx)
    {
        HMotivoEgreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MotivoEgreso "deleted" event.
     *
     * @param  \App\Models\MotivoEgreso  $modeloxx
     * @return void
     */
    public function deleted(MotivoEgreso $modeloxx)
    {
        HMotivoEgreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MotivoEgreso "restored" event.
     *
     * @param  \App\Models\MotivoEgreso  $modeloxx
     * @return void
     */
    public function restored(MotivoEgreso $modeloxx)
    {
        HMotivoEgreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MotivoEgreso "force deleted" event.
     *
     * @param  \App\Models\MotivoEgreso  $modeloxx
     * @return void
     */
    public function forceDeleted(MotivoEgreso $modeloxx)
    {
        HMotivoEgreso::create($this->getLog($modeloxx));
    }
}