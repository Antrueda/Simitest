<?php

namespace App\Imports\Vsi;

use App\VsiConsumo;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiConsumoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VsiConsumo([
            //
        ]);
    }
}
