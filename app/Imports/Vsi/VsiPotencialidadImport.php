<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiPotencialidad;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiPotencialidadImport implements ToModel
{
    /**
     * @param array $row
     * Pregunta 18 1
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // echo $row[0].'<pre>';
        $dataxxxx = [
            'vsi_id' => $row[0],
            'potencialidad' => $row[1],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ];
        // print_r($dataxxxx);
        return new VsiPotencialidad($dataxxxx);
    }
}