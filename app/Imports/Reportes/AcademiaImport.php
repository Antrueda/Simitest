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

$camposxx=['NNAJ_ID',	'ANO',	'NUMERO_MATRICULA',	'UPI_NUEVA',	'ESTRATEGIA',	'GRADO',	
'GRUPO',	'NUMERO_DOCUMENTO',	'PRIMER_NOMBRE',	'SEGUNDO_NOMBRE',	'PRIMER_APELLIDO',	'SEGUNDO_APELLIDO',	
'FECHA_NACIMIENTO',	'EDAD',	'ESTADO',	'TIPO_DOCUMENTO',	'FECHA_MODIFICACION',	'FECHA_REGISTRO',	'OBSERVACIONES',	
'SEXO',	'ID_MATRICULA',	'MUNICIPIO_NACIMIENTO',	'DEPARTAMENTO_NACIMIENTO',	'PAIS_NACIMIENTO',	
'TELEFONOS',	'ETNIA',	'TIPO_DISCAPACIDAD',	'FECHA_CREACION_SIMI',	'Copia_del_documento',	'Certificados_académicos',	'Grado',	
'Asignaturas_del_acta',	'Formato_de_Matrícula',	'Cuenta_con_Matrícula_en_SIMAT',	'Observación',	'SIMI NUEVO',	'OBSERVACIONES'
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
