<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiDinFamiliar;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiDinFamiliarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // echo $row[2].'<pre>';
        $dataxxxx=[
            'vsi_id' => $row[0],
            'prm_familiar_id' => $row[1],
            'prm_hogar_id' => $row[2],
            'lugar' => $row[3],
            'prm_motivo_id' => $row[4],
            'descripcion' => $row[5],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'created_at' => 1,
            'updated_at' => 1,
        ];
        // print_r($dataxxxx);
        return new VsiDinFamiliar($dataxxxx);
    }
}