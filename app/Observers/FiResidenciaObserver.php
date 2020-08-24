<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiResidencia;
use App\Models\fichaIngreso\Logs\HFiResidencia;

class FiResidenciaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_tiene_dormir_id'] = $modeloxx->i_prm_tiene_dormir_id;
        $log['i_prm_tipo_duerme_id'] = $modeloxx->i_prm_tipo_duerme_id;
        $log['i_prm_tipo_tenencia_id'] = $modeloxx->i_prm_tipo_tenencia_id;
        $log['i_prm_tipo_direccion_id'] = $modeloxx->i_prm_tipo_direccion_id;
        $log['i_prm_zona_direccion_id'] = $modeloxx->i_prm_zona_direccion_id;
        $log['i_prm_tipo_via_id'] = $modeloxx->i_prm_tipo_via_id;
        $log['s_nombre_via'] = $modeloxx->s_nombre_via;
        $log['i_prm_alfabeto_via_id'] = $modeloxx->i_prm_alfabeto_via_id;
        $log['i_prm_tiene_bis_id'] = $modeloxx->i_prm_tiene_bis_id;
        $log['i_prm_bis_alfabeto_id'] = $modeloxx->i_prm_bis_alfabeto_id;
        $log['i_prm_cuadrante_vp_id'] = $modeloxx->i_prm_cuadrante_vp_id;
        $log['i_via_generadora'] = $modeloxx->i_via_generadora;
        $log['i_prm_alfabetico_vg_id'] = $modeloxx->i_prm_alfabetico_vg_id;
        $log['i_placa_vg'] = $modeloxx->i_placa_vg;
        $log['i_prm_cuadrante_vg_id'] = $modeloxx->i_prm_cuadrante_vg_id;
        $log['i_prm_estrato_id'] = $modeloxx->i_prm_estrato_id;
        $log['i_prm_espacio_parcha_id'] = $modeloxx->i_prm_espacio_parcha_id;
        $log['s_nombre_espacio_parcha'] = $modeloxx->s_nombre_espacio_parcha;
        $log['s_complemento'] = $modeloxx->s_complemento;
        $log['sis_localidad_id'] = $modeloxx->sis_localidad_id;
        $log['sis_upz_id'] = $modeloxx->sis_upz_id;
        $log['sis_barrio_id'] = $modeloxx->sis_barrio_id;
        $log['s_telefono_uno'] = $modeloxx->s_telefono_uno;
        $log['s_telefono_dos'] = $modeloxx->s_telefono_dos;
        $log['s_telefono_tres'] = $modeloxx->s_telefono_tres;
        $log['s_email_facebook'] = $modeloxx->s_email_facebook;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiResidencia $modeloxx)
    {
        HFiResidencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiResidencia "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiResidencia  $modeloxx
     * @return void
     */
    public function updated(FiResidencia $modeloxx)
    {
        HFiResidencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiResidencia "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiResidencia  $modeloxx
     * @return void
     */
    public function deleted(FiResidencia $modeloxx)
    {
        HFiResidencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiResidencia "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiResidencia  $modeloxx
     * @return void
     */
    public function restored(FiResidencia $modeloxx)
    {
        HFiResidencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiResidencia "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiResidencia  $modeloxx
     * @return void
     */
    public function forceDeleted(FiResidencia $modeloxx)
    {
        HFiResidencia::create($this->getLog($modeloxx));
    }
}