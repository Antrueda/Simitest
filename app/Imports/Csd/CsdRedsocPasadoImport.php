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
            'csd_id',
            'user_crea_id',
            'user_edita_id',
            'sis_esta_id',
            'nombre',
            'servicios',
            'cantidad',
            'prm_unidad_id',
            'ano',
            'retiro'
        ]);
    }
}
