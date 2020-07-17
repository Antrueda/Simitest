<?php

namespace App\Imports\Vsi;

use App\Models\sicosocial\VsiEducacion;
use Maatwebsite\Excel\Concerns\ToModel;

class VsiEducacionImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        //seccion de validaciones

        //    echo 'cedula   ' . $row[0].'<br>';

        // trae la FK de una persona - NO ES NECESARIO
        // $nnajxxxx=Vsi::select(['vsis.id'])
        // ->join('sis_nnajs','vsis.sis_nnaj_id','=','sis_nnajs.id')
        // ->join('fi_datos_basicos','sis_nnajs.id','=','fi_datos_basicos.sis_nnaj_id')
        // ->where('fi_datos_basicos.s_documento',$row[0])
        // ->first();
        // $nnajxxxx=FiDatosBasico::where('s_documento',$row[0])->first();

        //verificación de lo que tiene el array
        // ddd( $nnajxxxx->SisNnaj->vsi[0]->id.' = '. $diiddii->id);

        // echo 'id algooo   ' . $nnajxxxx->sis_nnaj_id . "<br/>";

        // //  tabla padre que indica que un  nnaj puede tener varias vsi        
        $dataxxxx = [
            'vsi_id' => $row[0],
            'prm_estudia_id' => $row[1],
            'dia' => $row[2],
            'mes' => $row[3],
            'ano' => $row[4],
            'prm_motivo_id' => $row[5],
            'prm_rendimiento_id' => $row[6],
            'prm_dificultad_id' => $row[7],
            'prm_leer_id' => $row[8],
            'prm_escribir_id' => $row[9],
            'descripcion' => $row[10],
            'user_crea_id => 1',
            'user_edita_id => 1',
            'sis_esta_id => 1',
            'created_at => 1',
            'updated_at => 1',
        ];
        return new VsiEducacion($dataxxxx);
    }
}