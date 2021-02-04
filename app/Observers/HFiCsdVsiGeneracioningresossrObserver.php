<?php

namespace App\Observers;

use App\HFiCsdVsiGeneracioningresoss;

class HFiCsdVsiGeneracioningresossrObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['prm_actgeing_id'] = $modeloxx->prm_actgeing_id;
        $log['s_trabajo_formal'] = $modeloxx->s_trabajo_formal;
        $log['prm_trabinfo_id'] = $modeloxx->prm_trabinfo_id;
        $log['prm_otractiv_id'] = $modeloxx->prm_otractiv_id;
        $log['prm_razgeing_id'] = $modeloxx->prm_razgeing_id;
        $log['diabuemp'] = $modeloxx->diabuemp;
        $log['mesbuemp'] = $modeloxx->mesbuemp;
        $log['anobuemp'] = $modeloxx->anobuemp;
        $log['prm_jorgeing_id'] = $modeloxx->prm_jorgeing_id;
        $log['s_hora_inicial'] = $modeloxx->s_hora_inicial;
        $log['s_hora_final'] = $modeloxx->s_hora_final;
        $log['prm_frecingr_id'] = $modeloxx->prm_frecingr_id;
        $log['totinmen'] = $modeloxx->totinmen;
        $log['prm_tiprelab_id'] = $modeloxx->prm_tiprelab_id;
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
    public function created(HFiCsdVsiGeneracioningresoss $modeloxx)
    {
        HFiCsdVsiGeneracioningresoss::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi generacioningresoss "updated" event.
     *
     * @param  \App\HFiCsdVsiGeneracioningresoss  $modeloxx
     * @return void
     */
    public function updated(HFiCsdVsiGeneracioningresoss $modeloxx)
    {
        HFiCsdVsiGeneracioningresoss::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi generacioningresoss "deleted" event.
     *
     * @param  \App\HFiCsdVsiGeneracioningresoss  $modeloxx
     * @return void
     */
    public function deleted(HFiCsdVsiGeneracioningresoss $modeloxx)
    {
        HFiCsdVsiGeneracioningresoss::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi generacioningresoss "restored" event.
     *
     * @param  \App\HFiCsdVsiGeneracioningresoss  $modeloxx
     * @return void
     */
    public function restored(HFiCsdVsiGeneracioningresoss $modeloxx)
    {
        HFiCsdVsiGeneracioningresoss::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi generacioningresoss "force deleted" event.
     *
     * @param  \App\HFiCsdVsiGeneracioningresoss  $modeloxx
     * @return void
     */
    public function forceDeleted(HFiCsdVsiGeneracioningresoss $modeloxx)
    {
        HFiCsdVsiGeneracioningresoss::create($this->getLog($modeloxx));
    }
}
