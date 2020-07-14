<?php

namespace App\Imports\Vsi;

use App\VsiConcepto;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiConceptoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VsiConcepto([
            //
        ]);
    }
}
