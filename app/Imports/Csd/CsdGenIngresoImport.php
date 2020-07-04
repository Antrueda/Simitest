<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdGenIngreso as ConsultaCsdGenIngreso;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdGenIngresoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ConsultaCsdGenIngreso([
            'csd_id'=> $row[0],
            'observacion'=> $row[1],
            'prm_actividad_id'=>$row[2],
            'trabaja',
            'prm_informal_id'=> $row[3],
            'prm_otra_id'=> $row[4],
            'prm_laboral_id'=> $row[5],
            'prm_frecuencia_id'=> $row[6],
            'intensidad'=> $row[7],
            'prm_dificultad_id'=> $row[8],
            'razon'=> $row[9],
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'sis_esta_id'=> 1,
             ]);
    }
}
