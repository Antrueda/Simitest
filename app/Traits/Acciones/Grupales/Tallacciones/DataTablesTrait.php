<?php

namespace App\Traits\Acciones\Grupales\Tallacciones;

use App\Models\Acciones\Grupales\AgResponsable;

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
    public function getTablas($dataxxxx)
    {

        if ($dataxxxx['tablinde']) {
            $dataxxxx['tablasxx'] = [
                [
                    'titunuev' => 'NUEVO TALLER Y ACCIÓN FORMATIVA',
                    'titulist' => 'LISTA DE TALLERES Y ACCIONES FORMATIVAS',
                    'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'titupreg' => '',
                    'vercrear' => true,
                    'urlxxxxx' => route($dataxxxx['routxxxx'] . '.listaxxx', []),
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
                            ['td' => 'UPI/ÁREA/DEPENDENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA REGISTRO ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ÁREA/CONTEXTO PEDAGÓGICO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'TEMA GENERAR', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'NOMBRE TALLER', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'ag_actividads.id'],
                        ['data' => 'sis_deporigen_id', 'name' => 'sis_depens.nombre as sis_deporigen_id'],
                        ['data' => 'd_registro', 'name' => 'ag_actividads.d_registro'],
                        ['data' => 'area', 'name' => 'areas.nombre as area'],
                        ['data' => 'tema', 'name' => 'ag_temas.s_tema as tema'],
                        ['data' => 'taller', 'name' => 'ag_tallers.s_taller as taller'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatable',
                    'permisox' => $dataxxxx['permisox'],
                    'routxxxx' => $dataxxxx['routxxxx'],
                    'parametr' => [],
                ]
            ];
        } else {
            $responsa = AgResponsable::where('ag_actividad_id', $dataxxxx['modeloxx']->id)->get();
            $dataxxxx['tablasxx'][] =
                [
                    'titunuev' => 'AGREGAR RESPONSABLE',
                    'titulist' => 'LISTA DE RESPONSABLES',
                    'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'titupreg' => 'Funcionarios y/o contratistas que realizan la actividada/taller:',
                    'vercrear' => (count($responsa) <= 2 ? true : false),
                    'urlxxxxx' => route($dataxxxx['routxxxx'] . '.responsa', $dataxxxx['modeloxx']->id),
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
                            ['td' => 'RESPONSABLE DE LA ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'ag_responsables.id'],
                        ['data' => 'apellido1', 'name' => 'user.s_primer_apellido as apellido1'],
                        ['data' => 'apellido2', 'name' => 'user.s_segundo_apellido as apellido2'],
                        ['data' => 'nombre1', 'name' => 'user.s_primer_nombre as nombre1'],
                        ['data' => 'nombre2', 'name' => 'user.s_primer_nombre as nombre2'],
                        ['data' => 'i_prm_responsable_id', 'name' => 'parametros.name as i_prm_responsable_id'],
                        ['data' => 'documento1', 'name' => 'user.s_documento as documento1'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatable',
                    'permisox' => $dataxxxx['permisox'],
                    'routxxxx' => 'agrespon',
                    'parametr' => [$dataxxxx['modeloxx']->id],
                ];

            $dataxxxx['tablasxx'][] =
                [
                    'titunuev' => 'AGREGAR ASISTENTES',
                    'titulist' => 'LISTA DE ASISTENTES',
                    'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'titupreg' => 'Participantes de la actividad y/o taller:',
                    'vercrear' => true,
                    'urlxxxxx' => route($dataxxxx['routxxxx'] . '.agasiste', $dataxxxx['modeloxx']->id), // $this->opciones["urlxxxas"] = 'api/ag/asistentes';
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
                            ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                        ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                        ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                        ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                        ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatableasistentes',
                    'permisox' => $dataxxxx['permisox'],
                    'routxxxx' => 'agasiste',
                    'parametr' => [$dataxxxx['modeloxx']->id],
                ];        
         
             $dataxxxx['tablasxx'][] =
                 [
                     'titunuev' => 'AGREGAR RECURSO',
                     'titulist' => 'LISTA DE RECUSOS',
                     'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                     'titupreg' => 'Relación de recursos a emplear:',
                     'vercrear' => true,
                     'urlxxxxx' => route('agrelacion.agrecurso', $dataxxxx['modeloxx']->id),//  $this->opciones['urlxxxre'] = 'api/ag/relaciones';
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
                             ['td' => 'Tipo de recurso', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                             ['td' => 'Recurso', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                             ['td' => 'Cantidad', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                             ['td' => 'Unidad de medida', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                             ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ]
                     ],
                     'columnsx' => [
                         ['data' => 'botonexx', 'name' => 'botonexx'],
                         ['data' => 'trecurso', 'name' => 'parametros.nombre as trecurso'],
                         ['data' => 'recursox', 'name' => 'ag_recursos.s_recurso as recursox'],
                         ['data' => 'cantidad', 'name' => 'ag_relacions.i_cantidad as cantidad'],
                         ['data' => 'umedidax', 'name' => 'parametros.nombre as umedidax'],
                         ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                     ],
                     'tablaxxx' => 'datatablerecursos',
                     'permisox' => $dataxxxx['permisox'],
                     'routxxxx' => 'agrelacion',
                     'parametr' => [$dataxxxx['modeloxx']->id],
                 ];
        }
        $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
        return $dataxxxx;
    }
}
