<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdRedsocActual as ConsultaCsdRedsocActual;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdRedsocActualImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ConsultaCsdRedsocActual([
            'csd_id'=> $row[0],
            'prm_tipo_id'=> $row[1],
            'nombre'=> $row[2],
            'servicios'=> $row[3],
            'telefono'=> $row[4],
            'direccion'=> $row[5],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'prm_tipofuen_id'=> 2316
        ]);
    }
}
