<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\fichaIngreso\Logs\HFiDocumentosAnexa;

class FiDocumentosAnexaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_razone_id'] = $modeloxx->fi_razone_id;
        $log['i_prm_documento_id'] = $modeloxx->i_prm_documento_id;
        $log['s_ruta'] = $modeloxx->s_ruta;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiDocumentosAnexa $modeloxx)
    {
        HFiDocumentosAnexa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDocumentosAnexa "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiDocumentosAnexa  $modeloxx
     * @return void
     */
    public function updated(FiDocumentosAnexa $modeloxx)
    {
        HFiDocumentosAnexa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDocumentosAnexa "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDocumentosAnexa  $modeloxx
     * @return void
     */
    public function deleted(FiDocumentosAnexa $modeloxx)
    {
        HFiDocumentosAnexa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDocumentosAnexa "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiDocumentosAnexa  $modeloxx
     * @return void
     */
    public function restored(FiDocumentosAnexa $modeloxx)
    {
        HFiDocumentosAnexa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDocumentosAnexa "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDocumentosAnexa  $modeloxx
     * @return void
     */
    public function forceDeleted(FiDocumentosAnexa $modeloxx)
    {
        HFiDocumentosAnexa::create($this->getLog($modeloxx));
    }
}