<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\Pivotes\VsiRedsocPasado;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiRedsocPasadoImport implements ToModel
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
            'nombre' => $row[1],
            'servicio' => $row[2],
            'dia' => $row[3],
            'mes' => $row[4],
            'ano' => $row[5],
            'ano_prestacion' => $row[6],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ];
        // print_r($dataxxxx);
        return new VsiRedsocPasado($dataxxxx);
    }
}
