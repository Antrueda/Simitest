<?php

namespace App\Observers;

use App\Models\intervencion\Logs\HIsProximaAreaAjuste;
use App\Models\intervencion\IsProximaAreaAjuste;

class IsProximaAreaAjusteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['is_datos_basico_id'] = $modeloxx->is_datos_basico_id;
        $log['i_prm_area_proxima_id'] = $modeloxx->i_prm_area_proxima_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(IsProximaAreaAjuste $modeloxx)
    {
        HIsProximaAreaAjuste::create($this->getLog($modeloxx));
    }

    /**
     * Handle the IsProximaAreaAjuste "updated" event.
     *
     * @param  \App\Models\intervencion\IsProximaAreaAjuste  $modeloxx
     * @return void
     */
    public function updated(IsProximaAreaAjuste $modeloxx)
    {
        HIsProximaAreaAjuste::create($this->getLog($modeloxx));
    }

    /**
     * Handle the IsProximaAreaAjuste "deleted" event.
     *
     * @param  \App\Models\intervencion\IsProximaAreaAjuste  $modeloxx
     * @return void
     */
    public function deleted(IsProximaAreaAjuste $modeloxx)
    {
        HIsProximaAreaAjuste::create($this->getLog($modeloxx));
    }

    /**
     * Handle the IsProximaAreaAjuste "restored" event.
     *
     * @param  \App\Models\intervencion\IsProximaAreaAjuste  $modeloxx
     * @return void
     */
    public function restored(IsProximaAreaAjuste $modeloxx)
    {
        HIsProximaAreaAjuste::create($this->getLog($modeloxx));
    }

    /**
     * Handle the IsProximaAreaAjuste "force deleted" event.
     *
     * @param  \App\Models\intervencion\IsProximaAreaAjuste  $modeloxx
     * @return void
     */
    public function forceDeleted(IsProximaAreaAjuste $modeloxx)
    {
        HIsProximaAreaAjuste::create($this->getLog($modeloxx));
    }
}