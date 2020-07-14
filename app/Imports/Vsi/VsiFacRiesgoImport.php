<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\Pivotes\VsiFacRiesgo;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiFacRiesgoImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // echo $row[2].'<pre>';
        $dataxxxx = [
            'vsi_id' => $row[0],
            'riesgo' => $row[1],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'created_at' => 1,
            'updated_at' => 1,
        ];
        // print_r($dataxxxx);        
        return new VsiFacRiesgo($dataxxxx);
    }
}