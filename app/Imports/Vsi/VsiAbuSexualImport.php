<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiAbuSexual;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiAbuSexualImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        echo $row[0].'<pre>';
        $dataxxxx = [
            
        ];
        print_r($dataxxxx);            
        return new VsiAbuSexual($dataxxxx);
    }
}
