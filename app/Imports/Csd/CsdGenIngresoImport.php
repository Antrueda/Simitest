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
            'trabaja'=>$row[3],
            'prm_informal_id'=> $row[4],
            'prm_otra_id'=> $row[5],
            'prm_laboral_id'=> $row[6],
            'prm_frecuencia_id'=> $row[7],
            'intensidad'=> $row[8],
            'prm_dificultad_id'=> $row[9],
            'razon'=> $row[10],
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'sis_esta_id'=> 1,
             ]);
    }
}
/*
$seederxx = "CsdGenIngresoImport::create(['id'=>{$registro->id},'csd_id'=>{$registro->csd_id}, 'observacion'=>'$registro->nombre',
'trabaja'=>'$registro->trabaja','prm_actividad_id'=>{$registro->prm_actividad_id}, 'prm_informal_id'=>{$registro->prm_informal_id},'prm_otra_id'=>{$registro->prm_otra_id},
'prm_laboral_id'=>'{$registro->prm_laboral_id}','prm_frecuencia_id'=>'{$registro->prm_frecuencia_id}','intensidad'=>'{$registro->intensidad}',
'prm_dificultad_id'=>'{$registro->prm_dificultad_id}','razon'=>'{$registro->razon}',
'user_crea_id'=>{$registro->user_crea_id},'user_edita_id'=>{$registro->user_edita_id},'sis_esta_id'=>{$registro->sis_esta_id}]);<br>";