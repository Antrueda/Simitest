<?php

namespace App\Imports\Reportes;

use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\sistema\SisNnaj;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
 
class AcademiaImport implements ToModel
{
   
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
$nnajxxxx=SisNnaj::where('simianti_id',$row[0])->first();

if (is_null($nnajxxxx)) {
    echo $row[0].'<br>'; 
}
        // IMatricula::create( [
        //     'fecha', 
        //     'observaciones', 
        //     'user_doc1',
        //     'user_doc2',
        //     'responsable_id',
        //     'apoyo_id',
        //     'prm_grado',
        //     'prm_grupo',
        //     'prm_estra',
        //     'prm_upi_id',
        //     'prm_serv_id',
        //     'prm_periodo',
        //     'user_crea_id', 
        //     'user_edita_id', 
        //     'sis_esta_id',
        // ]);
        echo '<pre>';
      // ddd($row);
    }
}
