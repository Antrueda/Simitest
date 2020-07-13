<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdRedsocPasado as ConsultaCsdRedsocPasado;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdRedsocPasadoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ConsultaCsdRedsocPasado([
            'csd_id'=> $row[0],
            'nombre'=> $row[1],
            'servicios'=> $row[2],
            'cantidad'=> $row[3],
            'prm_unidad_id'=> $row[4],
            'ano'=> $row[5],
            'retiro'=> $row[6],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'prm_tipofuen_id'=> 2316
        ]);
    }
}
