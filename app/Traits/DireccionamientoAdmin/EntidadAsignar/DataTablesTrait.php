<?php

namespace App\Traits\DireccionamientoAdmin\EntidadAsignar;



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
                'titunuev' => 'ASIGNAR PROGRAMA Y/O SERVICIO',
                'titulist' => 'LISTA DE ASIGNACIONES',
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
                        ['td' => 'ENTIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'sis_entidad_sis_servicio.id'],
                    ['data' => 'entidad', 'name' => 'sis_entidads.nombre'],
                    ['data' => 'servicio', 'name' => 'sis_servicios.s_servicio'],
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
