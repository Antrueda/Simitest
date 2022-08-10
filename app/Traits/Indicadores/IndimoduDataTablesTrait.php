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
            'urlxxxxx' => route($this->opciones['permisox'] . '.' . $dataxxxx['listaxxx'], $dataxxxx['paralist']),
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

    public function getTablaRowsCols($dataxxxx)
    {
        $archdttb = 'Acomponentes.Adatatable.index';
        if (isset($dataxxxx['archdttb'])) {
            $archdttb = $dataxxxx['archdttb'];
        }
        $tablaxxx = [
            'titunuev' => $dataxxxx['titunuev'],
            'titulist' => $dataxxxx['titulist'],
            'archdttb' => $archdttb,
            'vercrear' => $dataxxxx['vercrear'],
            'urlxxxxx' => route($this->opciones['permisox'] . '.' . $dataxxxx['listaxxx'], $dataxxxx['paralist']),
            'permtabl' => [
                $this->opciones['permisox'] . '-leerxxxx',
                $this->opciones['permisox'] . '-crearxxx',
                $this->opciones['permisox'] . '-editarxx',
                $this->opciones['permisox'] . '-borrarxx',
                $this->opciones['permisox'] . '-activarx',
            ],
            'cabecera' => $dataxxxx['cabecera'],
            'columnsx' => $dataxxxx['columnsx'],
            'tbodyxxx' => $dataxxxx['tbodyxxx'],
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
            'urlxxxxx' => route($this->opciones['permisox'] . '.' . $dataxxxx['listaxxx'], $dataxxxx['paralist']),
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
                ['data' => 'id', 'name' => 'areas.id'],
                ['data' => 'nombre', 'name' => 'areas.nombre'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => [],
            'tablaxxx' => 'datatable',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
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
                ['data' => 'id', 'name' => 'in_areaindis.id'],
                ['data' => 's_indicador', 'name' => 'in_indicados.s_indicador'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'indicadorasignados',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $dataxxxx = [
            'titunuev' => 'NUEVO INDICADOR',
            'titulist' => 'LISTA DE INDICADORES PARA ASIGNAR',
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
                ['data' => 'id', 'name' => 'in_indicadors.id'],
                ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'indicadorasignar',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listasig',
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
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'LINEA BASE', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'NIVEL', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'CATEGORÍA', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_indilibas.id'],
                ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
                ['data' => 'nivelxxx', 'name' => 'nivelxxx.nombre as nivelxxx'],
                ['data' => 'categori', 'name' => 'categori.nombre as categori'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => [],
            'tablaxxx' => 'indiasinados',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);

        $dataxxxx = [
            'titunuev' => 'NUEVO INDICADOR',
            'titulist' => 'LISTA DE  LINEAS BASES PARA ASIGNAR',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'LINEA BASE', 'widthxxx' => 500, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_linea_bases.id'],
                ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
            ],
            'paraboto' => [],
            'tablaxxx' => 'indiasinar',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'asignarx',
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
                ['data' => 'id', 'name' => 'in_libagrups.id'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'indiasinados',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
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

                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'pregasignadas',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
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
                // ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'pregasignar',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'asignarx',
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
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'pregasignadas',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
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
                ['data' => 'id', 'name' => 'parametros.id'],
                ['data' => 'nombre', 'name' => 'parametros.nombre'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'pregasignar',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'asignarx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);
        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }

    public function getIndicadoIndex($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVO INDICADOR',
            'titulist' => 'LISTA DE INDICADORES',
            'vercrear' => true,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'INDICADOR', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_indicadors.id'],
                ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'indicadorasignados',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);

        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }

    public function getLinebaseIndex($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVA LÍNEA BASE',
            'titulist' => 'LISTA DE LÍNEAS BASE',
            'vercrear' => true,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'LINEA BASE', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'in_linea_bases.id'],
                ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
                ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
            ],

            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'lineabase',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);

        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }

    public function getInIndinnajIndex($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVA LÍNEA BASE',
            'titulist' => 'LISTADO DE NNAJ',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                ['td' => 'ACCIONES', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'DOCUEMTO', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TIPO DOCUMENTO', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER NOMBRE', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER APELLIDO', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'APODO', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'fi_datos_basicos.id'],
                ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento',],
                ['data' => 'tipodocu', 'name' => 'tipodocu.nombre as tipodocu',],
                ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre',],
                ['data' => 's_segundo_nombre', 'name' =>  'fi_datos_basicos.s_segundo_nombre',],
                ['data' => 's_primer_apellido', 'name' =>  'fi_datos_basicos.s_primer_apellido',],
                ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido',],
                ['data' => 's_apodo', 'name' => 'fi_datos_basicos.s_apodo',],
            ],
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'lineabase',
            'permnuev' => 'crearxxx',
            'listaxxx' => 'listaxxx',
        ];
        $this->opciones['tablasxx'][] = $this->getTabla($dataxxxx);

        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }

    public function getiIndiagnoDiagnost($dataxxxx)
    {
        $dataxxxx = [
            'titunuev' => 'NUEVA LÍNEA BASE',
            'titulist' => 'LISTADO DE NNAJ',
            'vercrear' => false,
            'paralist' => $dataxxxx['paralist'],
            'cabecera' => [
                [
                    ['td' => 'DIAGNOSTICO', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 5],
                    ['td' => 'VALORACION INICIAL', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 2],
                    ['td' => 'ACCIONES DE GESTION', 'widthxxx' => 10, 'rowspanx' => 2, 'colspanx' => 1],
                ],
                [
                    ['td' => 'VARIABLE', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'FUENTE', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NO', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'VALIDACION', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'LINEA BASE', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'NIVEL', 'widthxxx' => 10, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'CATEGORIA', 'widthxxx' => 70, 'rowspanx' => 1, 'colspanx' => 1],
                ],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 's_indicador', 'name' => 'in_indicados.s_indicador',],
                ['data' => 's_indicador', 'name' => 'in_indicados.s_indicador',],
                ['data' => 's_indicador', 'name' => 'in_indicados.s_indicador',],
                ['data' => 's_linea_base', 'name' =>  'in_linea_bases.s_linea_base',],
                ['data' => 's_indicador', 'name' => 'in_indicados.s_indicador',],
                ['data' => 's_indicador', 'name' => 'in_indicados.s_indicador',],
            ],
            'archdttb' => 'Indicadores.Usuariox.Indinnaj.Datatabl.index',
            'paraboto' => $dataxxxx['paralist'],
            'tablaxxx' => 'lineabase',
            'tbodyxxx' => $this->getTbodyAIT(),
            'permnuev' => 'crearxxx',
            'listaxxx' => 'diagnost',
        ];
        $this->opciones['tablasxx'][] = $this->getTablaRowsCols($dataxxxx);

        $this->opciones['ruarchjs'][] = [
            'jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'
        ];
    }
}
