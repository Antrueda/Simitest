<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria;

use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DiariaDataTablesTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */

    public function getTablasModulo($dataxxxx)
    {
        $dataxxxx['tablasxx'] = [];
        $dataxxxx['ruarchjs'] = [
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla']
        ];
        return $dataxxxx;
    }

    public function getTablas()
    {

        $this->opciones['tablasxx'] = [
            [
                'buscarPorCampo' => true,
                'titunuev' => 'NUEVA ASISTENCIA DIARIA',
                'titulist' => 'LISTA DE ASISTENCIAS DIARIAS',
                'archdttb' => $this->opciones['rutacarp'].'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', []),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'CONSECUTIVO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'NÚMERO PAGINA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'UPI/DEPENDENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ESPACIO DONDE SE REALIZA LA ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'NOMBRE DEL PROGRAMA O ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'GRUPO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ACTIVIDADES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'TOTAL BENEFICIARIOS', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'FECHA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                     ['data' => 'botonexx', 'name' => 'botonexx'],
                     ['data' => 'id', 'name' => 'asd_diarias.id'],
                     ['data' => 'consecut', 'name' => 'asd_diarias.consecut'],
                     ['data' => 'numepagi', 'name' => 'asd_diarias.numepagi'],
                     ['data' => 'dependencia', 'name' => 'sis_depens.nombre as dependencia'],
                     ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
                     ['data' => 'lugactiv', 'name' => 'lugactiv.nombre as lugactiv'],
                     ['data' => 'actividad', 'name' => 'actividad.nombre as actividad'],
                     ['data' => 'grupo', 'name' => 'grupo.nombre as grupo'],
                     ['data' => 'activida', 'name' => 'activida.nombre as activida'],
                     ['data' => 'contado', 'name' => 'contado'],
                     ['data' => 'fechdili', 'name' => 'asd_diarias.fechdili'],
                     ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
    }

    public function getAsdSisNnaj($dataxxxx)
    {
        $this->opciones['asistenc'] =AsdDiaria::find($dataxxxx)->first();
       // ddd($this->opciones['asistenc']);
        $this->opciones['tablasxx'][] = 
            [
                'titunuev' => 'NUEVA ASISTENCIA DIARIA',
                'titulist' => 'LISTA DE NNAJ AGREGADOS',
                'asistenc' => $this->opciones['asistenc'],
                'archdttb' => $this->opciones['rutacarp'].'Acomponentes.Adatatable.asistencia',
                'vercrear' => false,
                'urlxxxxx' => route( 'nnajasdi.listaxxx', $dataxxxx['parametr']),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                     ['data' => 'botonexx', 'name' => 'botonexx'],
                     ['data' => 'id', 'name' => 'asd_sis_nnajs.id'],
                     ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                     ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                     ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre',],
                     ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido',],
                     ['data' => 's_segundo_apellido', 'name' =>  'fi_datos_basicos.s_segundo_apellido',   ],  
                     ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'dtbnnajagregado',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],
            
        ];

        $this->opciones['tablasxx'][] = 
            [
                'titunuev' => 'NUEVA ASISTENCIA DIARIA',
                'titulist' => 'LISTA DE NNAJ AGREGAR',
                'archdttb' => $this->opciones['rutacarp'].'Acomponentes.Adatatable.index',
                'vercrear' => false,
                'urlxxxxx' => route('nnajasdi.listagre', $dataxxxx['parametr']),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                     ['data' => 'botonexx', 'name' => 'botonexx'],
                     ['data' => 'id', 'name' => 'sis_nnajs.id'],
                     ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                     ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                     ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre',],
                     ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido',],
                     ['data' => 's_segundo_apellido', 'name' =>  'fi_datos_basicos.s_segundo_apellido',   ],  
                     ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'dtagregarnnaj',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],
            
        ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablaNnaj']
        ;
    }

    public function getAsdNnajActividades($dataxxxx)
    {
        $this->opciones['tablasxx'][] = 
            [
                'titunuev' => 'ASIGNAR ACTIVIDADES',
                'titulist' => 'LISTA ASIGNAR  ACTIVIDADES',
                'archdttb' => $this->opciones['rutacarp'].'Acomponentes.Adatatable.index',
                'vercrear' => true,
                
                'urlxxxxx' => route( 'nnajacti.listaxxx', $dataxxxx['parametr']),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'TIPO DE ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'NOVEDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],

                    ]
                ],
                'columnsx' => [
                     ['data' => 'botonexx', 'name' => 'botonexx'],
                     ['data' => 'id', 'name' => 'asd_nnaj_actividades.id'],
                     ['data' => 'actividad', 'name' => 'asd_actividads.nombre as actividad'],
                     ['data' => 'tipo', 'name' =>  'asd_tiactividads.nombre as tipo'],
                     ['data' => 'novedad', 'name' => 'novedad.nombre'],
                     ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],

                ],
                'tablaxxx' => 'dtbnnajagregado',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [$dataxxxx['parametr']],
            
        ];

        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ;
    }
}
