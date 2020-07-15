<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiConsumo;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiConsumoImport implements ToModel
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
            'prm_consumo_id' => $row[1],
            'cantidad' => $row[2],
            'inicio' => $row[3],
            'prm_contexto_ini_id' => $row[4],
            'prm_consume_id' => $row[5],
            'prm_contexto_man_id' => $row[6],
            'prm_problema_id' => $row[7],
            'porque' => $row[8],
            'prm_motivo_id' => $row[9],
            'prm_expectativa_id' => $row[10],
            'prm_familia_id' => $row[11],
            'descripcion' => $row[12],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
            'created_at => 1',
            'updated_at => 1',
        ];
        // print_r($dataxxxx);        
        return new VsiConsumo($dataxxxx);                 
    }
}