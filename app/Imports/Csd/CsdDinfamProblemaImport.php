<?php

namespace App\Imports\Csd;


use App\Models\consulta\pivotes\CsdDinfamProblema as PivotesCsdDinfamProblema;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdDinfamProblemaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PivotesCsdDinfamProblema([
            //
        ]);
    }
}
