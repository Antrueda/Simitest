<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\Logs\HAgActividad;

class AgActividadObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['d_registro'] = $modeloxx->d_registro;
        $log['area_id'] = $modeloxx->area_id;
        $log['sis_deporigen_id'] = $modeloxx->sis_deporigen_id;
        $log['sis_depdestino_id'] = $modeloxx->sis_depdestino_id;
        $log['ag_tema_id'] = $modeloxx->ag_tema_id;
        $log['i_prm_lugar_id'] = $modeloxx->i_prm_lugar_id;
        $log['ag_taller_id'] = $modeloxx->ag_taller_id;
        $log['ag_sttema_id'] = $modeloxx->ag_sttema_id;
        $log['i_prm_dirig_id'] = $modeloxx->i_prm_dirig_id;
        $log['s_prm_espac'] = $modeloxx->s_prm_espac;

        $log['s_introduc'] = $modeloxx->s_introduc;
        $log['s_justific'] = $modeloxx->s_justific;
        $log['s_objetivo'] = $modeloxx->s_objetivo;
        $log['s_metodolo'] = $modeloxx->s_metodolo;
        $log['s_categori'] = $modeloxx->s_categori;
        $log['s_contenid'] = $modeloxx->s_contenid;
        $log['s_estrateg'] = $modeloxx->s_estrateg;
        $log['s_resultad'] = $modeloxx->s_resultad;
        $log['s_evaluaci'] = $modeloxx->s_evaluaci;
        $log['s_observac'] = $modeloxx->s_observac;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgActividad $modeloxx)
    {
        HAgActividad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the HAgActividad "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\HAgActividad  $modeloxx
     * @return void
     */
    public function updated(AgActividad $modeloxx)
    {
        HAgActividad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the HAgActividad "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\HAgActividad  $modeloxx
     * @return void
     */
    public function deleted(AgActividad $modeloxx)
    {
        HAgActividad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the HAgActividad "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\HAgActividad  $modeloxx
     * @return void
     */
    public function restored(AgActividad $modeloxx)
    {
        HAgActividad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the HAgActividad "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\HAgActividad  $modeloxx
     * @return void
     */
    public function forceDeleted(AgActividad $modeloxx)
    {
        HAgActividad::create($this->getLog($modeloxx));
    }
}
