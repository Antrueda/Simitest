<?php


namespace App\Traits\Acciones\Individuales\Salud\Vacunas\Administracion;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiVacunasDataTablesTrait
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

    public function getTablasTiposActividad()
    {  
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO TIPO DE CATEGORIA',
                'titulist' => 'LISTA DE CATEGORIA',
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
                    ['data' => 'id', 'name' => 'cgih_categorias.id'],
                    ['data' => 'nombre', 'name' => 'cgih_categorias.nombre'],
                    ['data' => 'descripcion', 'name' => 'cgih_categorias.descripcion'],
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


    public function getTablasLimite()
    {   
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO LIMITE DE HABILIDADES',
                'titulist' => 'LISTA DE LIMITE DE HABILIDADES',
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
                        ['td' => 'limite', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DESCRIPCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],

              
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'cgih_limites.id'],
                    ['data' => 'limite', 'name' => 'cgih_limites.limite'],
                    ['data' => 'descripcion', 'name' => 'cgih_limites.descripcion'],
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








    public function getTablasActividades($padrexxx)
    {
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVA HABILIDAD',
                'titulist' => 'LISTA DE HABILIDADES',
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
                        ['td' => 'CATEGORÍA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'CURSO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ÍTEM', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'HABILIDAD ', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DESCRIPCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'cgih_habilidads.id'],
                    ['data' => 'categorias_id', 'name' => 'cgih_categorias.nombre AS categorias_id'],
                    ['data' => 'cursos_id', 'name' => 'cursos.s_cursos AS cursos_id'],
                    ['data' => 'prm_letras_id', 'name' => 'cgih_habilidads.prm_letras_id'],
                    ['data' => 'nombre', 'name' => 'cgih_habilidads.nombre'],
                    ['data' => 'descripcion', 'name' => 'cgih_habilidads.descripcion'],
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
