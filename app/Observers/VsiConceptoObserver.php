<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiConcepto;
use App\Models\sicosocial\VsiConcepto;

class VsiConceptoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['concepto'] = $modeloxx->concepto;
        $log['prm_ingreso_id'] = $modeloxx->prm_ingreso_id;
        $log['porque'] = $modeloxx->porque;
        $log['cual'] = $modeloxx->cual;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiConcepto $modeloxx)
    {
        HVsiConcepto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConcepto "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiConcepto  $modeloxx
     * @return void
     */
    public function updated(VsiConcepto $modeloxx)
    {
        HVsiConcepto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConcepto "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConcepto  $modeloxx
     * @return void
     */
    public function deleted(VsiConcepto $modeloxx)
    {
        HVsiConcepto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConcepto "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiConcepto  $modeloxx
     * @return void
     */
    public function restored(VsiConcepto $modeloxx)
    {
        HVsiConcepto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConcepto "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConcepto  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiConcepto $modeloxx)
    {
        HVsiConcepto::create($this->getLog($modeloxx));
    }
}