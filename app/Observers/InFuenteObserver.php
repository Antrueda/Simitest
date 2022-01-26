<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInFuente;
use App\Models\Indicadores\InFuente;

class InFuenteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['in_linea_base_id'] = $modeloxx->in_linea_base_id;
        $log['in_indicador_id'] = $modeloxx->in_indicador_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InFuente $modeloxx)
    {
        HInFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InFuente "updated" event.
     *
     * @param  \App\Models\Indicadores\InFuente  $modeloxx
     * @return void
     */
    public function updated(InFuente $modeloxx)
    {
        HInFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InFuente "deleted" event.
     *
     * @param  \App\Models\Indicadores\InFuente  $modeloxx
     * @return void
     */
    public function deleted(InFuente $modeloxx)
    {
        HInFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InFuente "restored" event.
     *
     * @param  \App\Models\Indicadores\InFuente  $modeloxx
     * @return void
     */
    public function restored(InFuente $modeloxx)
    {
        HInFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InFuente "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InFuente  $modeloxx
     * @return void
     */
    public function forceDeleted(InFuente $modeloxx)
    {
        HInFuente::create($this->getLog($modeloxx));
    }
}