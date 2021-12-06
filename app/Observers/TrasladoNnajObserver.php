<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\Traslado\Logs\HTrasladoNnaj;
use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;

class TrasladoNnajObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['traslado_id'] = $modeloxx->traslado_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['observaciones'] = $modeloxx->observaciones;
        $log['motivoe_id'] = $modeloxx->motivoe_id;
        $log['motivoese_id'] = $modeloxx->motivoese_id;
        $log['fechaasistencia'] = $modeloxx->fechaasistencia;
        $log['estadoasintecia'] = $modeloxx->estadoasintecia;

        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;

        /*
        'traslado_id', 'sis_nnaj_id', 
        'observaciones', 'motivoe_id','motivoese_id','fechaasistencia','estadoasintecia',
        */

    }

    public function created(TrasladoNnaj $modeloxx)
    {
        HTrasladoNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Parametro  $modeloxx
     * @return void
     */
    public function updated(TrasladoNnaj $modeloxx)
    {
        HTrasladoNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the TrasladoNnaj "deleted" event.
     *
     * @param  \App\Models\TrasladoNnaj  $modeloxx
     * @return void
     */
    public function deleted(TrasladoNnaj $modeloxx)
    {
        HTrasladoNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the TrasladoNnaj "restored" event.
     *
     * @param  \App\Models\TrasladoNnaj  $modeloxx
     * @return void
     */
    public function restored(TrasladoNnaj $modeloxx)
    {
        HTrasladoNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the TrasladoNnaj "force deleted" event.
     *
     * @param  \App\Models\TrasladoNnaj  $modeloxx
     * @return void
     */
    public function forceDeleted(TrasladoNnaj $modeloxx)
    {
        HTrasladoNnaj::create($this->getLog($modeloxx));
    }
}