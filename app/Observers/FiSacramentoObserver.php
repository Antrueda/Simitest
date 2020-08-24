<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiSacramento;
use App\Models\fichaIngreso\Logs\HFiSacramento;

class FiSacramentoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_actividadestl_id'] = $modeloxx->fi_actividadestl_id;
        $log['i_prm_sacramentos_hechos_id'] = $modeloxx->i_prm_sacramentos_hechos_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiSacramento $modeloxx)
    {
        HFiSacramento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSacramento "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiSacramento  $modeloxx
     * @return void
     */
    public function updated(FiSacramento $modeloxx)
    {
        HFiSacramento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSacramento "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSacramento  $modeloxx
     * @return void
     */
    public function deleted(FiSacramento $modeloxx)
    {
        HFiSacramento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSacramento "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiSacramento  $modeloxx
     * @return void
     */
    public function restored(FiSacramento $modeloxx)
    {
        HFiSacramento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSacramento "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSacramento  $modeloxx
     * @return void
     */
    public function forceDeleted(FiSacramento $modeloxx)
    {
        HFiSacramento::create($this->getLog($modeloxx));
    }
}