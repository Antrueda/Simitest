<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiConcepto;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiConceptoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // echo $row[1].'<pre>';
        $dataxxxx = [
            'vsi_id' => $row[0],
            'concepto' => $row[1],
            'prm_ingreso_id' => $row[2],
            'porque' => $row[3],
            'cual' => $row[4],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
            'created_at => 1',
            'updated_at => 1',
        ];
        // print_r($dataxxxx);
        return new VsiConcepto($dataxxxx);
    }
}