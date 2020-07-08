<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiRelFamiliar;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiRelFamiliarImport implements ToModel
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
            'prm_representativa_id' => $row[1],
            'representativa' => $row[2],
            'prm_mala_id' => $row[3],
            'prm_relacion_id' => $row[4],
            'prm_gusto_id' => $row[5],
            'porque' => $row[6],
            'prm_familia_id' => $row[7],
            'prm_denuncia_id' => $row[8],
            'descripcion' => $row[9],
            'prm_pareja_id' => $row[10],
            'prm_dificultad_id' => $row[11],
            'dia' => $row[12],
            'mes' => $row[13],
            'ano' => $row[14],
            'prm_responde_id' => $row[15],
            'descripcion1' => $row[16],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'created_at' => 1,
            'updated_at' => 1,
        ];
        // print_r($dataxxxx);
        return new VsiRelFamiliar($dataxxxx);
    }
}