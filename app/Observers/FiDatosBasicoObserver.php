<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\Logs\HFiDatosBasico;

class FiDatosBasicoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_primer_nombre'] = $modeloxx->s_primer_nombre;
        $log['s_segundo_nombre'] = $modeloxx->s_segundo_nombre;
        $log['s_primer_apellido'] = $modeloxx->s_primer_apellido;
        $log['s_segundo_apellido'] = $modeloxx->s_segundo_apellido;
        $log['s_apodo'] = $modeloxx->s_apodo;
        $log['nnaj_nfamili_id'] = $modeloxx->nnaj_nfamili_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['prm_tipoblaci_id'] = $modeloxx->prm_tipoblaci_id;
        $log['prm_vestimenta_id'] = $modeloxx->prm_vestimenta_id;
        $log['sis_docfuen_id'] = $modeloxx->sis_docfuen_id;
        $log['deleted_at'] = $modeloxx->deleted_at;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDatosBasico "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiDatosBasico  $modeloxx
     * @return void
     */
    public function updated(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDatosBasico "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDatosBasico  $modeloxx
     * @return void
     */
    public function deleted(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDatosBasico "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiDatosBasico  $modeloxx
     * @return void
     */
    public function restored(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDatosBasico "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDatosBasico  $modeloxx
     * @return void
     */
    public function forceDeleted(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }
}
