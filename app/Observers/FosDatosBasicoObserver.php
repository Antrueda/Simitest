<?php

namespace App\Observers;

use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\fichaobservacion\Logs\HFosDatosBasico;

class FosDatosBasicoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
        $log['d_fecha_diligencia'] = $modeloxx->d_fecha_diligencia;
        $log['area_id'] = $modeloxx->area_id;
        $log['fos_tse_id'] = $modeloxx->fos_tse_id;
        $log['sis_entidad_id'] = $modeloxx->sis_entidad_id;
        $log['fos_stse_id'] = $modeloxx->fos_stse_id;
        $log['s_observacion'] = $modeloxx->s_observacion;
        $log['fi_compfami_id'] = $modeloxx->fi_compfami_id;
        $log['i_responsable'] = $modeloxx->i_responsable;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FosDatosBasico $modeloxx)
    {
        HFosDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosDatosBasico "updated" event.
     *
     * @param  \App\Models\fichaobservacion\FosDatosBasico  $modeloxx
     * @return void
     */
    public function updated(FosDatosBasico $modeloxx)
    {
        HFosDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosDatosBasico "deleted" event.
     *
     * @param  \App\Models\fichaobservacion\FosDatosBasico  $modeloxx
     * @return void
     */
    public function deleted(FosDatosBasico $modeloxx)
    {
        HFosDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosDatosBasico "restored" event.
     *
     * @param  \App\Models\fichaobservacion\FosDatosBasico  $modeloxx
     * @return void
     */
    public function restored(FosDatosBasico $modeloxx)
    {
        HFosDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FosDatosBasico "force deleted" event.
     *
     * @param  \App\Models\fichaobservacion\FosDatosBasico  $modeloxx
     * @return void
     */
    public function forceDeleted(FosDatosBasico $modeloxx)
    {
        HFosDatosBasico::create($this->getLog($modeloxx));
    }
}
