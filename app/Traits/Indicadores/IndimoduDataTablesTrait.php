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
            'archdttb' => 'Acomponentes.Adatatable.index',
            'vercrear' => $dataxxxx['vercrear'],
            'urlxxxxx' => route($this->opciones['permisox'] . '.'.$dataxxxx['listaxxx'], $dataxxxx['paralist']),
            'permtabl' => [
                $this->opciones['permisox'] . '-leerxxxx',
                $this->opciones['permisox'] . '-crearxxx',
                $this->opciones['permisox'] . '-editarxx',
                $this->opciones['permisox'] . '-borrarxx',
                $this->opciones['permisox'] . '-activarx',
            ],
            'cabecera' => [
                $dataxxxx['cabecera']
            ],
            'columnsx' => $dataxxxx['columnsx'],
            'tablaxxx' => $dataxxxx['tablaxxx'],
            'permisox' => $this->opciones['permisox'],
            'parametr' => $dataxxxx['paraboto'],
            'permnuev' => $dataxxxx['permnuev'],
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
            'urlxxxxx' => route($this->opciones['permisox'] . '.'.$dataxxxx['listaxxx'], $dataxxxx['paralist']),
            'permtabl' => [
                $this->opciones['permisox'] . '-crearxxx',
            ],
            'cabecera' => [
                $dataxxxx['cabecera']
            ],
            'columnsx' => $dataxxxx['columnsx'],
            'tablaxxx' => $dataxxxx['tablaxxx'],
            'permisox' => $this->opciones['permisox'],
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
            'permnuev' => 'crearxxx',
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
            'titulist' => 'LISTA DE INDICADORES',
            'vercrear' => true,
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
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx'=>'indiasinados',
            'permnuev' => 'crearxxx',
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
            'permnuev' => 'crearxxx',
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
            'permnuev' => 'crearxxx',
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
            'titunuev' => 'NUEVO GRUPO',
            'titulist' => 'LISTA DE GRUPOS DE LA LINEA BASE',
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
            'permnuev' => 'crearxxx',
            'listaxxx'=>'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }

    /**
     * tablas para las preguntas del grupo
     *
     * @return void
     */
    public function getGrupreguIndex($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVA PREGUNTA',
            'titulist' => 'LISTA DE PREGUNTAS ASIGNADAS',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PREGUNTA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'DOCUMENTO FUENTE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'DISPARADORA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_grupregus.id'],
                ['data' => 'pregunta', 'name' => 'temacombos.nombre as pregunta'],
                ['data' => 'docfuen', 'name' => 'sis_docfuens.nombre as docfuen'],
                ['data' => 'parametr', 'name' => 'parametros.nombre as parametr'],

                ['data' => 's_estado', 'name' => 'sis_esta.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx'=>'pregasignadas',
            'permnuev' => 'crearxxx',
            'listaxxx'=>'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $dataxxxx = [
            'titunuev' => 'NUEVA PREGUNTA',
            'titulist' => 'LISTA DE PREGUNTAS PARA ASIGNAR',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PREGUNTA/COMBO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'DOCUMENTO FUENTE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                // ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'temacombos.id'],
                ['data' => 'nombre', 'name' => 'temacombos.nombre'],
                ['data' => 'docfuen', 'name' => 'sis_docfuens.nombre as docfuen'],
                // ['data' => 's_estado', 'name' => 'sis_esta.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx'=>'pregasignar',
            'permnuev' => 'crearxxx',
            'listaxxx'=>'asignarx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }

     /**
     * tablas para las preguntas del grupo
     *
     * @return void
     */
    public function getPregrespIndex($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVA PREGUNTA',
            'titulist' => 'LISTA DE RESPUESTAS ASIGNADAS',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'RESPUESTA', 'widthxxx' => 700, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_grupregus.id'],
                ['data' => 'parametr', 'name' => 'parametros.nombre as parametr'],
                ['data' => 's_estado', 'name' => 'sis_esta.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx'=>'pregasignadas',
            'permnuev' => 'crearxxx',
            'listaxxx'=>'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $dataxxxx = [
            'titunuev' => 'NUEVA PREGUNTA',
            'titulist' => 'LISTA DE RESPUESTAS PARA ASIGNAR',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'RESPUESTA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'temacombos.id'],
                ['data' => 'nombre', 'name' => 'temacombos.nombre'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx'=>'pregasignar',
            'permnuev' => 'crearxxx',
            'listaxxx'=>'asignarx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }
}
