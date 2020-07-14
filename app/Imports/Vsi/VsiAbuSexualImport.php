<?php

namespace App\Imports\Vsi;

use App\VsiAbuSexual;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiAbuSexualImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VsiAbuSexual([
            //
        ]);
    }
}
