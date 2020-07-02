<?php

namespace App\Imports\Vsi;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sicosocial\Vsi;
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
        //echo "'{$row[0]}',<br>";    //muestra en forma de columna las cedulas

        /**
         * todas las validaciones se necesiten se hacen acá para que sea por cada registro
         */
        
        
        $dataxxxx=[
            'vsi_id' => $row[1],//  tabla padre que indica que un  nnaj puede tener varias vsi
            'prm_razon_id' => $row[3], 
            'prm_persona_id' => $row[4],
            'dia' => $row[5],
            'mes' => $row[6],
            'ano' => $row[7],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            
        ];
        
        return new VsiDatosVincula($dataxxxx);
    }
}