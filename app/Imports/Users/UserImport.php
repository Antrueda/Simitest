<?php

namespace App\Imports\Users;

use App\Models\Logs\HUser;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($row[10]+1);
        return new User([
            's_primer_nombre'=>$row[0],
            's_segundo_nombre'=>$row[1],
            's_primer_apellido'=>$row[2],
            's_segundo_apellido'=>$row[3],
            's_telefono'=>$row[4],
            'name'=>$row[5],
            'email'=>$row[6],
            'password'=>$row[7],
            'prm_tvinculacion_id'=>$row[8],
            'itiestan'=>10,
            'itiegabe'=>0,
            's_matriculap'=>$row[11],
            'sis_cargo_id'=>$row[12],
            'd_vinculacion'=>date('Y-m-d',$date ),
            'd_finvinculacion'=>date('Y-m-d',$date ),
            's_documento'=>$row[15],
            'prm_documento_id'=>$row[16],
            'sis_municipio_id'=>$row[17],
            'sis_esta_id'=>1,
            'user_crea_id'=>1,
            'user_edita_id'=>1,
            'password_change_at'=> date("Y-m-d", strtotime(date('Y-m-d') . "+ 1 month")),
        ]);
        new HUser([
            's_primer_nombre'=>$row[0],
            's_segundo_nombre'=>$row[1],
            's_primer_apellido'=>$row[2],
            's_segundo_apellido'=>$row[3],
            's_telefono'=>$row[4],
            'name'=>$row[5],
            'email'=>$row[6],
            'password'=>$row[7],
            'prm_tvinculacion_id'=>$row[8],
            'itiestan'=>10,
            'itiegabe'=>0,
            's_matriculap'=>$row[11],
            'sis_cargo_id'=>$row[12],
            'd_vinculacion'=>$row[13],
            'd_finvinculacion'=>$row[14],
            's_documento'=>$row[15],
            'prm_documento_id'=>$row[16],
            'sis_municipio_id'=>$row[17],
            'sis_esta_id'=>1,
            'user_crea_id'=>1,
            'user_edita_id'=>1,
            'password_change_at'=> date("Y-m-d", strtotime(date('Y-m-d') . "+ 1 month")),
            
        ]);
    }
}
