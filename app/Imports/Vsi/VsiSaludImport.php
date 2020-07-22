<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiSalud;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiSaludImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
//        echo $row[0].'<pre>';
        $dataxxxx = [
            'vsi_id' => $row[0],
            'prm_atencion_id' => $row[1],
            'prm_condicion_id' => $row[3],
            'prm_medicamento_id' => $row[4],
            'prm_prescripcion_id' => $row[6],
            'prm_sexual_id' => $row[8],
            'prm_activa_id' => $row[10],
            'prm_embarazo_id' => $row[11],
            'prm_hijo_id' => $row[13],
            'prm_interrupcion_id' => $row[15],
            'medicamento' => $row[5],
            'descripcion' => $row[7],
            'edad' => $row[9],
            'embarazo' => $row[12],
            'hijo' => $row[14],
            'interrupcion' => $row[16],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
        ];
//        print_r($dataxxxx);
        return new VsiSalud($dataxxxx);
    }
}