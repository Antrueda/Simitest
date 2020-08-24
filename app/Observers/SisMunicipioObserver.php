<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisMunicipio;
use App\Models\sistema\SisMunicipio;

class SisMunicipioObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_departamento_id'] = $modeloxx->sis_departamento_id;
        $log['s_municipio'] = $modeloxx->s_municipio;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisMunicipio $modeloxx)
    {
        HSisMunicipio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisMunicipio "updated" event.
     *
     * @param  \App\Models\sistema\SisMunicipio  $modeloxx
     * @return void
     */
    public function updated(SisMunicipio $modeloxx)
    {
        HSisMunicipio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisMunicipio "deleted" event.
     *
     * @param  \App\Models\sistema\SisMunicipio  $modeloxx
     * @return void
     */
    public function deleted(SisMunicipio $modeloxx)
    {
        HSisMunicipio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisMunicipio "restored" event.
     *
     * @param  \App\Models\sistema\SisMunicipio  $modeloxx
     * @return void
     */
    public function restored(SisMunicipio $modeloxx)
    {
        HSisMunicipio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisMunicipio "force deleted" event.
     *
     * @param  \App\Models\sistema\SisMunicipio  $modeloxx
     * @return void
     */
    public function forceDeleted(SisMunicipio $modeloxx)
    {
        HSisMunicipio::create($this->getLog($modeloxx));
    }
}