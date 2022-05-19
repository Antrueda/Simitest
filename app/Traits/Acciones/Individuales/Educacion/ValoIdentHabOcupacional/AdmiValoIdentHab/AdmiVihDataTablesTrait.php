<?php

namespace App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab;
/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiVihDataTablesTrait
{
    public function getTablasModulo($dataxxxx)
    {
        $dataxxxx['tablasxx'] = [];
        $dataxxxx['ruarchjs'] = [
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla']
        ];
        return $dataxxxx;
    }

    public function getTablasAreas()
    {  
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA ÁREA',
                'titulist' => 'LISTA ÁREAS',
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
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DESCRIPCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'pvf_areas.id'],
                    ['data' => 'nombre', 'name' => 'pvf_areas.nombre'],
                    ['data' => 'descripcion', 'name' => 'pvf_areas.descripcion'],
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

    public function getTablasSubareas($padrexxx)
    {
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA SUB-ÁREA',
                'titulist' => 'LISTA DE SUB-ÁREAS',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$padrexxx]),
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
                        ['td' => 'NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DESCRIPCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO DE AREA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'pvf_actividades.id'],
                    ['data' => 'nombre', 'name' => 'pvf_actividades.nombre'],
                    ['data' => 'descripcion', 'name' => 'pvf_actividades.descripcion'],
                    ['data' => 'area', 'name' => 'pvf_areas.nombre AS area'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [$padrexxx],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
    }
}
