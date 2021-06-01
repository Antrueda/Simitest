<?php

namespace App\Traits\Indicadores;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndimoduDataTablesTrait
{
    /**
     * estructura base de la tabla que se va a pintar
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function getTabla($dataxxxx)
    {
        $tablaxxx = [
            'titunuev' => $dataxxxx['titunuev'],
            'titulist' => $dataxxxx['titulist'],
            'archdttb' => $this->opciones['rutacomp'] . 'Adatatable.index',
            'vercrear' => $dataxxxx['vercrear'],
            'urlxxxxx' => route($this->opciones['routxxxx'] . '.'.$dataxxxx['listaxxx'], $dataxxxx['paralist']),
            'permtabl' => [
                $this->opciones['routxxxx'] . '-leerxxxx',
                $this->opciones['routxxxx'] . '-crearxxx',
                $this->opciones['routxxxx'] . '-editarxx',
                $this->opciones['routxxxx'] . '-borrarxx',
                $this->opciones['routxxxx'] . '-activarx',
            ],
            'cabecera' => [
                $dataxxxx['cabecera']
            ],
            'columnsx' => $dataxxxx['columnsx'],
            'tablaxxx' => $dataxxxx['tablaxxx'],
            'routxxxx' => $this->opciones['routxxxx'],
            'parametr' => $dataxxxx['paraboto'],
        ];

        return $tablaxxx;
    }

    /**
     * estructura base de la tabla que se va a pintar
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function getTablAsignar($dataxxxx)
    {
        $tablaxxx = [
            'titunuev' => $dataxxxx['titunuev'],
            'titulist' => $dataxxxx['titulist'],
            'archdttb' => $this->opciones['rutacomp'] . 'Adatatable.index',
            'vercrear' => $dataxxxx['vercrear'],
            'urlxxxxx' => route($this->opciones['routxxxx'] . '.'.$dataxxxx['listaxxx'], $dataxxxx['paralist']),
            'permtabl' => [
                $this->opciones['routxxxx'] . '-crearxxx',
            ],
            'cabecera' => [
                $dataxxxx['cabecera']
            ],
            'columnsx' => $dataxxxx['columnsx'],
            'tablaxxx' => $dataxxxx['tablaxxx'],
            'routxxxx' => $this->opciones['routxxxx'],
            'parametr' => $dataxxxx['paraboto'],
        ];

        return $tablaxxx;
    }


    public function getModuloIndex($dataxxxx)
    {
        $dataxxxx['tablasxx'] = [];
        $dataxxxx['ruarchjs'] = [
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla']
        ];
        return $dataxxxx;
    }

    /**
     * tabla para las areas
     *
     * @return void
     */
    public function getAreasIndex()
    {
        $dataxxxx = [
            'titunuev' => 'NUEVA AREA',
            'titulist' => 'LISTA DE AREAS',
            'vercrear' => false,
            'paralist' => [],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TEMA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'temas.id'],
                ['data' => 'nombre', 'name' => 'temas.nombre'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => [],
            'tablaxxx'=>'datatable',
            'listaxxx'=>'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }

     /**
     * tabla para los indicadores con las areas
     *
     * @return void
     */
    public function getAreaindiIndex($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVO INDICADOR',
            'titulist' => 'LISTA DE INDICADORES ASIGNADOS',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'INDICADOR', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'area_in_indicador.id'],
                ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
                ['data' => 's_estado', 'name' => 'sis_esta.s_estado'],
            ],
            'paraboto' => [],
            'tablaxxx'=>'indiasinados',
            'listaxxx'=>'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);

        $dataxxxx = [
            'titunuev' => 'NUEVO INDICADOR',
            'titulist' => 'LISTA DE INDICADORES PARA ASIGNAR',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'INDICADOR', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_indicadors.id'],
                ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
                ['data' => 's_estado', 'name' => 'sis_esta.s_estado'],
            ],
            'paraboto' => [],
            'tablaxxx'=>'indiasinar',
            'listaxxx'=>'asignarx',
        ];
        $this->opciones['tablasxx'][] = $this->getTablAsignar($dataxxxx);


        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }

     /**
     * tabla para los indicadores con las areas
     *
     * @return void
     */
    public function getIndilibaIndex($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVO INDICADOR',
            'titulist' => 'LISTA DE LINEAS BASES ASIGNADAS',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'LINEA BASE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_indicador_in_linea_base.id'],
                ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
                ['data' => 's_estado', 'name' => 'sis_esta.s_estado'],
            ],
            'paraboto' => [],
            'tablaxxx'=>'indiasinados',
            'listaxxx'=>'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);

        $dataxxxx = [
            'titunuev' => 'NUEVO INDICADOR',
            'titulist' => 'LISTA DE  LINEAS BASES PARA ASIGNAR',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'LINEA BASE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_linea_bases.id'],
                ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
                ['data' => 's_estado', 'name' => 'sis_esta.s_estado'],
            ],
            'paraboto' => [],
            'tablaxxx'=>'indiasinar',
            'listaxxx'=>'asignarx',
        ];
        $this->opciones['tablasxx'][] = $this->getTablAsignar($dataxxxx);


        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }



    /**
     * tabla para los grupos de la linea base
     *
     * @return void
     */
    public function getLibagrupIndex($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVO INDICADOR',
            'titulist' => 'LISTA DE LINEAS BASES ASIGNADAS',
            'vercrear' => true,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_indicador_in_linea_base.id'],
                ['data' => 's_estado', 'name' => 'sis_esta.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx'=>'indiasinados',
            'listaxxx'=>'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }
}
