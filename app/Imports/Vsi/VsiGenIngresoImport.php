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
            'vsi_id' => $row[0],
            'prm_actividad_id' => $row[1],
            'trabaja' => $row[2],
            'prm_informal_id' => $row[3],
            'prm_otra_id' => $row[4],
            'prm_no_id' => $row[5],
            'cuanto' => $row[6],
            'prm_periodo_id' => $row[7],
            'jornada_entre' => $row[8],
            'prm_jor_entre_id' => $row[9],
            'jornada_a' => $row[10],
            'prm_jor_a_id' => $row[11],
            'prm_frecuencia_id' => $row[12],
            'aporte' => $row[13],
            'prm_laboral_id' => $row[14],
            'prm_aporta_id' => $row[15],
            'porque' => $row[16],
            'cuanto_aporta' => $row[17],
            'expectativa' => $row[18],
            'descripcion' => $row[19],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
            'created_at => 1',
            'updated_at => 1',
        ];

        return new VsiGenIngreso($dataxxxx);
    }
}