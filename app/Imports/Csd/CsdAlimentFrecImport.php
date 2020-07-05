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
            //
        ]);
    }
}
