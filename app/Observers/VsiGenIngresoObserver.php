<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiGenIngreso;
use App\Models\sicosocial\VsiGenIngreso;

class VsiGenIngresoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.        
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_actividad_id'] = $modeloxx->prm_actividad_id;
        $log['trabaja'] = $modeloxx->trabaja;
        $log['prm_informal_id'] = $modeloxx->prm_informal_id;
        $log['prm_otra_id'] = $modeloxx->prm_otra_id;
        $log['prm_no_id'] = $modeloxx->prm_no_id;
        $log['cuanto'] = $modeloxx->cuanto;
        $log['prm_periodo_id'] = $modeloxx->prm_periodo_id;
        $log['prm_jornada_genera_ingreso_id'] = $modeloxx->prm_jornada_genera_ingreso_id;

        $log['jornada_entre'] = $modeloxx->jornada_entre;
        $log['prm_jor_entre_id'] = $modeloxx->prm_jor_entre_id;
        $log['jornada_a'] = $modeloxx->jornada_a;
        $log['prm_jor_a_id'] = $modeloxx->prm_jor_a_id;
        $log['prm_frecuencia_id'] = $modeloxx->prm_frecuencia_id;
        $log['aporte'] = $modeloxx->aporte;
        $log['prm_laboral_id'] = $modeloxx->prm_laboral_id;
        $log['prm_aporta_id'] = $modeloxx->prm_aporta_id;
        $log['porque'] = $modeloxx->porque;
        $log['cuanto_aporta'] = $modeloxx->cuanto_aporta;
        $log['expectativa'] = $modeloxx->expectativa;
        $log['descripcion'] = $modeloxx->descripcion;

        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiGenIngreso $modeloxx)
    {
        HVsiGenIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGenIngreso "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiGenIngreso  $modeloxx
     * @return void
     */
    public function updated(VsiGenIngreso $modeloxx)
    {
        HVsiGenIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGenIngreso "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiGenIngreso  $modeloxx
     * @return void
     */
    public function deleted(VsiGenIngreso $modeloxx)
    {
        HVsiGenIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGenIngreso "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiGenIngreso  $modeloxx
     * @return void
     */
    public function restored(VsiGenIngreso $modeloxx)
    {
        HVsiGenIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGenIngreso "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiGenIngreso  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiGenIngreso $modeloxx)
    {
        HVsiGenIngreso::create($this->getLog($modeloxx));
    }
}
