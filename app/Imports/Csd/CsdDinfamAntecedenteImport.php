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
            //
        ]);
    }
}
