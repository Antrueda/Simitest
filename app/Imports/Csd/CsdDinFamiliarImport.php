<?php

namespace App\Imports\Csd;

use App\CsdDinFamiliar;
use App\Models\consulta\CsdDinFamiliar as ConsultaCsdDinFamiliar;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdDinFamiliarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ConsultaCsdDinFamiliar([
            'csd_id'=> $row[0], 
            'descripcion'=> $row[3],
            'relevantes'=> $row[5],
            'prm_familiar_id'=> $row[],
            'prm_hogar_id'=> $row[1],
            'descripcion_0'=> $row[],
            'prm_bogota_id'=> $row[6],
            'prm_traslado_id'=> $row[7],
            'jefe1',
            'prm_jefe1_id',
            'jefe2',
            'prm_jefe2_id',
            'descripcion_1'=> $row[],
            'prm_cuidador_id'=> $row[],
            'descripcion_2'=> $row[],
            'afronta'=> $row[],
            'prm_norma_id'=> $row[],
            'prm_conoce_id'=> $row[],
            'observacion'=> $row[],
            'prm_actuan_id'=> $row[],
            'porque'=> $row[],
            'prm_solucion_id'=> $row[],
            'prm_problema_id'=> $row[],
            'prm_destaca_id'=> $row[],
            'prm_positivo_id'=> $row[],
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'sis_esta_id'=> 1
        ]);
    }
}
