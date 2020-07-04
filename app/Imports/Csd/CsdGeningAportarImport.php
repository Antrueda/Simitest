<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdGeningAporta as ConsultaCsdGeningAporta;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdGeningAportarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ConsultaCsdGeningAporta([
            //
        ]);
    }
}
