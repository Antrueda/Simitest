<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiActEmocional;
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


        return new VsiActEmocional($dataxxxx);
    }
}
