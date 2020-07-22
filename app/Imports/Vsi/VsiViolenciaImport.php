<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiViolencia;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiViolenciaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        echo $row[2] . '<pre>';
        $dataxxxx = [
            'vsi_id' => $row[0],
            'prm_tip_vio_id' => $row[1],
            'prm_fam_fis_id' => $row[2],
            'prm_fam_psi_id' => $row[3],
            'prm_fam_sex_id' => $row[4],
            'prm_fam_eco_id' => $row[5],
            'prm_amicol_fis_id' => $row[6],
            'prm_amicol_psi_id' => $row[7],
            'prm_amicol_sex_id' => $row[8],
            'prm_amicol_eco_id' => $row[9],
            'prm_par_fis_id' => $row[10],
            'prm_par_psi_id' => $row[11],
            'prm_par_sex_id' => $row[12],
            'prm_par_eco_id' => $row[13],
            'prm_compar_fis_id' => $row[14],
            'prm_compar_psi_id' => $row[15],
            'prm_compar_sex_id' => $row[16],
            'prm_compar_eco_id' => $row[17],
            'prm_ins_fis_id' => $row[18],
            'prm_ins_psi_id' => $row[19],
            'prm_ins_sex_id' => $row[20],
            'prm_ins_eco_id' => $row[21],
            'prm_lab_fis_id' => $row[22],
            'prm_lab_psi_id' => $row[23],
            'prm_lab_sex_id' => $row[24],
            'prm_lab_eco_id' => $row[25],
            'prm_dis_gen_id' => $row[26],
            'prm_dis_ori_id' => $row[27],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ];
        print_r($dataxxxx);
        return new VsiViolencia($dataxxxx);
    }
}