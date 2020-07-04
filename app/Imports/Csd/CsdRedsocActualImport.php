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
            'csd_id',
            'prm_tipo_id',
            'nombre',
            'servicios',
            'telefono',
            'direccion',
            'user_crea_id',
            'user_edita_id',
            'sis_esta_id'
        ]);
    }
}
