<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdNnajEspecial;
use App\Models\consulta\pivotes\Logs\HCsdNnajEspecial;

class CsdNnajEspecialObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['csd_id'] = $modeloxx->csd_id;
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

    public function created(CsdNnajEspecial $modeloxx)
    {
        HCsdNnajEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdNnajEspecial "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdNnajEspecial  $modeloxx
     * @return void
     */
    public function updated(CsdNnajEspecial $modeloxx)
    {
        HCsdNnajEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdNnajEspecial "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdNnajEspecial  $modeloxx
     * @return void
     */
    public function deleted(CsdNnajEspecial $modeloxx)
    {
        HCsdNnajEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdNnajEspecial "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdNnajEspecial  $modeloxx
     * @return void
     */
    public function restored(CsdNnajEspecial $modeloxx)
    {
        HCsdNnajEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdNnajEspecial "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdNnajEspecial  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdNnajEspecial $modeloxx)
    {
        HCsdNnajEspecial::create($this->getLog($modeloxx));
    }
}