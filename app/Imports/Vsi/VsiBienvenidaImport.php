<?php

namespace App\Imports\Vsi;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiBienvenida;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiBienvenidaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $dataxxxx = [
            'vsi_id' => $row[1],
            'descripcion' => $row[2],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'created_at' => 1,
            'updated_at' => 1,
        ];
        return new VsiBienvenida($dataxxxx);
    }
}