<?php

namespace App\Imports\Csd;

use App\Models\consulta\Csd;
use App\Models\fichaIngreso\FiDatosBasico;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
$datobasi=FiDatosBasico::where('s_documento',$row[1])->first();

echo " Csd::create(['id' => {$row[2]}, 'proposito' => 'MIGRACION BASE PLANA',
'fecha' => '2020-07-03', 'sis_nnaj_id' => {$datobasi->sis_nnaj_id}, 'prm_tipofuen_id' => 2316,
'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,
'created_at' => '2020-07-03 10:26:30', 'updated_at' => '2020-07-03 10:26:30',]);<br>";
        // return new Csd([
        //     'proposito' => 'MIGRACION BASE PLANA',
        //     'fecha' => date('Y-m-d',time()),
        //     'sis_nnaj_id' => $row[0],
        //     'prm_tipofuen_id' => 2316,
        //     'user_crea_id' => 1,
        //     'user_edita_id' => 1,
        //     'sis_esta_id' => 1,
        // ]);
    }
}
