<?php

namespace App\Models\sicosocial\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsiViolencia extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_tip_vio_id',
        'prm_fam_fis_id',
        'prm_fam_psi_id',
        'prm_fam_sex_id',
        'prm_fam_eco_id',
        'prm_amicol_fis_id',
        'prm_amicol_psi_id',
        'prm_amicol_sex_id',
        'prm_amicol_eco_id',
        'prm_par_fis_id',
        'prm_par_psi_id',
        'prm_par_sex_id',
        'prm_par_eco_id',
        'prm_compar_fis_id',
        'prm_compar_psi_id',
        'prm_compar_sex_id',
        'prm_compar_eco_id',
        'prm_ins_fis_id',
        'prm_ins_psi_id',
        'prm_ins_sex_id',
        'prm_ins_eco_id',
        'prm_lab_fis_id',
        'prm_lab_psi_id',
        'prm_lab_sex_id',
        'prm_lab_eco_id',
        'prm_dis_gen_id',
        'prm_dis_ori_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}