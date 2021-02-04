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
        $log['prm_regisalu_id'] = $modeloxx->prm_regisalu_id;
        $log['sis_entidad_salud_id'] = $modeloxx->sis_entidad_salud_id;
        $log['prm_tiensisb_id'] = $modeloxx->prm_tiensisb_id;
        $log['d_puntaje_sisben'] = $modeloxx->d_puntaje_sisben;
        $log['prm_tiendisc_id'] = $modeloxx->prm_tiendisc_id;
        $log['prm_tipodisca_id'] = $modeloxx->prm_tipodisca_id;
        $log['prm_tiecedis_id'] = $modeloxx->prm_tiecedis_id;
        $log['prm_dispeind_id'] = $modeloxx->prm_dispeind_id;
        $log['prm_estagest_id'] = $modeloxx->prm_estagest_id;
        $log['i_numero_semanas'] = $modeloxx->i_numero_semanas;
        $log['prm_estalact_id'] = $modeloxx->prm_estalact_id;
        $log['i_numero_meses'] = $modeloxx->i_numero_meses;
        $log['prm_tieprsal_id'] = $modeloxx->prm_tieprsal_id;
        $log['prm_probsalu_id'] = $modeloxx->prm_probsalu_id;
        $log['prm_consmedi_id'] = $modeloxx->prm_consmedi_id;
        $log['s_cual_medicamento'] = $modeloxx->s_cual_medicamento;
        $log['prm_tienhijo_id'] = $modeloxx->prm_tienhijo_id;
        $log['i_numero_hijos'] = $modeloxx->i_numero_hijos;
        $log['prm_conometo_id'] = $modeloxx->prm_conometo_id;
        $log['prm_usametod_id'] = $modeloxx->prm_usametod_id;
        $log['prm_cualmeto_id'] = $modeloxx->prm_cualmeto_id;
        $log['prm_usovolun_id'] = $modeloxx->prm_usovolun_id;
        $log['i_comidas_diarias'] = $modeloxx->i_comidas_diarias;
        $log['prm_razcicom_id'] = $modeloxx->prm_razcicom_id;
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