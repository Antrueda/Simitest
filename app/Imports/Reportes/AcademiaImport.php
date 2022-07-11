<?php

namespace App\Imports\Reportes;

use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Simianti\Ge\GeNnaj;
use App\Models\Simianti\Ge\GeNnajDocumento;
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

$camposxx=[
    'nnaj_id',	//0
'ano',	//1
'numero_matricula',	//2
'upi_nueva',	//3
'estrategia',	//4
'grado',	//5
'grupo',	//6
'numero_documento',	//7
'primer_nombre',	'segundo_nombre',	'primer_apellido',	'segundo_apellido',	
'fecha_nacimiento',	'edad',	'estado',	'tipo_documento',	'fecha_modificacion',	'fecha_registro',	'observaciones',	
'sexo',	'id_matricula',	'municipio_nacimiento',	'departamento_nacimiento',	'pais_nacimiento',	
'telefonos',	'etnia',	'tipo_discapacidad',	'fecha_creacion_simi',	'copia_del_documento',	'certificados_academicos',	'grado',	
'asignaturas_del_acta',	'formato_de_matricula',	'cuenta_con_matricula_en_simat',	'observacion',	'simi nuevo',	'observaciones'
    ];

echo '[';
        // print_r($row);
        // ddd(count($camposxx),count($row));
$nnajxxxx=SisNnaj::where('simianti_id',$row[0])->first();
for ($i=0; $i <count($camposxx) ; $i++) { 
    echo "'".strtolower($camposxx[$i])."'=>'$row[$i]',";
}
echo '],<br>';

if (is_null($nnajxxxx)) {
    $document=NnajDocu::where('s_documento',$row[7])->first();
   // echo $document->fi_datos_basico->sis_nnaju;
    // GeNnajDocumento::where('numero_documento',$row[7])->first();
    if (is_null($document)) {
    ///secho $row[0].'<br>';
    }
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
        //echo '<pre>';
      // ddd($row);
    }
}
