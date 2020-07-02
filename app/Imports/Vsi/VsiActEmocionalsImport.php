<?php

namespace App\Imports;

use App\Models\sicosocial\Vsi;

use App\Models\sicosocial\VsiActEmocionals;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiActEmocionalsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $dataxxxx = [

        ];


        return new VsiActEmocionals(dataxxxx);
    }
}