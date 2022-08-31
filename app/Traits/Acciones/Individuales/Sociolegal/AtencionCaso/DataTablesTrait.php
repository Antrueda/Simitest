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
                            ['td' => 'UPI', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'TIPO DE CASO', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'TEMA DE CASO DE CASO', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO DE CASO DE CASO', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'RESPONSABLE DEL CARGUE', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'caso_jurs.id'],
                        ['data' => 'fecha', 'name' => 'caso_jurs.fecha'],
                        ['data' => 'depen', 'name' => 'depen.nombre as depen'],
                        ['data' => 'tipo', 'name' => 'tipo.nombre as tipo'],
                        ['data' => 'tema', 'name' => 'tema.nombre as tema'],
                        ['data' => 'estado', 'name' => 'estado.nombre as estado'],
                        ['data' => 'cargue', 'name' => 'cargue.name as cargue'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatable',
                    'permisox' => $this->opciones['permisox'],
                    'routxxxx' => $this->opciones['routxxxx'],
                    'parametr' => [$dataxxxx['padrexxx']->id],
                ],
              ];
              $dataxxxx['ruarchjs'][] =
              ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
          return $dataxxxx;
        }else {
            //ddd($this->opciones['cursosxx']);
            $dataxxxx['tablasxx'][] =
            [
                'titunuev' => 'AGREGAR REPRESENTANTE LEGAL',
                'titulist' => 'REPRESENTANTE LEGAL',
                'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.acompaña',
                'titupreg' => '',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listodox', [$this->padrexxx->id]),
                'permtabl' => [
                    $dataxxxx['permisox'] . '-leer',
                    $dataxxxx['permisox'] . '-crear',
                    $dataxxxx['permisox'] . '-editar',
                    $dataxxxx['permisox'] . '-borrar',
                    $dataxxxx['permisox'] . '-activar',
                ],
                'cabecera' => [
                    [
            
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO DE DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [

                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 'tipodocu', 'name' => 'tipodocu.nombre as tipodocu'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],

                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablennaj',
                'permisox' => $dataxxxx['permisox'],
                'routxxxx' => 'ficomposicion', [$this->padrexxx->fi_datos_basico->id],
                'parametr' => [$this->padrexxx->fi_datos_basico->id],
            ];    
            $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tablatodos'];
        return $dataxxxx;    
     } 
   
    }
}

