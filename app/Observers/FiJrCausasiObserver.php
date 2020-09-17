<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiJrCausassi;

use App\Models\fichaIngreso\Logs\HFiJrCausasi;
use App\Models\fichaIngreso\Logs\HFiJrCausassi;

class FiJrCausasiObserver
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
    public function created(FiJrCausassi $modeloxx)
    {
        HFiJrCausassi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the fi jr causa "updated" event.
     *
     * @param  \App\FiJrCausa  $modeloxx
     * @return void
     */
    public function updated(FiJrCausassi $modeloxx)
    {
       HFiJrCausassi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the fi jr causa "deleted" event.
     *
     * @param  \App\FiJrCausassi  $modeloxx
     * @return void
     */
    public function deleted(FiJrCausassi $modeloxx)
    {
       HFiJrCausassi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the fi jr causa "restored" event.
     *
     * @param  \App\FiJrCausassi  $modeloxx
     * @return void
     */
    public function restored(FiJrCausassi $modeloxx)
    {
       HFiJrCausassi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the fi jr causa "force deleted" event.
     *
     * @param  \App\FiJrCausassi  $modeloxx
     * @return void
     */
    public function forceDeleted(FiJrCausassi $modeloxx)
    {
       HFiJrCausassi::create($this->getLog($modeloxx));
    }
}
