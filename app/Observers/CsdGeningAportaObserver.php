<?php

namespace App\Observers;

use App\Models\consulta\CsdGeningAporta;
use App\Models\consulta\Logs\HCsdGeningAporta;

class CsdGeningAportaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['prm_aporta_id'] = $modeloxx->prm_aporta_id;
        $log['mensual'] = $modeloxx->mensual;
        $log['aporte'] = $modeloxx->aporte;
        $log['jornada_entre'] = $modeloxx->jornada_entre;
        $log['prm_entre_id'] = $modeloxx->prm_entre_id;
        $log['jornada_a'] = $modeloxx->jornada_a;
        $log['prm_a_id'] = $modeloxx->prm_a_id;
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

    public function created(CsdGeningAporta $modeloxx)
    {
        HCsdGeningAporta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdGeningAporta "updated" event.
     *
     * @param  \App\Models\consulta\CsdGeningAporta  $modeloxx
     * @return void
     */
    public function updated(CsdGeningAporta $modeloxx)
    {
        HCsdGeningAporta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdGeningAporta "deleted" event.
     *
     * @param  \App\Models\consulta\CsdGeningAporta  $modeloxx
     * @return void
     */
    public function deleted(CsdGeningAporta $modeloxx)
    {
        HCsdGeningAporta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdGeningAporta "restored" event.
     *
     * @param  \App\Models\consulta\CsdGeningAporta  $modeloxx
     * @return void
     */
    public function restored(CsdGeningAporta $modeloxx)
    {
        HCsdGeningAporta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdGeningAporta "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdGeningAporta  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdGeningAporta $modeloxx)
    {
        HCsdGeningAporta::create($this->getLog($modeloxx));
    }
}