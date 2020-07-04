<?php

namespace App\Imports\Csd;


use App\Models\consulta\pivotes\CsdAlimentPrepara as PivotesCsdAlimentPrepara;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdAlimentPreparaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PivotesCsdAlimentPrepara([
            //
        ]);
    }
}
