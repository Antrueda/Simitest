<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdDinfamMadre;
use Maatwebsite\Excel\Concerns\ToModel;



class CsdDinfamMadreImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdDinfamMadre([
            'csd_id'=> $row[0],
            'prm_convive_id'=> $row[1],
            'dia'=> $row[2]==''?0:$row[2], 
            'mes'=> $row[3]==''?0:$row[3],
            'ano'=> $row[4]==''?0:$row[4],
            'hijo'=> $row[5]==''?0:$row[5],
            'prm_separa_id'=> $row[6],
            'prm_tipofuen_id'=> 2316,
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'sis_esta_id'=> 1
        ]);
    }
}
