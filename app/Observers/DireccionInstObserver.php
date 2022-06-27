<?php

namespace App\Observers;


use App\Models\Direccionamiento\DireccionInst;
use App\Models\Direccionamiento\Logs\HDireccionInst;

class DireccionInstObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['direc_id'] = $modeloxx->direc_id;
        $log['justificacion'] = $modeloxx->justificacion;
        $log['seguimiento_id'] = $modeloxx->seguimiento_id;
        $log['sis_serv_id'] = $modeloxx->sis_serv_id;
        $log['intra_id'] = $modeloxx->intra_id;
        $log['sis_entidad_id'] = $modeloxx->sis_entidad_id;
        $log['ent_servicio_id'] = $modeloxx->ent_servicio_id;
        $log['nombre_entidad'] = $modeloxx->nombre_entidad;
        $log['prm_tipoenti_id'] = $modeloxx->prm_tipoenti_id;
        $log['inter_id'] = $modeloxx->inter_id;
        $log['no_docinter'] = $modeloxx->no_docinter;
        $log['nombreinter'] = $modeloxx->nombreinter;
        $log['telefonointer'] = $modeloxx->telefonointer;
        $log['intercargo'] = $modeloxx->intercargo;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(DireccionInst $modeloxx)
    {
        HDireccionInst::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdResidencia "updated" event.
     *
     * @param  \App\Models\consulta\DireccionInst  $modeloxx
     * @return void
     */
    public function updated(DireccionInst $modeloxx)
    {
        HDireccionInst::create($this->getLog($modeloxx));
    }

    /**
     * Handle the DireccionInst "deleted" event.
     *
     * @param  \App\Models\consulta\DireccionInst  $modeloxx
     * @return void
     */
    public function deleted(DireccionInst $modeloxx)
    {
        HDireccionInst::create($this->getLog($modeloxx));
    }

    /**
     * Handle the DireccionInst "restored" event.
     *
     * @param  \App\Models\consulta\DireccionInst  $modeloxx
     * @return void
     */
    public function restored(DireccionInst $modeloxx)
    {
        HDireccionInst::create($this->getLog($modeloxx));
    }

    /**
     * Handle the DireccionInst "force deleted" event.
     *
     * @param  \App\Models\consulta\DireccionInst  $modeloxx
     * @return void
     */
    public function forceDeleted(DireccionInst $modeloxx)
    {
        HDireccionInst::create($this->getLog($modeloxx));
    }
}