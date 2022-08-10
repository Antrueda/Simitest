<?php

namespace App\Traits\Acciones\Individuales\Salud\VDiagnostico;


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
        if ($dataxxxx['tablinde']) {
            $dataxxxx['tablasxx'] = [
                [
                    'titunuev' => 'REALIZAR VALORACIÓN DE COMPETENCIAS',
                    'titulist' => 'LISTA DE VALORACIONES DE COMPETENCIAS',
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
                            ['td' => 'FECHA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'CURSO', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'MODULO', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'UNIDADES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'RESPONSABLE DEL CARGUE', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'valora_comps.id'],
                        ['data' => 'fecha', 'name' => 'valora_comps.fecha'],
                        ['data' => 'curso', 'name' => 'cursos.s_cursos as curso'],
                        ['data' => 'modulo', 'name' => 'modulo'],
                        ['data' => 'unidads', 'name' => 'unidads'],
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
           
               
               $dataxxxx['tablasxx'][] =
                [
                    'titunuev' => 'AGREGAR UNIDADES',
                    'titulist' => 'UNIDADES',
                    'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.acompaña',
                    'titupreg' => '',
                    'vercrear' => $this->opciones['vercrear'],
                    'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxz', [$dataxxxx['padrexxx']->id]),
                    'permtabl' => [
                        'valorcomp-leer',
                        'valorcomp-crear',
                        'valorcomp-editar',
                        'valorcomp-borrar',
                        'valorcomp-activar',
                    ],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'MODULO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'UNIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'CONOCIMIENTO (20%)', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'DESEMPEÑO (60%)', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRODUCTO (20%)', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'CONCEPTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'modulo', 'name' => 'modulos.s_modulo as modulo'],
                        ['data' => 'denomina', 'name' => 'denominas.s_denominas as denomina'],
                        ['data' => 'conocimiento', 'name' => 'uni_comps.conocimiento'],
                        ['data' => 'desempeno', 'name' => 'uni_comps.desempeno'],
                        ['data' => 'producto', 'name' => 'uni_comps.producto'],
                        ['data' => 'concepto', 'name' => 'uni_comps.concepto'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatablennaj',
                    'permisox' => 'valorcomp',
                    'routxxxx' => 'valorcomp', [$dataxxxx['padrexxx']->id],
                    'parametr' => [$dataxxxx['padrexxx']->id],
                ];        
         } 
        $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
        return $dataxxxx;
    }
}
