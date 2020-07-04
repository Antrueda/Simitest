<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdAlimentacion;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdAlimentacionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdAlimentacion([
            'csd_id'=> $row[0],
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'cant_personas'=> $row[1],
            'prm_horario_id'=> $row[2],
            'prm_apoyo_id'=> $row[3],
            'prm_entidad_id'=> $row[4],
            'sis_esta_id'=>1,
            'prm_tipofuen_id'=>2316
        ]);
    }
}
