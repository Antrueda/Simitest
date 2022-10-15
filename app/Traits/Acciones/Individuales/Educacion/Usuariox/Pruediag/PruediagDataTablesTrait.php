<?php

namespace App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag;



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
    public function getDtPruediagIndex($dataxxxx)
    {
        
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'REGISTRAR PRUEBA DIAGNÓSTICA',
                'titulist' => 'LISTA DE PRUEBAS DIAGNÓSTICA',
                'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
                'vercrear' => true,
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                ],
                'dataxxxx' => [],
                'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', [$dataxxxx['padrexxx']->fi_datos_basico->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA DE DILIGENCIAMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'GRADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI/DEPENDENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PERSONA QUIEN DILIGIENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ],

                ],

                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'edu_pruediags.id'],
                    ['data' => 'fechdili', 'name' => 'edu_pruediags.fechdili'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 's_grado', 'name' => 'eda_grados.s_grado'],
                    ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
                    ['data' => 'name', 'name' => 'users.name'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permnuev' => 'crearxxx',
                'permisox' => $this->opciones['permisox'],
                'parametr' => [$dataxxxx['padrexxx']->id],
            ]
        ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . ucfirst($this->opciones['permisox']) . '.Js.tabla']
        ;
    }

    public function getDtEdupresaIndex()
    {
        $padrexxx = $this->opciones['modeloxx'] == null ? 0 : $this->opciones['modeloxx']->id;
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'CREAR PRESABER',
                'titulist' => 'PRESABER',
                'dataxxxx' => [],
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => $this->vercrear,
                'urlxxxxx' => route('edupresa.listaxxx', [$padrexxx]),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ASIGNATURA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRESABER', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FUNCIONARIO(A) /CONTRATISTA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'sis_nnajs.id'],
                    ['data' => 's_asignatura', 'name' => 'eda_asignatus.s_asignatura'],
                    ['data' => 's_presaber', 'name' => 'eda_presabers.s_presaber'],
                    ['data' => 'name', 'name' => 'users.name'],
                    ['data' => 's_estado', 'name' => 'users.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permnuev' => 'crearxxx',
                'permisox' => 'edupresa',
                'parametr' => [$padrexxx],
            ],

        ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . ucfirst($this->opciones['permisox']) . '.Js.tabla']
        ;
    }
}
