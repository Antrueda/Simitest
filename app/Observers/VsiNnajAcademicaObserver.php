<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiNnajAcademica;
use App\Models\sicosocial\Pivotes\VsiNnajAcademica;

class VsiNnajAcademicaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.        
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_id'] = $modeloxx->vsi_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiNnajAcademica $modeloxx)
    {
        HVsiNnajAcademica::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajAcademica "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajAcademica  $modeloxx
     * @return void
     */
    public function updated(VsiNnajAcademica $modeloxx)
    {
        HVsiNnajAcademica::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajAcademica "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajAcademica  $modeloxx
     * @return void
     */
    public function deleted(VsiNnajAcademica $modeloxx)
    {
        HVsiNnajAcademica::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajAcademica "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajAcademica  $modeloxx
     * @return void
     */
    public function restored(VsiNnajAcademica $modeloxx)
    {
        HVsiNnajAcademica::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajAcademica "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajAcademica  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiNnajAcademica $modeloxx)
    {
        HVsiNnajAcademica::create($this->getLog($modeloxx));
    }
}
