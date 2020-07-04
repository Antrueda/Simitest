<?php

namespace App\Imports\Csd;

use App\Models\consulta\pivotes\CsdAlimentCompra;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdAlimentCompraImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdAlimentCompra([
            //
        ]);
    }
}
