<?php

namespace App\Imports\Csd;

use App\Models\consulta\pivotes\CsdDinfamIncumple;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdDinfamIncumpleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdDinfamIncumple([
            'parametro_id'=> $row[1],
            'csd_dinfamiliar_id'=> $row[0],
            'prm_tipofuen_id'=> 2316,
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            


        ]);
    }
}
