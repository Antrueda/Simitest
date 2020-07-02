<?php

namespace App\Imports\Csd;

use App\Models\consulta\CsdDatosBasico;
use Maatwebsite\Excel\Concerns\ToModel;

class BasePlanaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new CsdDatosBasico([
            'csd_id',
            'primer_nombre' => $row[4],
            'segundo_nombre'=>$row[5],
            'primer_apellido' => $row[2],
            'segundo_apellido'=>$row[3],
            'identitario'=> $row[6],
            'apodo'=> $row[7],
            'prm_sexo_idÍndice'=> $row[8],
            'prm_genero_idÍndice'=> $row[9],
            'prm_sexual_idÍndice'=> $row[10],
            'nacimiento'=> $row[11],
            'pais_idÍndice'=> $row[12],
            'departamento_idÍndice'=> $row[13],
            'municipio_idÍndice'=> $row[14],
            'prm_documento_idÍndice'=> $row[15],
            'prm_doc_fisico_idÍndice'=> $row[16],
            'prm_sin_fisico_idÍndice'=> $row[17],
            'documento'=> $row[18],
            'pais_docum_idÍndice'=> $row[19],
            'departamento_docum'=> $row[20],
            'municipio_docum_idÍndice'=> $row[21],
            'prm_gruposang_idÍndice'=> $row[22],
            'prm_factorsang_idÍndice'=> $row[23],
            'prm_militar_idÍndice'=> $row[24],
            'prm_libreta_idÍndice'=> $row[25],
            'prm_civil_idÍndice'=> $row[26],
            'prm_etnia_idÍndice'=> $row[27],
            'prm_cual_idÍndice'=> $row[28],
            'prm_poblacion_idÍndice'=> $row[29],
            'user_crea_idÍndice' => 1,
            'user_edita_idÍndice' => 1,
            'sis_esta_id' => 1
        ]);
    }
}
