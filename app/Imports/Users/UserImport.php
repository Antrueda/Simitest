<?php

namespace App\Imports\Users;

use App\Models\Logs\HUser;
use App\Models\Sistema\SisCargo;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class UserImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        $usuariox = User::where('s_documento', $row[0])->first();
        echo
        '$registro = [
        "sis_depen_id"=>' . $row[2] . '<br>,
        "i_prm_responsable_id"=>' . $row[3] . '<br>,
        "user_crea_id"=>1<br>,
        "user_id"=>' . $usuariox->id . '<br>,
        "user_edita_id"=>1<br>,
        "sis_esta_id"=>1<br>,
    ];<br>
    SisDepeUsua::create($registro);<br>

    <br><br>';


        // return new User([
        //     's_documento' => $row[0],
        //     'prm_documento_id' => $row[1],
        //     's_primer_nombre' => $row[2],
        //     's_segundo_nombre' => $row[3],
        //     's_primer_apellido' => $row[4],
        //     's_segundo_apellido' => $row[5],
        //     's_telefono' => $row[6],
        //     'name' => $row[2] . ' ' . $row[3] . ' ' . $row[4] . ' ' . $row[5],
        //     'email' => $row[7],
        //     's_matriculap' => $row[8],
        //     'password' => $row[0],
        //     'prm_tvinculacion_id' => 1672,
        //     'itiestan' => 10,
        //     'itiegabe' => 0,
        //     'sis_municipio_id' => $row[10],
        //     'd_vinculacion' => date('Y-m-d'),
        //     'd_finvinculacion' => date('Y-m-d', Date::excelToTimestamp($row[12] + 1)),
        //     'sis_cargo_id' => $row[13],
        //     'sis_esta_id' => 1,
        //     'user_crea_id' => 1,
        //     'user_edita_id' => 1,
        //     'password_change_at' => date("Y-m-d", strtotime(date('Y-m-d') . "+ 1 month")),
        // ]);
    }
}
