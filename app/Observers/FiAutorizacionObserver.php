<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\Logs\HFiAutorizacion;

class FiAutorizacionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['i_prm_autorizo_id'] = $modeloxx->i_prm_autorizo_id;
        $log['fi_compfami_id'] = $modeloxx->fi_compfami_id;
        $log['i_prm_parentesco_id'] = $modeloxx->i_prm_parentesco_id;
        $log['d_autorizacion'] = $modeloxx->d_autorizacion;
        $log['i_prm_tipo_diligencia_id'] = $modeloxx->i_prm_tipo_diligencia_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiAutorizacion $modeloxx)
    {
        HFiAutorizacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiAutorizacion "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiAutorizacion  $modeloxx
     * @return void
     */
    public function updated(FiAutorizacion $modeloxx)
    {
        HFiAutorizacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiAutorizacion "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiAutorizacion  $modeloxx
     * @return void
     */
    public function deleted(FiAutorizacion $modeloxx)
    {
        HFiAutorizacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiAutorizacion "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiAutorizacion  $modeloxx
     * @return void
     */
    public function restored(FiAutorizacion $modeloxx)
    {
        HFiAutorizacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiAutorizacion "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiAutorizacion  $modeloxx
     * @return void
     */
    public function forceDeleted(FiAutorizacion $modeloxx)
    {
        HFiAutorizacion::create($this->getLog($modeloxx));
    }
}
