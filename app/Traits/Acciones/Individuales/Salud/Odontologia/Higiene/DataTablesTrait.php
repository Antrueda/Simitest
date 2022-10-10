<?php

namespace App\Traits\Acciones\Individuales\Salud\Odontologia\Higiene;





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
     *///
    public function getTablas($dataxxxy)
    {   
        
        
        $dataxxxx=$dataxxxy['opciones'];
     
        if ($dataxxxx['tablinde']) {
            $dataxxxx['tablasxx'] = [
                [
                    'titunuev' => 'CREAR VALORACIÓN ODONTOLOGICAS',
                    'titulist' => 'LISTA DE VALORACIONES ODONTOLOGICAS',
                    'titupreg'=> '',
                    'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'vercrear' => true,
                    'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', [$dataxxxx['padrexxx']->id]),
                    'permtabl' => [
                       $this->opciones['permisox'] . '-leer',
                       $this->opciones['permisox'] . '-crear',
                       $this->opciones['permisox'] . '-editar',
                       $this->opciones['permisox'] . '-borrar',
                       
                    ],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA DILIGENCIAMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                  
                            ['td' => 'CLASE DE CONSULTA', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'TIPO DE VALORACIÓN', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
       
                            ['td' => 'RESPONSABLE DEL CARGUE', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'v_odontologias.id'],
                        ['data' => 'fecha', 'name' => 'v_odontologias.fecha'],
                        ['data' => 'consulta', 'name' => 'consulta.nombre as consulta'],
                        ['data' => 'valoracion', 'name' => 'valoracion.nombre as valoracion'],
                        //['data' => 'cargue', 'name' => 'cargue.name as cargue'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatable',
                    'permisox' => $this->opciones['permisox'],
                    'routxxxx' => $this->opciones['routxxxx'],
                    'parametr' => [$dataxxxx['padrexxx']->id],
                ],
              ];
        }else {
            $dataxxxx['padrexxx']=$this->opciones['padrexxx'];
            $dataxxxx['tablasxx'][] =
            [
                'titunuev' => 'AGREGAR REPRESENTANTE LEGAL',
                'titulist' => 'DIENTES',
                'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                'titupreg' => '',
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxz', [$this->opciones['padrexxx']]),
                'permtabl' => [
                    $dataxxxx['permisox'] . '-leer',
                    $dataxxxx['permisox'] . '-crear',
                    $dataxxxx['permisox'] . '-editar',
                    $dataxxxx['permisox'] . '-borrar',
                    $dataxxxx['permisox'] . '-activar',
                ],
                'cabecera' => [
                    [
                        ['td' => 'DIENTE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SUPERFICIES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DIAGNOSTICO', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ACCIONES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    
                    ['data' => 'diente', 'name' => 'v_odontogramas.diente'],
                    ['data' => 'super', 'name' => 'super.nombre as super'],
                    ['data' => 'diag', 'name' => 'diag.nombre as diag'],
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => [],
            ];    
        }
            $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
        return $dataxxxx;    
    }
}
