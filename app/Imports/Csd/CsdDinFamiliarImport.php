<?php

namespace App\Imports\Csd;

use App\Models\consulta\CsdDinFamiliar;
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
        if ($row[0] > 0) {

            return new CsdDinFamiliar([
                'csd_id' => $row[1],
                'prm_familiar_id' => $row[2]==''?2316:$row[2],
                'prm_hogar_id' => $row[3]==''?2316:$row[3],
                'descripciona' => $row[4],
                'prm_bogota_id' => $row[7]==''?2316:$row[7],
                'prm_traslado_id' => $row[8]==''?2316:$row[8],
                'descripcionb' => $row[9],
                'afronta' => $row[11],
                'prm_norma_id' => $row[12]==''?2316:$row[12],
                'prm_conoce_id' => $row[13]==''?2316:$row[13],
                'observacion' => $row[15],
                'prm_actuan_id' => $row[16]==''?2316:$row[16],
                'porque' => $row[17],
                'prm_solucion_id' => $row[18]==''?2316:$row[18],
                'prm_problema_id' => $row[19]==''?2316:$row[19],
                'prm_destaca_id' => $row[21]==''?2316:$row[21],
                'prm_positivo_id' => $row[22]==''?2316:$row[22],
                'prm_tipofuen_id' => 2316,
                'prm_cuidador_id' => 2316,// EN LA BASE PLANA ES UNA DESCRIPCION
                'relevantes' => $row[6],
                'descripcion' =>  $row[5],
                'jefea' =>  $row[23],
                'prm_jefea_id' =>  $row[24],
                'jefeb' =>  $row[25],
                'prm_jefeb_id' =>  $row[26],
                'descripcionc' => $row[10],
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1
            ]);
        }
    }
}
