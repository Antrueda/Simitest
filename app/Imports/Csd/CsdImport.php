<?php

namespace App\Imports\Csd;

use App\Models\consulta\Csd;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Csd([
            'proposito' => 'MIGRACION BASE PLANA',
            'fecha' => date('Y-m-d',time()),
            'sis_nnaj_id' => $row[0],
            'prm_tipofuen_id' => 2316,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ]);
    }
}
