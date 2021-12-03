<?php

namespace App\Observers;

use App\Models\Actaencu\NnajAsis;
use App\Models\Actaencu\Logs\HNnajAsis;

class NnajAsisObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
        $log['prm_pefil_id'] = $modeloxx->prm_pefil_id;
        $log['prm_lugar_focali_id'] = $modeloxx->prm_lugar_focali_id;
        $log['prm_autorizo_id'] = $modeloxx->prm_autorizo_id;
        $log['observaciones'] = $modeloxx->observaciones;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(NnajAsis $modeloxx)
    {
        HNnajAsis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\NnajAsis  $modeloxx
     * @return void
     */
    public function updated(NnajAsis $modeloxx)
    {
        HNnajAsis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajAsis "deleted" event.
     *
     * @param  \App\Models\Actaencu\NnajAsis  $modeloxx
     * @return void
     */
    public function deleted(NnajAsis $modeloxx)
    {
        HNnajAsis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajAsis "restored" event.
     *
     * @param  \App\Models\Actaencu\NnajAsis  $modeloxx
     * @return void
     */
    public function restored(NnajAsis $modeloxx)
    {
        HNnajAsis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajAsis "force deleted" event.
     *
     * @param  \App\Models\Actaencu\NnajAsis  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajAsis $modeloxx)
    {
        HNnajAsis::create($this->getLog($modeloxx));
    }
}