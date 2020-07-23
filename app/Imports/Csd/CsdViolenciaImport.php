<?php

namespace App\Imports\Csd;

use App\Models\consulta\CsdViolencia;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdViolenciaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CsdViolencia([
            'csd_id'=> $row[0],
            'prm_condicion_id' => $row[1]  == '' ? 2316 : $row[1], 
            'departamento_cond_id' => $row[2] == '' ? 1 : $row[2], 
            'municipio_cond_id' => $row[3] == '' ? 1 : $row[3], 
            'prm_certificado_id' => $row[4] == '' ? 2316 : $row[4], 
            'departamento_cert_id' => $row[5] == '' ? 1 : $row[5], 
            'municipio_cert_id' => $row[6] == '' ? 1 : $row[6], 
            'prm_tipofuen_id'=>2316,
            'user_crea_id' =>1,
            'user_edita_id'=>1,
            'sis_esta_id'=>1
        ]);
    }
}
