<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdDinfamAntecedente;
use App\Models\consulta\pivotes\Logs\HCsdDinfamAntecedente;

class CsdDinfamAntecedenteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['csd_dinfamiliar_id'] = $modeloxx->csd_dinfamiliar_id;
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

    public function created(CsdDinfamAntecedente $modeloxx)
    {
        HCsdDinfamAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamAntecedente "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamAntecedente  $modeloxx
     * @return void
     */
    public function updated(CsdDinfamAntecedente $modeloxx)
    {
        HCsdDinfamAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamAntecedente "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamAntecedente  $modeloxx
     * @return void
     */
    public function deleted(CsdDinfamAntecedente $modeloxx)
    {
        HCsdDinfamAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamAntecedente "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamAntecedente  $modeloxx
     * @return void
     */
    public function restored(CsdDinfamAntecedente $modeloxx)
    {
        HCsdDinfamAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamAntecedente "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamAntecedente  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdDinfamAntecedente $modeloxx)
    {
        HCsdDinfamAntecedente::create($this->getLog($modeloxx));
    }
}