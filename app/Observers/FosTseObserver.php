<?php

namespace App\Observers;

use App\Models\fichaobservacion\FosTse;
use App\Models\fichaobservacion\Logs\HFosTse;

class FosTseObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['area_id'] = $modeloxx->area_id;
        $log['nombre'] = $modeloxx->nombre;
        $log['descripcion'] = $modeloxx->descripcion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FosTse $modeloxx)
    {
        HFosTse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosTse "updated" event.
     *
     * @param  \App\Models\fichaobservacion\FosTse  $modeloxx
     * @return void
     */
    public function updated(FosTse $modeloxx)
    {
        HFosTse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosTse "deleted" event.
     *
     * @param  \App\Models\fichaobservacion\FosTse  $modeloxx
     * @return void
     */
    public function deleted(FosTse $modeloxx)
    {
        HFosTse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosTse "restored" event.
     *
     * @param  \App\Models\fichaobservacion\FosTse  $modeloxx
     * @return void
     */
    public function restored(FosTse $modeloxx)
    {
        HFosTse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosTse "force deleted" event.
     *
     * @param  \App\Models\fichaobservacion\FosTse  $modeloxx
     * @return void
     */
    public function forceDeleted(FosTse $modeloxx)
    {
        HFosTse::create($this->getLog($modeloxx));
    }
}