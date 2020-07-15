<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiActEmocional;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiActEmocionalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $dataxxxx = [
            'vsi_id' => $row[0],
            'prm_activa_id' => $row[1],
            'descripcion' => $row[2],
            'conductual' => $row[3],
            'cognitiva' => $row[4],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
            'created_at => 1',
            'updated_at => 1',
        ];
        return new VsiActEmocional($dataxxxx);
    }
}