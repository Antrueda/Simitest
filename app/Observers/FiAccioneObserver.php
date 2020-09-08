<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiAccione;
use App\Models\fichaIngreso\Logs\HFiAccione;

class FiAccioneObserver
{

    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_actividadestl_id'] = $modeloxx->fi_actividadestl_id;
        $log['prm_accione_id'] = $modeloxx->prm_accione_id;
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
     * Handle the fi accione "created" event.
     *
     * @param  \App\Models\fichaIngreso\FiAccione  $fiAccione
     * @return void
     */
    public function created(FiAccione $fiAccione)
    {
        HFiAccione::create($this->getLog($fiAccione));
    }

    /**
     * Handle the fi accione "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiAccione  $fiAccione
     * @return void
     */
    public function updated(FiAccione $fiAccione)
    {
        HFiAccione::create($this->getLog($fiAccione));
    }

    /**
     * Handle the fi accione "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiAccione  $fiAccione
     * @return void
     */
    public function deleted(FiAccione $fiAccione)
    {
        HFiAccione::create($this->getLog($fiAccione));
    }

    /**
     * Handle the fi accione "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiAccione  $fiAccione
     * @return void
     */
    public function restored(FiAccione $fiAccione)
    {
        HFiAccione::create($this->getLog($fiAccione));
    }

    /**
     * Handle the fi accione "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiAccione  $fiAccione
     * @return void
     */
    public function forceDeleted(FiAccione $fiAccione)
    {
        HFiAccione::create($this->getLog($fiAccione));
    }
}
