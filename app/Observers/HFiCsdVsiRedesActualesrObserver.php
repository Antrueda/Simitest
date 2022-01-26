<?php

namespace App\Observers;

use App\HFiCsdVsiRedesActuales;

class HFiCsdVsiRedesActualesrObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['i_prm_tipo_red_id'] = $modeloxx->i_prm_tipo_red_id;
        $log['s_nombre_persona'] = $modeloxx->s_nombre_persona;
        $log['s_servicio'] = $modeloxx->s_servicio;
        $log['s_telefono'] = $modeloxx->s_telefono;
        $log['s_direccion'] = $modeloxx->s_direccion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }
    public function created(HFiCsdVsiRedesActuales $modeloxx)
    {
        HFiCsdVsiRedesActuales::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi redes actuales "updated" event.
     *
     * @param  \App\HFiCsdVsiRedesActuales  $modeloxx
     * @return void
     */
    public function updated(HFiCsdVsiRedesActuales $modeloxx)
    {
        HFiCsdVsiRedesActuales::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi redes actuales "deleted" event.
     *
     * @param  \App\HFiCsdVsiRedesActuales  $modeloxx
     * @return void
     */
    public function deleted(HFiCsdVsiRedesActuales $modeloxx)
    {
        HFiCsdVsiRedesActuales::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi redes actuales "restored" event.
     *
     * @param  \App\HFiCsdVsiRedesActuales  $modeloxx
     * @return void
     */
    public function restored(HFiCsdVsiRedesActuales $modeloxx)
    {
        HFiCsdVsiRedesActuales::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi redes actuales "force deleted" event.
     *
     * @param  \App\HFiCsdVsiRedesActuales  $modeloxx
     * @return void
     */
    public function forceDeleted(HFiCsdVsiRedesActuales $modeloxx)
    {
        HFiCsdVsiRedesActuales::create($this->getLog($modeloxx));
    }
}
