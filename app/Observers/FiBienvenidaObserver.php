<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiBienvenida;
use App\Models\fichaIngreso\Logs\HFiBienvenida;

class FiBienvenidaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_quiere_entrar_id'] = $modeloxx->i_prm_quiere_entrar_id;
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
        $log['i_prm_servicio_id'] = $modeloxx->i_prm_servicio_id;
        $log['s_porque_quiere_entrar'] = $modeloxx->s_porque_quiere_entrar;
        $log['s_que_gustaria_hacer'] = $modeloxx->s_que_gustaria_hacer;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiBienvenida $modeloxx)
    {
        HFiBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiBienvenida "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiBienvenida  $modeloxx
     * @return void
     */
    public function updated(FiBienvenida $modeloxx)
    {
        HFiBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiBienvenida "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiBienvenida  $modeloxx
     * @return void
     */
    public function deleted(FiBienvenida $modeloxx)
    {
        HFiBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiBienvenida "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiBienvenida  $modeloxx
     * @return void
     */
    public function restored(FiBienvenida $modeloxx)
    {
        HFiBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiBienvenida "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiBienvenida  $modeloxx
     * @return void
     */
    public function forceDeleted(FiBienvenida $modeloxx)
    {
        HFiBienvenida::create($this->getLog($modeloxx));
    }
}