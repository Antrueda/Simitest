<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdBienvenida as ConsultaCsdBienvenida;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdBienvenidaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ConsultaCsdBienvenida([
            'csd_id'=> $row[0],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'prm_persona_id'=> $row[1],
            'prm_tipofuen_id'=>2316,
        ]);
    }
}
