<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\Pivotes\VsiNnajEmocional;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiNnajEmocionalImport implements ToModel
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

        ];
        // print_r($dataxxxx);
        return new VsiNnajEmocional($dataxxxx);
    }
}