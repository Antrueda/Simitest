<?php

namespace App\Imports\Csd;

use App\Models\consulta\pivotes\CsdAlimentFrec;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdAlimentFrecImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdAlimentFrec([
            'parametro_id'=>$row[1],
            'csd_alimentacion_id'=>$row[0],
            'user_crea_id'=>1,
            'user_edita_id'=>1,
            'prm_tipofuen_id'=>2316,
        ]);
    }
}
