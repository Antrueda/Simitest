<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiCsdvsi;

class FiCsdvsiObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['csd_id'] = $modeloxx->csd_id;
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
        // campos por defecto, no borrar.
        $log['deleted_at'] = $modeloxx->deleted_at;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    /**
     * Handle the fi csdvsi "created" event.
     *
     * @param  \App\Models\fichaIngreso\FiCsdvsi  $fiCsdvsi
     * @return void
     */
    public function created(FiCsdvsi $fiCsdvsi)
    {
        //ddd($fiCsdvsi->getDirty());
    }

    /**
     * Handle the fi csdvsi "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiCsdvsi  $fiCsdvsi
     * @return void
     */
    public function updated(FiCsdvsi $fiCsdvsi)
    {
        ddd($fiCsdvsi->getDirty());
    }

    /**
     * Handle the fi csdvsi "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiCsdvsi  $fiCsdvsi
     * @return void
     */
    public function deleted(FiCsdvsi $fiCsdvsi)
    {
        //
    }

    /**
     * Handle the fi csdvsi "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiCsdvsi  $fiCsdvsi
     * @return void
     */
    public function restored(FiCsdvsi $fiCsdvsi)
    {
        //
    }

    /**
     * Handle the fi csdvsi "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiCsdvsi  $fiCsdvsi
     * @return void
     */
    public function forceDeleted(FiCsdvsi $fiCsdvsi)
    {
        //
    }
}
