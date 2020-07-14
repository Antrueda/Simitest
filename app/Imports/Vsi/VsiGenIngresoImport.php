<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiGenIngreso;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiGenIngresoImport implements ToModel
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
            'prm_actividad_id' => $row[2],
            'trabaja' => $row[3],
            'prm_informal_id' => $row[4],
            'prm_otra_id' => $row[5],
            'prm_no_id' => $row[6],
            'cuanto' => $row[7],
            'prm_periodo_id' => $row[8],
            'jornada_entre' => $row[9],
            'prm_jor_entre_id' => $row[10],
            'jornada_a' => $row[11],
            'prm_jor_a_id' => $row[12],
            'prm_frecuencia_id' => $row[13],
            'aporte' => $row[14],
            'prm_laboral_id' => $row[15],
            'prm_aporta_id' => $row[16],
            'porque' => $row[17],
            'cuanto_aporta' => 1,
            'expectativa' => 1,
            'descripcion' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ];

        return new VsiGenIngreso($dataxxxx);
    }
}