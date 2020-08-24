<?php

namespace App\Observers;

use App\Models\consulta\CsdJusticia;
use App\Models\consulta\Logs\HCsdJusticia;

class CsdJusticiaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['prm_vinculado_id'] = $modeloxx->prm_vinculado_id;
        $log['prm_vin_causa_id'] = $modeloxx->prm_vin_causa_id;
        $log['prm_riesgo_id'] = $modeloxx->prm_riesgo_id;
        $log['prm_rie_causa_id'] = $modeloxx->prm_rie_causa_id;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(CsdJusticia $modeloxx)
    {
        HCsdJusticia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdJusticia "updated" event.
     *
     * @param  \App\Models\consulta\CsdJusticia  $modeloxx
     * @return void
     */
    public function updated(CsdJusticia $modeloxx)
    {
        HCsdJusticia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdJusticia "deleted" event.
     *
     * @param  \App\Models\consulta\CsdJusticia  $modeloxx
     * @return void
     */
    public function deleted(CsdJusticia $modeloxx)
    {
        HCsdJusticia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdJusticia "restored" event.
     *
     * @param  \App\Models\consulta\CsdJusticia  $modeloxx
     * @return void
     */
    public function restored(CsdJusticia $modeloxx)
    {
        HCsdJusticia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdJusticia "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdJusticia  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdJusticia $modeloxx)
    {
        HCsdJusticia::create($this->getLog($modeloxx));
    }
}