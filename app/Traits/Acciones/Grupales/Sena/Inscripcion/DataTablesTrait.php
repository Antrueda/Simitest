<?php

namespace App\Traits\Acciones\Grupales\Sena\Inscripcion;

use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\InscripcionConvenios\InscriConve;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\Pivotes\SalidaJovene;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DataTablesTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function getTablas($dataxxxy)
    {
        $dataxxxx=$dataxxxy['opciones'];
        if ($dataxxxx['tablinde']) {
            $dataxxxx['tablasxx'] = [
                [
                    'titunuev' => 'REGISTRAR NUEVA INSCRIPCIÓN FORMACIÓN TÉCNICA CONVENIOS',
                    'titulist' => 'LISTA DE INSCRIPCIONES FORMACIÓN TÉCNICA CONVENIOS',
                    'titupreg'=> '',
                    'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.indexsearch',
                    'vercrear' => true,
                    'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx'),
                    'permtabl' => [
                        $dataxxxx['permisox'] . '-leer',
                        $dataxxxx['permisox'] . '-crear',
                        $dataxxxx['permisox'] . '-editar',
                        $dataxxxx['permisox'] . '-borrar',
                        $dataxxxx['permisox'] . '-activar',
                    ],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA DE DILIGENCIAMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'CONVENIO/ENTIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PROGRAMA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'TIPO DE PROGRAMA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FICHA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'MODALIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA DE INICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA FINAL ', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'BENEFICIARIOS', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'RESPONSABLE DEL CARGUE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'inscri_conves.id'],
                        ['data' => 'fecha', 'name' => 'inscri_conves.fecha'],
                        ['data' => 'conve', 'name' => 'convenios.nombre as conve'],
                        ['data' => 'progra', 'name' => 'programas.nombre as progra'],
                        ['data' => 'tipopro', 'name' => 'tipoprogramas.nombre as tipopro'],
                        ['data' => 'numficha', 'name' => 'inscri_conves.numficha'],
                        ['data' => 'modal', 'name' => 'modalidads.nombre as modal'],
                        ['data' => 'fecha_inicio', 'name' => 'inscri_conves.fecha_inicio'],
                        ['data' => 'fecha_final', 'name' => 'inscri_conves.fecha_final'],
                        ['data' => 'contado', 'name' => 'contado'],
                        ['data' => 'name', 'name' => 'users.name'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatable',
                    'permisox' => $this->opciones['permisox'],
                    'routxxxx' => $this->opciones['routxxxx'],
                    'parametr' => [],
                ]
            ];
            $dataxxxx['searchxx']=[0,0,'FECHA DE DILIGENCIAMIENTO','CONVENIO/ENTIDAD','PROGRAMA','TIPO DE PROGRAMA','FICHA','MODALIDAD','FECHA DE INICIO','FECHA FINAL','BENEFICIARIOS','RESPONSABLE DEL CARGUE',0];

        }else {
            $vercrear=false;
            $parametr=InscriConve::count('id')+1;
            $rutaxxxx='imatriculannaj';

            if($dataxxxy['dataxxxx']['modeloxx']!=null){
                $vercrear=true;
                $parametr=$dataxxxy['dataxxxx']['modeloxx']->id;
                $rutaxxxx='matriculannaj';
            }
            
            $dataxxxx['tablasxx'][] =
                [
                    'titunuev' => 'AGREGAR BENEFICIARIOS',
                    'titulist' => 'BENEFICIARIOS ASOCIADOS',
                    'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'titupreg' => '',
                    'vercrear' => $vercrear,
                    'urlxxxxx' => route($dataxxxx['routxxxx'] . '.'.$rutaxxxx,$parametr ), // $this->opciones["urlxxxas"] = 'api/ag/asistentes';
                    'permtabl' => [
                        $dataxxxx['permisox'] . '-leer',
                        $dataxxxx['permisox'] . '-crear',
                        $dataxxxx['permisox'] . '-editar',
                        $dataxxxx['permisox'] . '-borrar',
                        $dataxxxx['permisox'] . '-activar',
                    ],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'NOMBRE IDENTITARIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'TIPO DE DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA DE NACIMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ETAPA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'MODALIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'OBSERVACIONES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'sis_nnaj_id', 'name' => 'i_matricula_nnajs.sis_nnaj_id'],
                        ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                        ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                        ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                        ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                        ['data' => 's_nombre_identitario', 'name' => 'nnaj_sexos.s_nombre_identitario'],
                        ['data' => 'tipodocu', 'name' => 'tipodocu.nombre as tipodocu'],
                        ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                        ['data' => 'd_nacimiento', 'name' => 'nnaj_nacimis.d_nacimiento'],
                        ['data' => 'documento', 'name' => 'documento.nombre as documento'],
                        ['data' => 'certifica', 'name' => 'certifica.nombre as certifica'],
                        ['data' => 'observaciones', 'name' => 'i_matricula_nnajs.observaciones'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatablennaj',
                    'permisox' => $dataxxxx['permisox'],
                    'routxxxx' => 'inscrnnaj',
                    'parametr' => [$parametr],
                ];        
         } 
        $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
        return $dataxxxx;
    }
}


