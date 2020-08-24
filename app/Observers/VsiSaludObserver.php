<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiSalud;
use App\Models\sicosocial\VsiSalud;

class VsiSaludObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_atencion_id'] = $modeloxx->prm_atencion_id;
        $log['prm_condicion_id'] = $modeloxx->prm_condicion_id;
        $log['prm_medicamento_id'] = $modeloxx->prm_medicamento_id;
        $log['prm_prescripcion_id'] = $modeloxx->prm_prescripcion_id;
        $log['prm_sexual_id'] = $modeloxx->prm_sexual_id;
        $log['prm_activa_id'] = $modeloxx->prm_activa_id;
        $log['prm_embarazo_id'] = $modeloxx->prm_embarazo_id;
        $log['prm_hijo_id'] = $modeloxx->prm_hijo_id;
        $log['prm_interrupcion_id'] = $modeloxx->prm_interrupcion_id;
        $log['medicamento'] = $modeloxx->medicamento;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['edad'] = $modeloxx->edad;
        $log['embarazo'] = $modeloxx->embarazo;
        $log['hijo'] = $modeloxx->hijo;
        $log['interrupcion'] = $modeloxx->interrupcion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiSalud $modeloxx)
    {
        HVsiSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSalud "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiSalud  $modeloxx
     * @return void
     */
    public function updated(VsiSalud $modeloxx)
    {
        HVsiSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSalud "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiSalud  $modeloxx
     * @return void
     */
    public function deleted(VsiSalud $modeloxx)
    {
        HVsiSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSalud "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiSalud  $modeloxx
     * @return void
     */
    public function restored(VsiSalud $modeloxx)
    {
        HVsiSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSalud "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiSalud  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiSalud $modeloxx)
    {
        HVsiSalud::create($this->getLog($modeloxx));
    }
}