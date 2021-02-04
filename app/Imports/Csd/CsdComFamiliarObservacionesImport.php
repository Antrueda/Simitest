<?php

namespace App\Imports\Csd;

use App\Models\consulta\CsdComfamob;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdComfamobImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdComfamob([
            'csd_id'=> $row[0],
            'observaciones'=> $row[1],
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'sis_esta_id'=> 1,
            'prm_tipofuen_id'=> 2316
        ]);
    }
}
