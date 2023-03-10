<?php

namespace App\Imports\Csd;
use App\Models\consulta\CsdConclusiones;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdConclusionesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdConclusiones([
            'csd_id'=>$row[0],
            'conclusiones'=>$row[1], //Se le incremento la longitud a 6000 caracteres
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'sis_esta_id'=> 1,
            'persona_nombre'=>' ',
            'persona_doc'=>1,
            'persona_parent_id'=>2316,
            'prm_tipofuen_id'=>2316,
            'user_doc1_id'=>1,
            'user_doc2_id'=>1
        ]);
    }
}
