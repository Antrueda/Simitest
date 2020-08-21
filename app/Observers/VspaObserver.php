<?php

namespace App\Observers;

use App\Models\Salud\Mitigacion\Logs\HVspa;
use App\Models\Salud\Mitigacion\Vspa;

class VspaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['prm_upi_id'] = $modeloxx->prm_upi_id;
        $log['fecha'] = $modeloxx->fecha;
        $log['prm_valoracion_id'] = $modeloxx->prm_valoracion_id;
        $log['prm_icbf_id'] = $modeloxx->prm_icbf_id;
        $log['previos'] = $modeloxx->previos;
        $log['prm_gestante_id'] = $modeloxx->prm_gestante_id;
        $log['semanas_gestacion'] = $modeloxx->semanas_gestacion;
        $log['prm_escolar_id'] = $modeloxx->prm_escolar_id;
        $log['prm_ingresos_id'] = $modeloxx->prm_ingresos_id;
        $log['prm_modalidad_id'] = $modeloxx->prm_modalidad_id;
        $log['prm_acude_id'] = $modeloxx->prm_acude_id;
        $log['prm_sitio_id'] = $modeloxx->prm_sitio_id;
        $log['prm_probado_id'] = $modeloxx->prm_probado_id;
        $log['prm_cantidad_id'] = $modeloxx->prm_cantidad_id;
        $log['prm_inyectadas_id'] = $modeloxx->prm_inyectadas_id;
        $log['edad'] = $modeloxx->edad;
        $log['prm_dificultad_id'] = $modeloxx->prm_dificultad_id;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['prm_obtiene_id'] = $modeloxx->prm_obtiene_id;
        $log['donde'] = $modeloxx->donde;
        $log['precio'] = $modeloxx->precio;
        $log['cantidad'] = $modeloxx->cantidad;
        $log['prm_medida_id'] = $modeloxx->prm_medida_id;
        $log['prm_frecuencia_id'] = $modeloxx->prm_frecuencia_id;
        $log['prm_costumbre_id'] = $modeloxx->prm_costumbre_id;
        $log['porque'] = $modeloxx->porque;
        $log['sustancia'] = $modeloxx->sustancia;
        $log['prm_comparte_id'] = $modeloxx->prm_comparte_id;
        $log['porque_comparte'] = $modeloxx->porque_comparte;
        $log['prm_prueba_id'] = $modeloxx->prm_prueba_id;
        $log['porque_prueba'] = $modeloxx->porque_prueba;
        $log['observaciones'] = $modeloxx->observaciones;
        $log['obs_generales'] = $modeloxx->obs_generales;
        $log['obs_generales_dos'] = $modeloxx->obs_generales_dos;
        $log['user_doc1_id'] = $modeloxx->user_doc1_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(Vspa $modeloxx)
    {
        HVspa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Vspa "updated" event.
     *
     * @param  \App\Models\Salud\Mitigacion\Vspa  $modeloxx
     * @return void
     */
    public function updated(Vspa $modeloxx)
    {
        HVspa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Vspa "deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\Vspa  $modeloxx
     * @return void
     */
    public function deleted(Vspa $modeloxx)
    {
        HVspa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Vspa "restored" event.
     *
     * @param  \App\Models\Salud\Mitigacion\Vspa  $modeloxx
     * @return void
     */
    public function restored(Vspa $modeloxx)
    {
        HVspa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Vspa "force deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\Vspa  $modeloxx
     * @return void
     */
    public function forceDeleted(Vspa $modeloxx)
    {
        HVspa::create($this->getLog($modeloxx));
    }
}