<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiEducacion;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiEducacionImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        //seccion de validaciones

        // //  tabla padre que indica que un  nnaj puede tener varias vsi        
        $dataxxxx = [
            'vsi_id' => $row[0],
            'prm_estudia_id' => $row[1],
            'dia' => $row[2],
            'mes' => $row[3],
            'ano' => $row[4],
            'prm_motivo_id' => $row[5],
            'prm_rendimiento_id' => $row[6],
            'prm_dificultad_id' => $row[7],
            'prm_leer_id' => $row[8],
            'prm_escribir_id' => $row[9],
            'descripcion' => $row[10],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
            'created_at => 1',
            'updated_at => 1',
        ];
        return new VsiEducacion($dataxxxx);
    }
}