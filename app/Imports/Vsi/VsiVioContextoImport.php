<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\Pivotes\VsiVioContexto;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiVioContextoImport implements ToModel
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
            'parametro_id' => $row[0],
            'vsi_violencia_id' => $row[1],
            'user_crea_id => 1',
            'user_edita_id => 1',
        ];
        // print_r($dataxxxx);
        return new VsiVioContexto($dataxxxx);
    }
}