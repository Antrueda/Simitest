<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdGeningAporta as ConsultaCsdGeningAporta;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdGeningAportarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ConsultaCsdGeningAporta([
            'csd_id'=> $row[0],
            'prm_aporta_id'=> $row[1],
            'mensual'=> $row[2],
            'aporte'=> $row[3],
            'jornada_entre'=> $row[4],
            'prm_entre_id'=> $row[5],
            'jornada_a'=> $row[6],
            'prm_a_id'=> $row[7],
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'sis_esta_id'=> 1,
            'prm_tipofuen_id'=> 2316
            ]);
        }
    }
