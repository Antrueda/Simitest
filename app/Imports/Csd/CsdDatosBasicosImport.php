<?php

namespace App\Imports;

use App\Models\consulta\CsdDatosBasico;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdDatosBasicosImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new CsdDatosBasico([
            'csd_id'=> $row[0],
            'primer_nombre' => $row[3],
            'segundo_nombre'=>$row[4],
            'primer_apellido' => $row[1],
            'segundo_apellido'=>$row[2],
            'identitario'=> $row[5],
            'apodo'=> $row[6],
            'prm_sexo_id'=> $row[7],
            'prm_genero_id'=> $row[8],
            'prm_sexual_id'=> $row[9],
            'nacimiento'=> date('Y-m-d',$row[10]),
            'pais_id'=> $row[11],
            'departamento_id'=> $row[12],
            'municipio_id'=> $row[13],
            'prm_documento_id'=> $row[14],
            'prm_doc_fisico_id'=> $row[15],
            'prm_sin_fisico_id'=> $row[16],
            'documento'=> $row[17],
            'pais_docum_id'=> $row[18],
            'departamento_docum_id'=> $row[19],
            'municipio_docum_id'=> $row[20],
            'prm_gruposang_id'=> $row[21],
            'prm_factorsang_id'=> $row[22],
            'prm_militar_id'=> $row[23],
            'prm_libreta_id'=> $row[24],
            'prm_civil_id'=> $row[25],
            'prm_etnia_id'=> $row[26],
            'prm_cual_id'=> $row[27],
            'prm_poblacion_id'=> $row[28],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
            'prm_tipofuen_id'=> 2316

        ]);
    }
}
