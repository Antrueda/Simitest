<?php

namespace App\Traits\Acciones\Grupales\Matricula;

use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
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
                    'titunuev' => 'REGISTRAR NUEVA MATRICULA',
                    'titulist' => 'LISTA DE MATRICULAS',
                    'titupreg'=> '',
                    'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
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
                            ['td' => 'FECHA DE SALIDA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'BENEFICIARIOS', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'RESPONSABLE DEL CARGUE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'i_matriculas.id'],
                        ['data' => 'fecha', 'name' => 'i_matriculas.fecha'],
                        ['data' => 'upi', 'name' => 'upi.nombre as upi'],
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
        }else {
            $vercrear=false;
            $parametr=IMatricula::count('id')+1;
            $rutaxxxx='imatriculannaj';

            if($dataxxxy['dataxxxx']['modeloxx']!=null){
                $vercrear=true;
                $parametr=$dataxxxy['dataxxxx']['modeloxx']->id;
                $rutaxxxx='imatriculannaj';
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
                            ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'NOMBRE IDENTITARIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'TIPO DE DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA DE NACIMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'GRADO MATRICULADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'GRUPO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTRATEGIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'OBSERVACIONES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                        ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                        ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                        ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                        ['data' => 's_nombre_identitario', 'name' => 'nnaj_sexos.s_nombre_identitario'],
                        ['data' => 'tipodocu', 'name' => 'tipodocu.nombre as tipodocu'],
                        ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                        ['data' => 'd_nacimiento', 'name' => 'd_nacimiento'],
                        ['data' => 'grado', 'name' => 'grado.nombre as grado'],
                        ['data' => 'grupo', 'name' => 'grupo.nombre as grupo'],
                        ['data' => 'estrategia', 'name' => 'estrategia.nombre as estrategia'],
                        ['data' => 'observaciones', 'name' => 'i_matricula_nnajs.observaciones'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatablennaj',
                    'permisox' => $dataxxxx['permisox'],
                    'routxxxx' => 'imatriculannaj',
                    'parametr' => [$parametr],
                ];        
         } 
        $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
        return $dataxxxx;
    }
}
