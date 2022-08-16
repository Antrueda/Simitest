<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso;


use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;


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
        //ddd($this->opciones['carpetax']);
        //ddd( $dataxxxx['valoraci']);
        if ($dataxxxx['tablinde']) {
            $dataxxxx['tablasxx'] = [
                [
                    'titunuev' => 'CREAR ATENCIÓN CASO JURÍDICO',
                    'titulist' => 'LISTA DE ATENCIONES CASO JURÍDICO',
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
                  
                            ['td' => 'TIPO DE CONSULTA', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'MOTIVO DE VALORACIÓN', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
       
                            ['td' => 'RESPONSABLE DEL CARGUE', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'vsmedicinas.id'],
                        ['data' => 'fecha', 'name' => 'vsmedicinas.fecha'],
                        ['data' => 'consulta', 'name' => 'consulta.nombre as consulta'],
                        ['data' => 'motivoval', 'name' => 'vsmedicinas.motivoval'],
                        ['data' => 'cargue', 'name' => 'cargue.name as cargue'],
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
               $dataxxxx['tablasxx'][] =
                [
                    'titunuev' => 'AGREGAR DIAGNÓSTICOS',
                    'titulist' => 'DIAGNÓSTICOS',
                    'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'titupreg' => '',
                    'vercrear' => $this->opciones['vercrear'],
            //        'cursosxx' => $this->opciones['cursosxx'],
            //        'estadoxx' => $this->opciones['estadoxx'],
                    'urlxxxxx' => route($this->opciones['permisox'] .$this->opciones['diagnost'], [$dataxxxx['valoraci']]),
                    'permtabl' => [
                        'vdiagnosti-leer',
                        'vdiagnosti-crear',
                        'vdiagnosti-editar',
                        'vdiagnosti-borrar',
                        'vdiagnosti-activar',
                    ],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'DIAGNÓSTICO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'CÓDIGO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'CONDUCTA Y EVOLUCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO DIAGNÓSTICO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'diagnostico', 'name' => 'diagnosticos.nombre as diagnostico'],
                        ['data' => 'codigo', 'name' => 'v_diagnosticos.codigo'],
                        ['data' => 'concepto', 'name' => 'v_diagnosticos.concepto'],
                        ['data' => 'estados', 'name' => 'estados.nombre as estados'],
                        ['data' => 'fechacrea', 'name' => 'fechacrea'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatablennaj',
                    'permisox' => 'vdiagnosti',
                    'routxxxx' => 'vdiagnosti', [$dataxxxx['valoraci']->id],
                    'parametr' => [$dataxxxx['valoraci']->id],
                ];        
         } 
        $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
        return $dataxxxx;
    }
}
