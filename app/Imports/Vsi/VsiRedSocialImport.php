<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiRedSocial;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiRedSocialImport implements ToModel
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
            'prm_presenta_id' => $row[1],
            'prm_protector_id' => $row[2],
            'prm_dificultad_id' => $row[3],
            'prm_quien_id' => $row[4],
            'prm_ruptura_genero_id' => $row[5],
            'prm_ruptura_sexual_id' => $row[6],
            'prm_acceso_id' => $row[7],
            'prm_servicio_id' => $row[8],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'created_at' => 1,
            'updated_at' => 1,
        ];
        // print_r($dataxxxx);
        return new VsiRedSocial($dataxxxx);
    }
}