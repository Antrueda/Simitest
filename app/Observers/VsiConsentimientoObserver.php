<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiConsentimiento;
use App\Models\sicosocial\VsiConsentimiento;

class VsiConsentimientoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['user_doc1_id'] = $modeloxx->user_doc1_id;
        $log['cargo1'] = $modeloxx->cargo1;
        $log['user_doc2_id'] = $modeloxx->user_doc2_id;
        $log['cargo2'] = $modeloxx->cargo2;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiConsentimiento $modeloxx)
    {
        HVsiConsentimiento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsentimiento "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiConsentimiento  $modeloxx
     * @return void
     */
    public function updated(VsiConsentimiento $modeloxx)
    {
        HVsiConsentimiento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsentimiento "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConsentimiento  $modeloxx
     * @return void
     */
    public function deleted(VsiConsentimiento $modeloxx)
    {
        HVsiConsentimiento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsentimiento "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiConsentimiento  $modeloxx
     * @return void
     */
    public function restored(VsiConsentimiento $modeloxx)
    {
        HVsiConsentimiento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsentimiento "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConsentimiento  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiConsentimiento $modeloxx)
    {
        HVsiConsentimiento::create($this->getLog($modeloxx));
    }
}