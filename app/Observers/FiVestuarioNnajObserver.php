<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiVestuarioNnaj;
use App\Models\fichaIngreso\Logs\HFiVestuarioNnaj;

class FiVestuarioNnajObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['prm_t_pantalon_id'] = $modeloxx->prm_t_pantalon_id;
        $log['prm_t_camisa_id'] = $modeloxx->prm_t_camisa_id;
        $log['prm_t_zapato_id'] = $modeloxx->prm_t_zapato_id;
        $log['prm_sexo_etario_id'] = $modeloxx->prm_sexo_etario_id;
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

    public function created(FiVestuarioNnaj $modeloxx)
    {
        HFiVestuarioNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiVestuarioNnaj "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiVestuarioNnaj  $modeloxx
     * @return void
     */
    public function updated(FiVestuarioNnaj $modeloxx)
    {
        HFiVestuarioNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiVestuarioNnaj "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiVestuarioNnaj  $modeloxx
     * @return void
     */
    public function deleted(FiVestuarioNnaj $modeloxx)
    {
        HFiVestuarioNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiVestuarioNnaj "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiVestuarioNnaj  $modeloxx
     * @return void
     */
    public function restored(FiVestuarioNnaj $modeloxx)
    {
        HFiVestuarioNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiVestuarioNnaj "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiVestuarioNnaj  $modeloxx
     * @return void
     */
    public function forceDeleted(FiVestuarioNnaj $modeloxx)
    {
        HFiVestuarioNnaj::create($this->getLog($modeloxx));
    }
}