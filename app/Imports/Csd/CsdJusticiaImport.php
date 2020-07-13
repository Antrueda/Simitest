<?php

namespace App\Imports\Csd;

use App\Models\consulta\CsdJusticia;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdJusticiaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdJusticia([
            'csd_id'=> $row[0],
            'prm_vinculado_id'=>$row[1] == '' ? 2316 : $row[1], 
            'prm_vin_causa_id'=> $row[2]== '' ? 2316 : $row[2],
            'prm_riesgo_id'=> $row[3]== '' ? 2316 : $row[3],
            'prm_rie_causa_id'=> $row[4]== '' ? 2316 : $row[4],
            'user_crea_id'=>1,
            'prm_tipofuen_id'=>2316,
            'user_edita_id'=>1,
            'sis_esta_id'=>1
        ]);
    }
}
