<?php

namespace App\Observers;



use App\Models\fichaIngreso\FiJrCausamo;
use App\Models\fichaIngreso\Logs\HFiJrCausamo;

class FiJrCausamoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['fi_justrest_id'] = $modeloxx->fi_justrest_id;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }
    /**
     * Handle the fi jr causa "created" event.
     *
     * @param  \App\FiJrCausa  $modeloxx
     * @return void
     */
    public function created(FiJrCausamo $modeloxx)
    {
        HFiJrCausamo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the fi jr causa "updated" event.
     *
     * @param  \App\FiJrCausa  $modeloxx
     * @return void
     */
    public function updated(FiJrCausamo $modeloxx)
    {
       HFiJrCausamo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the fi jr causa "deleted" event.
     *
     * @param  \App\FiJrCausa  $modeloxx
     * @return void
     */
    public function deleted(FiJrCausamo $modeloxx)
    {
       HFiJrCausamo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the fi jr causa "restored" event.
     *
     * @param  \App\FiJrCausa  $modeloxx
     * @return void
     */
    public function restored(FiJrCausamo $modeloxx)
    {
       HFiJrCausamo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the fi jr causa "force deleted" event.
     *
     * @param  \App\FiJrCausa  $modeloxx
     * @return void
     */
    public function forceDeleted(FiJrCausamo $modeloxx)
    {
       HFiJrCausamo::create($this->getLog($modeloxx));
    }
}
