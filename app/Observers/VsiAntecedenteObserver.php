<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiAntecedente;
use App\Models\sicosocial\VsiAntecedente;

class VsiAntecedenteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['descripcion'] = $modeloxx->descripcion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiAntecedente $modeloxx)
    {
        HVsiAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiAntecedente "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiAntecedente  $modeloxx
     * @return void
     */
    public function updated(VsiAntecedente $modeloxx)
    {
        HVsiAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiAntecedente "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiAntecedente  $modeloxx
     * @return void
     */
    public function deleted(VsiAntecedente $modeloxx)
    {
        HVsiAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiAntecedente "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiAntecedente  $modeloxx
     * @return void
     */
    public function restored(VsiAntecedente $modeloxx)
    {
        HVsiAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiAntecedente "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiAntecedente  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiAntecedente $modeloxx)
    {
        HVsiAntecedente::create($this->getLog($modeloxx));
    }
}
