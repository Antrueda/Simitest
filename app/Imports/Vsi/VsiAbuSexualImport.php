<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiAbuSexual;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiAbuSexualImport implements ToModel
{
    /**
    * @param array $row
    * Seccion 14
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        echo $row[0].'<pre>';
        $dataxxxx = [
            'vsi_id' => $row[0],
            'prm_evento_id' => $row[1],
            'dia' => $row[3],
            'mes' => $row[4],
            'ano' => $row[5],
            'prm_momento_id' => $row[2],
// campo inexistente en la tabla 14 4
            'prm_tipo_id' => $row[6],
            'dia_ult' => $row[7],
            'mes_ult' => $row[8],
            'ano_ult' => $row[9],
            'prm_momento_ult_id' => $row[10],
            'prm_persona_ult_id' => $row[11],
            'prm_tipo_ult_id' => $row[12],
            'prm_convive_id' => $row[13],
            'prm_presencia_id' => $row[14],
            'prm_reconoce_id' => $row[15],
            'prm_apoyo_id' => $row[16],
            'prm_denuncia_id' => $row[17],
            'prm_terapia_id' => $row[18],
            'prm_estado_id' => $row[19],
            'informacion' => $row[20],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
        ];
        print_r($dataxxxx);            
//        return new VsiAbuSexual($dataxxxx);
    }
}
