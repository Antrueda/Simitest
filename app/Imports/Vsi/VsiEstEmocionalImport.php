<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiEstEmocional;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiEstEmocionalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        echo $row[0].'<pre>';
        $dataxxxx = [
            'vsi_id' => $row[0],
            'prm_siente_id' => $row[1],
            'prm_contexto_id' => $row[2],
            'descripcion_siente' => $row[3],
            'prm_reacciona_id' => $row[4],
            'descripcion_reacciona' => $row[5],
            'descripcion_adecuado' => $row[6],
            'descripcion_dificulta' => $row[7],
            'prm_estresante_id' => $row[8],
            'descripcion_estresante' => $row[9],
            'prm_morir_id' => $row[10],
            'dia_morir' => $row[11],
            'mes_morir' => $row[12],
            'ano_morir' => $row[13],
            'prm_pensamiento_id' => $row[14],
            'prm_amenaza_id' => $row[15],
            'prm_intento_id' => $row[16],
            'ideacion' => $row[17],
            'amenaza' => $row[18],
            'intento' => $row[19],
            'prm_riesgo_id' => $row[23],
            'dia_ultimo' => $row[20],
            'mes_ultimo' => $row[21],
            'ano_ultimo' => $row[22],
            'descripcion_motivo' => $row[24],
            'prm_lesiva_id' => $row[25],
            'descripcion_lesiva' => $row[26],
            'prm_sueno_id' => $row[27],
            'dia_sueno' => $row[28],
            'mes_sueno' => $row[29],
            'ano_sueno' => $row[30],
            'descripcion_sueno' => $row[31],
            'prm_alimenticio_id' => $row[32],
            'dia_alimenticio' => $row[33],
            'mes_alimenticio' => $row[34],
            'ano_alimenticio' => $row[35],
            'descripcion_alimenticio' => $row[36],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
            'created_at => 1',
            'updated_at => 1',
            
        ];
        print_r($dataxxxx);
        return new VsiEstEmocional($dataxxxx);
    }
}