<?php

namespace App\Traits\Acciones\Individuales\Salud\VsMedicinaGeneral;


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
                    'titunuev' => 'REALIZAR VALORACIÓN MEDICINA GENERAL',
                    'titulist' => 'LISTA DE VALORACIONES DE MEDICINA GENERAL',
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
                        ['data' => 'id', 'name' => 'valora_comps.id'],
                        ['data' => 'fecha', 'name' => 'valora_comps.fecha'],
                        ['data' => 'curso', 'name' => 'cursos.s_cursos as curso'],
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
                    'titunuev' => 'AGREGAR DIAGNOSTICOS',
                    'titulist' => 'DIAGNOSTICOS',
                    'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.acompaña',
                    'titupreg' => '',
                    'vercrear' => $this->opciones['vercrear'],
                    'urlxxxxx' => route($this->opciones['permisox'] . '.listaxxz', [$dataxxxx['valoraci']->id]),
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
                            ['td' => 'DIAGNOSTICO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'CODIGO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'CONDUCTA Y EVOLUCIÓN', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'conocimiento', 'name' => 'diagnosticos.nombre as diagnostico'],
                        ['data' => 'desempeno', 'name' => 'v_diagnosticos.codigo'],
                        ['data' => 'concepto', 'name' => 'v_diagnosticos.concepto'],
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
