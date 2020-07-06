<?php

namespace App\Imports\Csd;


use App\Models\consulta\CsdComFamiliar as ConsultaCsdComFamiliar;
use Maatwebsite\Excel\Concerns\ToModel;

class CsdComFamiliarImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {


        return new ConsultaCsdComFamiliar([
            'csd_id' => $row[0],
            'primer_apellido' => $row[1],
            'segundo_apellido' => $row[2] == '' ? ' ' : $row[2], // en este caso cuando es texto
            'primer_nombre' => $row[3],
            'segundo_nombre' =>  $row[4] == '' ? ' ' : $row[4],
            'identitario' => $row[5],
            'prm_documento_id' => $row[6],
            'documento' => $row[7] == '' ? 0 :$row[2],
            'nacimiento' => date('Y-m-d', $row[8]),
            'prm_sexo_id' => $row[9],
            'prm_estadoivil_id' => $row[10] == '' ? 2316 : $row[10],// en el caso de que sean combos, el seeder los campos no pueden quedar vacíos
            'prm_genero_id' => $row[11]== '' ? 2316 : $row[11],
            'prm_sexual_id' => $row[12]== '' ? 2316 : $row[12],
            'prm_grupo_etnico_id' => $row[13],
            'prm_ocupacion_id' => $row[14],
            'prm_parentezco_id' => $row[15],
            'prm_convive_id' => $row[16],
            'prm_visitado_id' => $row[17],
            'prm_vin_actual_id' => $row[18],
            'prm_vin_pasado_id' => $row[19],
            'prm_regimen_id' => $row[20],
            'prm_cualeps_id' => $row[21],
            'sisben' => $row[22],
            'prm_sisben_id' => $row[21],
            'prm_discapacidad_id' => $row[23],
            'prm_cual_id' => $row[24]== '' ? 2316 : $row[24],
            'prm_peso_id' => $row[25],
            'prm_peso_dos_id' => 228,
            'prm_leer_id' => $row[26],
            'prm_escribir_id' => $row[27],
            'prm_operaciones_id' => $row[28],
            'prm_aprobado_id' => $row[29],
            'prm_educacion_id' => $row[30],
            'prm_estudia_id' => $row[31],
            'prm_cualGrupo_id'=>2316,
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ]);
    }
}
