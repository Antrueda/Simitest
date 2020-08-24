<?php

namespace App\Observers;

use App\Models\consulta\CsdResidencia;
use App\Models\consulta\Logs\HCsdResidencia;

class CsdResidenciaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['prm_tipo_id'] = $modeloxx->prm_tipo_id;
        $log['prm_es_id'] = $modeloxx->prm_es_id;
        $log['prm_dir_tipo_id'] = $modeloxx->prm_dir_tipo_id;
        $log['prm_dir_zona_id'] = $modeloxx->prm_dir_zona_id;
        $log['prm_dir_via_id'] = $modeloxx->prm_dir_via_id;
        $log['dir_nombre'] = $modeloxx->dir_nombre;
        $log['prm_dir_alfavp_id'] = $modeloxx->prm_dir_alfavp_id;
        $log['prm_dir_bis_id'] = $modeloxx->prm_dir_bis_id;
        $log['prm_dir_alfabis_id'] = $modeloxx->prm_dir_alfabis_id;
        $log['prm_dir_cuadrantevp_id'] = $modeloxx->prm_dir_cuadrantevp_id;
        $log['dir_generadora'] = $modeloxx->dir_generadora;
        $log['prm_dir_alfavg_id'] = $modeloxx->prm_dir_alfavg_id;
        $log['dir_placa'] = $modeloxx->dir_placa;
        $log['prm_dir_cuadrantevg_id'] = $modeloxx->prm_dir_cuadrantevg_id;
        $log['prm_estrato_id'] = $modeloxx->prm_estrato_id;
        $log['dir_complemento'] = $modeloxx->dir_complemento;
        $log['sis_upzbarri_id'] = $modeloxx->sis_upzbarri_id;
        $log['telefono_uno'] = $modeloxx->telefono_uno;
        $log['telefono_dos'] = $modeloxx->telefono_dos;
        $log['telefono_tres'] = $modeloxx->telefono_tres;
        $log['email'] = $modeloxx->email;
        $log['prm_piso_id'] = $modeloxx->prm_piso_id;
        $log['prm_muro_id'] = $modeloxx->prm_muro_id;
        $log['prm_higiene_id'] = $modeloxx->prm_higiene_id;
        $log['prm_ventilacion_id'] = $modeloxx->prm_ventilacion_id;
        $log['prm_iluminacion_id'] = $modeloxx->prm_iluminacion_id;
        $log['prm_orden_id'] = $modeloxx->prm_orden_id;
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

    public function created(CsdResidencia $modeloxx)
    {
        HCsdResidencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdResidencia "updated" event.
     *
     * @param  \App\Models\consulta\CsdResidencia  $modeloxx
     * @return void
     */
    public function updated(CsdResidencia $modeloxx)
    {
        HCsdResidencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdResidencia "deleted" event.
     *
     * @param  \App\Models\consulta\CsdResidencia  $modeloxx
     * @return void
     */
    public function deleted(CsdResidencia $modeloxx)
    {
        HCsdResidencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdResidencia "restored" event.
     *
     * @param  \App\Models\consulta\CsdResidencia  $modeloxx
     * @return void
     */
    public function restored(CsdResidencia $modeloxx)
    {
        HCsdResidencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdResidencia "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdResidencia  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdResidencia $modeloxx)
    {
        HCsdResidencia::create($this->getLog($modeloxx));
    }
}