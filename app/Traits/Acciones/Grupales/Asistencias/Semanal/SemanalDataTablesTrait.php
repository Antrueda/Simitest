<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Semanal;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait SemanalDataTablesTrait
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

    /**
     * Cabecera de la tabla de Asistencias Semanales
     *
     * @return void
     */
    public function getTablas()
    {
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA ASISTENCIA SEMANAL',
                'titulist' => 'LISTA DE PLANILLAS ASISTENCIA SEMANAL',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', []),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                // Todo: Modificar cabecera y columnas
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI/DEPENDENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA INICIAL', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA FINAL', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'asissemas.id'],
                    ['data' => 'dependencia', 'name' => 'sis_depens.nombre as dependencia'],
                    ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
                    ['data' => 'actividad', 'name' => 'actividad.nombre as actividad'],
                    ['data' => 'created_at', 'name' => 'asissemas.created_at'],
                    ['data' => 'updated_at', 'name' => 'asissemas.updated_at'],
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

    /**
     * Cabecera de la tabla de NNAJs para seleccionar
     *
     * @return void
     */
    public function getTablasNnajConAsistencia($model)
    {
        $this->opciones['tablasxx'][] = [
            'titunuev' => '',
            'titulist' => 'LISTA DE NNAJ RELACIONADOS A ESTA ASISTENCIA',
            'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
            'vercrear' => false,
            'urlxxxxx' => route($this->opciones['routxxxx'] . '.listnnaj', [$model]),
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
                    ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NOMBRE IDENTITARIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'TIPO DE DOC', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'No DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'EDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                ['data' => 's_nombre_identitario', 'name' => 'nnaj_sexos.s_nombre_identitario'],
                ['data' => 'tipo_docu', 'name' => 'tipo_docu.nombre as tipo_docu'],
                ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                ['data' => 'edadxxxx', 'name' => 'edadxxxx'],
            ],
            'tablaxxx' => 'datatable',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => [],
        ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tablannaj'];
    }

    /**
     * Cabecera de la tabla de NNAJs seleccionados
     *
     * @return void
     */
    public function getTablasNnajMatriculados($model)
    {
        $this->opciones['tablasxx'][] = [
            'titunuev' => '',
            'titulist' => 'LISTA DE NNAJ MATRICULADOS',
            'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
            'vercrear' => false,
            'urlxxxxx' => route($this->opciones['routxxxx'] . '.nnajsele', [
                $model
            ]),
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
                    ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NOMBRE IDENTITARIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'TIPO DE DOC', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'No DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'EDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ]
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                ['data' => 's_nombre_identitario', 'name' => 'nnaj_sexos.s_nombre_identitario'],
                ['data' => 'tipo_docu', 'name' => 'tipo_docu.nombre as tipo_docu'],
                ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                ['data' => 'edadxxxx', 'name' => 'edadxxxx'],
            ],
            'tablaxxx' => 'datatable3',
            'permisox' => $this->opciones['permisox'],
            'permnuev' => 'crearxxx',
            'parametr' => [],
        ];
     
    }
}
