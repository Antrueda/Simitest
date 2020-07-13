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

        return new CsdResidencia([
            'csd_id'=> $row[0],
            'prm_tipo_id'=> $row[1],
            'prm_es_id'=> $row[2],
            'prm_dir_tipo_id'=> $row[3]==''?2316:$row[3],
            'prm_dir_zona_id'=> $row[4]==''?2316:$row[4],
            'prm_dir_via_id'=> $row[5]==''?2316:$row[5],
            'dir_nombre'=> $row[6],
            'prm_tipofuen_id'=>2316,
            'prm_dir_alfavp_id'=> $row[7]==''?2316:$row[7],
            'prm_dir_bis_id'=> $row[8]==''?2316:$row[8],
            'prm_dir_alfabis_id'=> $row[9]==''?2316:$row[9],
            'prm_dir_cuadrantevp_id'=> $row[10]==''?2316:$row[10],
            'dir_generadora'=> $row[11],
            'prm_dir_alfavg_id'=> $row[12]==''?2316:$row[12],
            'dir_placa'=> $row[13]==''?0:$row[13],
            'prm_dir_cuadrantevg_id'=> $row[14]==''?2316:$row[14],
            'prm_estrato_id'=> $row[15]==''?2316:$row[15],
            'dir_complemento'=> $row[16]==''?2316:$row[16],
            'sis_localidad_id'=> $row[17]==''?2316:$row[17],
            'sis_upz_id'=> $row[18]==''?2316:$row[18],
            'sis_barrio_id'=> $row[19]==''?2316:$row[19],
            'telefono_uno'=> $row[20]==''?0:$row[20],
            'telefono_dos'=> $row[21]==''?0:$row[21],
            'telefono_tres'=> $row[22]==''?0:$row[22],
            'email'=> $row[23]==''?' ':$row[23],
            'prm_piso_id'=> $row[24],
            'prm_muro_id'=> $row[25],
            'prm_higiene_id'=> $row[26]==''?2316:$row[26],
            'prm_ventilacion_id'=> $row[27]==''?2316:$row[27],
            'prm_iluminacion_id'=> $row[28]==''?2316:$row[28],
            'prm_orden_id'=> $row[29]==''?2316:$row[29],
            'user_crea_id'=> 1,
            'user_edita_id'=> 1,
            'sis_esta_id'=> 1,
            'prm_tipofuen_id'=> 2316
        ]);
    }
}
