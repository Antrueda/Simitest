<?php

namespace App\Imports\Vsi;

use App\VsiConsentimiento;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiConsentimientoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VsiConsentimiento([
            //
        ]);
    }
}
