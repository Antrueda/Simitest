<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\Traslado\Logs\HTraslado;
use App\Models\Acciones\Grupales\Traslado\Traslado;



class TrasladoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fecha'] = $modeloxx->fecha;
        $log['prm_upi_id'] = $modeloxx->prm_upi_id;
        $log['observaciones'] = $modeloxx->observaciones;
        $log['tipotras_id'] = $modeloxx->tipotras_id;
        $log['trasladototal'] = $modeloxx->trasladototal;
        $log['respone_id'] = $modeloxx->respone_id;
        $log['responr_id'] = $modeloxx->responr_id;
        $log['prm_trasupi_id'] = $modeloxx->prm_trasupi_id;
        $log['prm_serv_id'] = $modeloxx->prm_serv_id;
        $log['remision_id'] = $modeloxx->remision_id;
        $log['user_doc'] = $modeloxx->user_doc;
        $log['cuid_doc'] = $modeloxx->cuid_doc;
        $log['auxe_doc'] = $modeloxx->auxe_doc;
        $log['doce_doc'] = $modeloxx->doce_doc;
        $log['psico_doc'] = $modeloxx->psico_doc;
        $log['auxil_doc'] = $modeloxx->psico_doc;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(Traslado $modeloxx)
    {
        HTraslado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Parametro  $modeloxx
     * @return void
     */
    public function updated(Traslado $modeloxx)
    {
        HTraslado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Traslado "deleted" event.
     *
     * @param  \App\Models\Traslado  $modeloxx
     * @return void
     */
    public function deleted(Traslado $modeloxx)
    {
        HTraslado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Traslado "restored" event.
     *
     * @param  \App\Models\Traslado  $modeloxx
     * @return void
     */
    public function restored(Traslado $modeloxx)
    {
        HTraslado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Traslado "force deleted" event.
     *
     * @param  \App\Models\Traslado  $modeloxx
     * @return void
     */
    public function forceDeleted(Traslado $modeloxx)
    {
        HTraslado::create($this->getLog($modeloxx));
    }
}