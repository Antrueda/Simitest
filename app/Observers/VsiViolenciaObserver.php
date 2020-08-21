<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiViolencia;
use App\Models\sicosocial\VsiViolencia;

class VsiViolenciaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_tip_vio_id'] = $modeloxx->prm_tip_vio_id;
        $log['prm_fam_fis_id'] = $modeloxx->prm_fam_fis_id;
        $log['prm_fam_psi_id'] = $modeloxx->prm_fam_psi_id;
        $log['prm_fam_sex_id'] = $modeloxx->prm_fam_sex_id;
        $log['prm_fam_eco_id'] = $modeloxx->prm_fam_eco_id;
        $log['prm_amicol_fis_id'] = $modeloxx->prm_amicol_fis_id;
        $log['prm_amicol_psi_id'] = $modeloxx->prm_amicol_psi_id;
        $log['prm_amicol_sex_id'] = $modeloxx->prm_amicol_sex_id;
        $log['prm_amicol_eco_id'] = $modeloxx->prm_amicol_eco_id;
        $log['prm_par_fis_id'] = $modeloxx->prm_par_fis_id;
        $log['prm_par_psi_id'] = $modeloxx->prm_par_psi_id;
        $log['prm_par_sex_id'] = $modeloxx->prm_par_sex_id;
        $log['prm_par_eco_id'] = $modeloxx->prm_par_eco_id;
        $log['prm_compar_fis_id'] = $modeloxx->prm_compar_fis_id;
        $log['prm_compar_psi_id'] = $modeloxx->prm_compar_psi_id;
        $log['prm_compar_sex_id'] = $modeloxx->prm_compar_sex_id;
        $log['prm_compar_eco_id'] = $modeloxx->prm_compar_eco_id;
        $log['prm_ins_fis_id'] = $modeloxx->prm_ins_fis_id;
        $log['prm_ins_psi_id'] = $modeloxx->prm_ins_psi_id;
        $log['prm_ins_sex_id'] = $modeloxx->prm_ins_sex_id;
        $log['prm_ins_eco_id'] = $modeloxx->prm_ins_eco_id;
        $log['prm_lab_fis_id'] = $modeloxx->prm_lab_fis_id;
        $log['prm_lab_psi_id'] = $modeloxx->prm_lab_psi_id;
        $log['prm_lab_sex_id'] = $modeloxx->prm_lab_sex_id;
        $log['prm_lab_eco_id'] = $modeloxx->prm_lab_eco_id;
        $log['prm_dis_gen_id'] = $modeloxx->prm_dis_gen_id;
        $log['prm_dis_ori_id'] = $modeloxx->prm_dis_ori_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiViolencia $modeloxx)
    {
        HVsiViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiViolencia "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiViolencia  $modeloxx
     * @return void
     */
    public function updated(VsiViolencia $modeloxx)
    {
        HVsiViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiViolencia "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiViolencia  $modeloxx
     * @return void
     */
    public function deleted(VsiViolencia $modeloxx)
    {
        HVsiViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiViolencia "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiViolencia  $modeloxx
     * @return void
     */
    public function restored(VsiViolencia $modeloxx)
    {
        HVsiViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiViolencia "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiViolencia  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiViolencia $modeloxx)
    {
        HVsiViolencia::create($this->getLog($modeloxx));
    }
}