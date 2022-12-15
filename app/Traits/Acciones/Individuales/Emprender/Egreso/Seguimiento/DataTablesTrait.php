<?php

namespace App\Traits\Acciones\Individuales\Emprender\Egreso\Seguimiento;





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
                    'titunuev' => 'CREAR SEGUIMIENTO',
                    'titulist' => 'LISTA DE SEGUIMIENTOS A EGRESO',
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
       
       //                     ['td' => 'RESPONSABLE DEL CARGUE', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
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
            //ddd($this->opciones['cursosxx']);
            $dataxxxx['padrexxx']=$this->opciones['padrexxx'];
            $dataxxxx['tablasxx'][] =
            [
                'titunuev' => 'AGREGAR REPRESENTANTE LEGAL',
                'titulist' => 'CONTACTO TELEFÓNICO',
                'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                'titupreg' => '',
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxx', [$this->padrexxx->id]),
                'permtabl' => [
                    $dataxxxx['permisox'] . '-leer',
                    $dataxxxx['permisox'] . '-crear',
                    $dataxxxx['permisox'] . '-editar',
                    $dataxxxx['permisox'] . '-borrar',
                    $dataxxxx['permisox'] . '-activar',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO DE LLAMADA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FECHA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'OBSERVACIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                      
                    ]
                ],
                'columnsx' => [

                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'tipollama', 'name' => 'tipollama.nombre as tipollama'],
                    ['data' => 'fechareg', 'name' => 'egreso_telefonos.fechareg'],
                    ['data' => 'obserllamad', 'name' => 'egreso_telefonos.obserllamad'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablennaj',
                'permisox' => $dataxxxx['permisox'],
                'routxxxx' => 'egresosdb',
                'parametr' => [],
            ];    
        }
            $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
        return $dataxxxx;    
    }
}
