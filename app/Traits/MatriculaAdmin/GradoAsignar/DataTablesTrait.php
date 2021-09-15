<?php

namespace App\Traits\MatriculaAdmin\GradoAsignar;



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

        $dataxxxx['tablasxx'] = [
            [
                'titunuev' => 'ASIGNAR GRADO',
                'titulist' => 'LISTA DE UPI Y SERVICIOS CON GRADO',
                'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
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
                        ['td' => 'ACCIONES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'GRADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'grado_asignars.id'],
                    ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
                    ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
                    ['data' => 'grado', 'name' => 'grado.nombre as grado'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $dataxxxx['permisox'],
                'routxxxx' => $dataxxxx['routxxxx'],
                'parametr' => [],
            ]
        ];
        $dataxxxx['ruarchjs'] = [
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla']
        ];
        return $dataxxxx;
    }
}

/*        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'SERVICIO',
                'titulist' => 'LISTA DE SERVICIOS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' =>
                    $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'pueditar', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar')],
                    ['campoxxx' => 'puedever', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-leer')],
                    ['campoxxx' => 'puedinac', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-borrar')],
                ],

                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/sis/servicio',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'SERVICIO'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'sis_depeservs.id'],
                    ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => $this->opciones['tablaxxx'],
                'permisox' => 'servdepe',
                'routxxxx' => 'servdepe',
                'parametr' => $this->opciones['botoform'][0]['routingx'][1],
            ]

        ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }