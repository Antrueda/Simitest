<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiDatosVincula;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiDatosVinculaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /**
         * todas las validaciones se necesiten se hacen acá para que sea por cada registro
         */
        // echo $row[1].'<pre>';
        $dataxxxx=[
            'vsi_id' => $row[0],
            'prm_razon_id' => $row[1], 
            'prm_persona_id' => $row[2],
            'dia' => $row[3],
            'mes' => $row[4],
            'ano' => $row[5],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ];
        // print_r($dataxxxx);        
        return new VsiDatosVincula($dataxxxx);
    }
}