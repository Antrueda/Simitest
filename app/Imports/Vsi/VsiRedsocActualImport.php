<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiRedsocActual;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiRedsocActualImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // echo $row[0].'<pre>';
        $dataxxxx = [
            'vsi_id' => $row[0],
            'prm_tipo_id' => $row[1],
            'nombre' => $row[2],
            'servicio' => $row[3],
            'telefono' => $row[4],
            'direccion' => $row[5],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
        ];
        // print_r($dataxxxx);        
        return new VsiRedsocActual($dataxxxx);
    }
}