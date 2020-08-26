<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisTitulo;
use App\Models\Sistema\SisTitulo;

class SisTituloObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_titulo'] = $modeloxx->s_titulo;
        $log['s_tooltip'] = $modeloxx->s_tooltip;
        $log['i_prm_tletra_id'] = $modeloxx->i_prm_tletra_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisTitulo $modeloxx)
    {
        HSisTitulo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTitulo "updated" event.
     *
     * @param  \App\Models\Sistema\SisTitulo  $modeloxx
     * @return void
     */
    public function updated(SisTitulo $modeloxx)
    {
        HSisTitulo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTitulo "deleted" event.
     *
     * @param  \App\Models\Sistema\SisTitulo  $modeloxx
     * @return void
     */
    public function deleted(SisTitulo $modeloxx)
    {
        HSisTitulo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTitulo "restored" event.
     *
     * @param  \App\Models\Sistema\SisTitulo  $modeloxx
     * @return void
     */
    public function restored(SisTitulo $modeloxx)
    {
        HSisTitulo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTitulo "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisTitulo  $modeloxx
     * @return void
     */
    public function forceDeleted(SisTitulo $modeloxx)
    {
        HSisTitulo::create($this->getLog($modeloxx));
    }
}