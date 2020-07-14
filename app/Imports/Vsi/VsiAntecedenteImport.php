<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiAntecedente;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiAntecedenteImport implements ToModel
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
            'descripcion' => $row[1],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'created_at' => 1,
            'updated_at' => 1,
        ];
        return new VsiAntecedente($dataxxxx);
    }
}
