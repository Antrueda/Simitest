<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\Pivotes\VsiFacProtector;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiFacProtectorImport implements ToModel
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
            'protector' => $row[1],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'created_at' => 1,
            'updated_at' => 1,
        ];
        // print_r($dataxxxx);        
        return new VsiFacProtector($dataxxxx);
    }
}