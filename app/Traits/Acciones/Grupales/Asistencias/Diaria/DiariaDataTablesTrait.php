<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria;



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
                'titunuev' => 'NUEVA ASISTENCIA DIARIA',
                'titulist' => 'LISTA DE ASISTENCIAS DIARIAS',
                'archdttb' => 'Acomponentes.Adatatable.index',
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
                         ['td' => 'NUMERO PAGINA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'UPI/DEPENDENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'LOCALIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'UPZ', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'BARRIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ESPACIO DONDE SE REALIZA LA ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'NONBRE DEL PROGRAMA O ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'GRUPO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
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
                     ['data' => 's_localidad', 'name' => 'sis_localidads.s_localidad'],
                     ['data' => 's_upz', 'name' => 'sis_upzs.s_upz'],
                     ['data' => 's_barrio', 'name' => 'sis_barrios.s_barrio'],
                     ['data' => 'lugactiv', 'name' => 'lugactiv.nombre as lugactiv'],
                     ['data' => 'actividad', 'name' => 'actividad.nombre as actividad'],
                     ['data' => 'grupo', 'name' => 'grupo.nombre as grupo'],
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

    public function getAsdSisNnaj()
    {

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA ASISTENCIA DIARIA',
                'titulist' => 'LISTA DE ASISTENCIAS DIARIAS',
                'archdttb' => 'Acomponentes.Adatatable.index',
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
                         ['td' => 'UPI/DEPENDENCIA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'LOCALIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'UPZ', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'BARRIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'GRUPO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                         ['td' => 'ACTIVIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                     ['data' => 'botonexx', 'name' => 'botonexx'],
                     ['data' => 'id', 'name' => 'ae_encuentros.id'],
                     ['data' => 'dependencia', 'name' => 'sis_depens.nombre as dependencia'],
                     ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
                     ['data' => 's_localidad', 'name' => 'sis_localidads.s_localidad'],
                     ['data' => 's_upz', 'name' => 'sis_upzs.s_upz'],
                     ['data' => 's_barrio', 'name' => 'sis_barrios.s_barrio'],
                     ['data' => 'lugactiv', 'name' => 'lugactiv.nombre as lugactiv'],
                     ['data' => 'actividad', 'name' => 'actividad.nombre as actividad'],
                     ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],
            ]
        ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ;
    }
}
