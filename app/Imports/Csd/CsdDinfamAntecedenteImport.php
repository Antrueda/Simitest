<?php

namespace App\Imports\Csd;


use App\Models\consulta\pivotes\CsdDinfamAntecedente as CsdDinfamAntecedente;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdDinfamAntecedenteImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdDinfamAntecedente([
            'parametro_id'=> $row[3],
            'csd_dinfamiliar_id'=> $row[1],
            'prm_tipofuen_id'=> 2316,
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
        ]);
    }
}
