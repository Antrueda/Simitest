<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiSalud;
use App\Models\fichaIngreso\Logs\HFiSalud;

class FiSaludObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_regimen_salud_id'] = $modeloxx->i_prm_regimen_salud_id;
        $log['sis_entidad_salud_id'] = $modeloxx->sis_entidad_salud_id;
        $log['i_prm_tiene_sisben_id'] = $modeloxx->i_prm_tiene_sisben_id;
        $log['d_puntaje_sisben'] = $modeloxx->d_puntaje_sisben;
        $log['i_prm_tiene_discapacidad_id'] = $modeloxx->i_prm_tiene_discapacidad_id;
        $log['i_prm_tipo_discapacidad_id'] = $modeloxx->i_prm_tipo_discapacidad_id;
        $log['i_prm_tiene_cert_discapacidad_id'] = $modeloxx->i_prm_tiene_cert_discapacidad_id;
        $log['i_prm_disc_perm_independencia_id'] = $modeloxx->i_prm_disc_perm_independencia_id;
        $log['i_prm_esta_gestando_id'] = $modeloxx->i_prm_esta_gestando_id;
        $log['i_numero_semanas'] = $modeloxx->i_numero_semanas;
        $log['i_prm_esta_lactando_id'] = $modeloxx->i_prm_esta_lactando_id;
        $log['i_numero_meses'] = $modeloxx->i_numero_meses;
        $log['i_prm_tiene_problema_salud_id'] = $modeloxx->i_prm_tiene_problema_salud_id;
        $log['i_prm_problema_salud_id'] = $modeloxx->i_prm_problema_salud_id;
        $log['i_prm_consume_medicamentos_id'] = $modeloxx->i_prm_consume_medicamentos_id;
        $log['s_cual_medicamento'] = $modeloxx->s_cual_medicamento;
        $log['i_prm_tiene_hijos_id'] = $modeloxx->i_prm_tiene_hijos_id;
        $log['i_numero_hijos'] = $modeloxx->i_numero_hijos;
        $log['i_prm_conoce_metodos_id'] = $modeloxx->i_prm_conoce_metodos_id;
        $log['i_prm_usa_metodos_id'] = $modeloxx->i_prm_usa_metodos_id;
        $log['i_prm_cual_metodo_id'] = $modeloxx->i_prm_cual_metodo_id;
        $log['i_prm_uso_voluntario_id'] = $modeloxx->i_prm_uso_voluntario_id;
        $log['i_comidas_diarias'] = $modeloxx->i_comidas_diarias;
        $log['i_prm_razon_no_cinco_comidas_id'] = $modeloxx->i_prm_razon_no_cinco_comidas_id;
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

    public function created(FiSalud $modeloxx)
    {
        HFiSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSalud "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiSalud  $modeloxx
     * @return void
     */
    public function updated(FiSalud $modeloxx)
    {
        HFiSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSalud "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSalud  $modeloxx
     * @return void
     */
    public function deleted(FiSalud $modeloxx)
    {
        HFiSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSalud "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiSalud  $modeloxx
     * @return void
     */
    public function restored(FiSalud $modeloxx)
    {
        HFiSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSalud "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSalud  $modeloxx
     * @return void
     */
    public function forceDeleted(FiSalud $modeloxx)
    {
        HFiSalud::create($this->getLog($modeloxx));
    }
}