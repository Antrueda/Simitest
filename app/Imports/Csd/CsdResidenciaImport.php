<?php

namespace App\Imports\Csd;

use App\Models\consulta\CsdResidencia;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdResidenciaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if ($row[0] > 0)
            return new CsdResidencia([
                'csd_id' => $row[0],
                'prm_tipo_id' => $row[2],
                'prm_es_id' => $row[4],
                'prm_dir_tipo_id' =>  $row[6],
                'prm_dir_zona_id' =>  $row[8],
                'prm_dir_via_id' => $row[10],
                'dir_nombre' => $row[12],
                'prm_dir_alfavp_id' => $row[13],
                'prm_dir_bis_id' =>  2316,
                'prm_dir_alfabis_id' => 2316,
                'prm_dir_cuadrantevp_id' =>  $row[17],
                'dir_generadora' => ($row[20] == '' || $row[20] == ' ') ? 0 : $row[20],
                'prm_dir_alfavg_id' =>  $row[21],
                'dir_placa' => $row[23] == ' ' ? 0 : $row[23],
                'prm_dir_cuadrantevg_id' =>  $row[24],
                'prm_estrato_id' => $row[26],
                'dir_complemento' => $row[28] == '' ? 2316 : $row[28],
                // 'sis_localidad_id' => $row[17] == '' ? 2316 : $row[17],
                // 'sis_upz_id' => $row[18] == '' ? 2316 : $row[18],
                'sis_upzbarri_id' => $row[32],
                'telefono_uno' => $row[34] == '' ? 0 : $row[34],
                'telefono_dos' => $row[35] == '' ? 0 : $row[35],
                'telefono_tres' => $row[36] == '' ? 0 : $row[36],
                'email' => $row[37] == '' ? ' ' : $row[37],
                'prm_piso_id' => $row[38],
                'prm_muro_id' => $row[40],
                'prm_higiene_id' => 2316,
                'prm_ventilacion_id' =>  2316,
                'prm_iluminacion_id' =>  2316,
                'prm_orden_id' =>  2316,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'prm_tipofuen_id' => 2316
            ]);
    }
}
