<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiDiligenc;

class FiDiligencObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['diligenc'] = $modeloxx->diligenc;
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
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
     * Handle the fi diligenc "created" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiligenc  $fiDiligenc
     * @return void
     */
    public function created(FiDiligenc $fiDiligenc)
    {
        //
    }

    /**
     * Handle the fi diligenc "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiligenc  $fiDiligenc
     * @return void
     */
    public function updated(FiDiligenc $fiDiligenc)
    {
        //
    }

    /**
     * Handle the fi diligenc "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiligenc  $fiDiligenc
     * @return void
     */
    public function deleted(FiDiligenc $fiDiligenc)
    {
        //
    }

    /**
     * Handle the fi diligenc "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiligenc  $fiDiligenc
     * @return void
     */
    public function restored(FiDiligenc $fiDiligenc)
    {
        //
    }

    /**
     * Handle the fi diligenc "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiligenc  $fiDiligenc
     * @return void
     */
    public function forceDeleted(FiDiligenc $fiDiligenc)
    {
        //
    }
}
