<?php

namespace App\Imports\Csd;


use App\Models\consulta\pivotes\CsdDinfamEstablecen;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdDinfamEstablecenImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdDinfamEstablecen([
            'parametro_id'=>$row[3],
            'prm_tipofuen_id'=>2316,
            'csd_dinfamiliar_id'=>$row[1],
            'user_crea_id'=>1,
            'user_edita_id'=>1,
        ]);
    }
}
