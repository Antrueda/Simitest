<?php

namespace App\Imports\Vsi;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sicosocial\Vsi;
use Maatwebsite\Excel\Concerns\ToModel;

class VsisImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $nnajxxxx=FiDatosBasico::where('s_documento',$row[0])->first();
        return new Vsi([
            'sis_nnaj_id'=>$nnajxxxx->sis_nnaj_id,
            'dependencia_id'=>$row[7],
            'fecha'=>$row[1],
            'user_crea_id'=>1,
            'user_edita_id'=>1,
            'sis_esta_id'=>1,
        ]);
    }
}
