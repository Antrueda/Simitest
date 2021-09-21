<?php

namespace App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait PruediagDataTablesTrait
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
        $dataxxxx['ruarchjs'] = [];
        return $dataxxxx;
    }
    public function getDtGrados()
    {

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVO GRADO',
                'titulist' => 'LISTA DE GRADOS',
                'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listgrad', []),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'GRADO', 'widthxxx' => 300, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'eda_grados.id'],
                    ['data' => 's_grado', 'name' => 'eda_grados.s_grado'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],

            ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }
    public function getDtAsignaturas()
    {

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVA ASIGNATURA',
                'titulist' => 'LISTA DE ASIGNATURAS',
                'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
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
                        ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ASIGNATURA', 'widthxxx' => 300, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'eda_asignatus.id'],
                    ['data' => 's_asignatura', 'name' => 'eda_asignatus.s_asignatura'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],

            ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getDtPresaberes()
    {

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVO PRESABER',
                'titulist' => 'LISTA DE PRESABERS',
                'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
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
                        ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRESABER', 'widthxxx' => 300, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'eda_presabers.id'],
                    ['data' => 's_presaber', 'name' => 'eda_presabers.s_presaber'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],

            ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
    }

    public function getDtEdasigras($dataxxxx)
    {

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVA ASIGNATURA',
                'titulist' => 'LISTA DE ASIGNATURAS ASIGANDAS',
                'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', [$dataxxxx['padrexxx']]),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'dataxxxx'=>[],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ASIGNATURA', 'widthxxx' => 300, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'eda_asignatus.id'],
                    ['data' => 's_asignatura', 'name' => 'eda_asignatus.s_asignatura'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'asignada',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [$dataxxxx['padrexxx']],

            ];
        if (auth()->user()->can($this->opciones['permisox'] . '-asignarx')) {
            $this->opciones['tablasxx'][] =
                [
                    'titunuev' => 'NUEVA ASIGNATURA',
                    'titulist' => 'LISTA DE ASIGNATURAS PARA ASIGANAR',
                    'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
                    'vercrear' => false,
                    'urlxxxxx' => route($this->opciones['permisox'] . '.asignarx', [$dataxxxx['padrexxx']]),
                    'permtabl' => [
                        $this->opciones['permisox'] . '-leerxxxx',
                        $this->opciones['permisox'] . '-crearxxx',
                        $this->opciones['permisox'] . '-editarxx',
                        $this->opciones['permisox'] . '-borrarxx',
                        $this->opciones['permisox'] . '-activarx',
                    ],
                    'dataxxxx'=>[],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ASIGNATURA', 'widthxxx' => 300, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'eda_asignatus.id'],
                        ['data' => 's_asignatura', 'name' => 'eda_asignatus.s_asignatura'],

                    ],
                    'tablaxxx' => 'asignarx',
                    'permisox' => $this->opciones['permisox'],
                    'permnuev' => 'crearxxx',
                    'parametr' => [$dataxxxx['padrexxx']],

                ];
                $this->opciones['ruarchjs'][] =
                ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablasel'];
        }
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];

    }

    public function getDtEdasipres($dataxxxx)
    {

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVA ASIGNATURA',
                'titulist' => 'LISTA DE PRESABERES ASIGANDOS',
                'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', [$dataxxxx['padrexxx']]),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'dataxxxx'=>[],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRESABER', 'widthxxx' => 300, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'eda_presabers.id'],
                    ['data' => 's_presaber', 'name' => 'eda_presabers.s_presaber'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'asignada',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [$dataxxxx['padrexxx']],

            ];
        if (auth()->user()->can($this->opciones['permisox'] . '-asignarx')) {
            $this->opciones['tablasxx'][] =
                [
                    'titunuev' => 'NUEVA ASIGNATURA',
                    'titulist' => 'LISTA DE ASIGNATURAS PARA ASIGANAR',
                    'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
                    'vercrear' => false,
                    'urlxxxxx' => route($this->opciones['permisox'] . '.asignarx', [$dataxxxx['padrexxx']]),
                    'permtabl' => [
                        $this->opciones['permisox'] . '-leerxxxx',
                        $this->opciones['permisox'] . '-crearxxx',
                        $this->opciones['permisox'] . '-editarxx',
                        $this->opciones['permisox'] . '-borrarxx',
                        $this->opciones['permisox'] . '-activarx',
                    ],
                    'dataxxxx'=>[],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRESABER', 'widthxxx' => 300, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'eda_presabers.id'],
                        ['data' => 's_presaber', 'name' => 'eda_presabers.s_presaber'],
                    ],
                    'tablaxxx' => 'asignarx',
                    'permisox' => $this->opciones['permisox'],
                    'permnuev' => 'crearxxx',
                    'parametr' => [$dataxxxx['padrexxx']],

                ];
                $this->opciones['ruarchjs'][] =
                ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablasel'];
        }
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];

    }
}
