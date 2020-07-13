<?php

namespace App\Imports\Csd;


use App\Models\consulta\pivotes\CsdAlimentFrec as PivotesCsdAlimentFrec;
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
        return new PivotesCsdAlimentFrec([
            'parametro_id'=>$row[1],
            'prm_tipofuen_id'=>2316,
            'csd_alimentacion_id'=>$row[0],
            'user_crea_id'=>1,
            'user_edita_id'=>1,
        ]);
    }
}
