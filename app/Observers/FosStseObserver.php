<?php

namespace App\Observers;

use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\Logs\HFosStse;

class FosStseObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fos_tse_id'] = $modeloxx->fos_tse_id;
        $log['codigo'] = $modeloxx->codigo;
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

    public function created(FosStse $modeloxx)
    {
        HFosStse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosStse "updated" event.
     *
     * @param  \App\Models\fichaobservacion\FosStse  $modeloxx
     * @return void
     */
    public function updated(FosStse $modeloxx)
    {
        HFosStse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosStse "deleted" event.
     *
     * @param  \App\Models\fichaobservacion\FosStse  $modeloxx
     * @return void
     */
    public function deleted(FosStse $modeloxx)
    {
        HFosStse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosStse "restored" event.
     *
     * @param  \App\Models\fichaobservacion\FosStse  $modeloxx
     * @return void
     */
    public function restored(FosStse $modeloxx)
    {
        HFosStse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosStse "force deleted" event.
     *
     * @param  \App\Models\fichaobservacion\FosStse  $modeloxx
     * @return void
     */
    public function forceDeleted(FosStse $modeloxx)
    {
        HFosStse::create($this->getLog($modeloxx));
    }
}