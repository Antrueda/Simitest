<?php

namespace App\Imports\Vsi;

use App\VsiAntecedentes;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiAntecedentes implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VsiAntecedentes([
            //
        ]);
    }
}
