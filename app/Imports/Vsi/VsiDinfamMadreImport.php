<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiDinfamMadre;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiDinfamMadreImport implements ToModel
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
            'prm_convive_id' => $row[1],
            'dia' => $row[2],
            'mes' => $row[3],
            'ano' => $row[4],
            'hijo' => $row[5],
            'prm_separa_id' => $row[6],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'created_at' => 1,
            'updated_at' => 1,
        ];
        // print_r($dataxxxx);
        return new VsiDinfamMadre($dataxxxx);
    }
}