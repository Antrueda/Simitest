<?php

namespace App\Traits\Acciones\Grupales\Salidamayores;

use App\Models\Acciones\Grupales\AgResponsable;

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
     */
    public function getTablas($dataxxxx)
    {

        if ($dataxxxx['tablinde']) {
            $dataxxxx['tablasxx'] = [
                [
                    'titunuev' => 'REGISTRAR NUEVA SALIDA',
                    'titulist' => 'LISTA DE SALIDAS',
                    'titupreg'=> '',
                    'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'vercrear' => true,
                    'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx'),
                    'permtabl' => [
                        $dataxxxx['permisox'] . '-leer',
                        $dataxxxx['permisox'] . '-crear',
                        $dataxxxx['permisox'] . '-editar',
                        $dataxxxx['permisox'] . '-borrar',
                        $dataxxxx['permisox'] . '-activar',
                    ],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'FECHA DE SALIDA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'RAZONES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 'id', 'name' => 'ai_salida_mayores.id'],
                        ['data' => 'fecha', 'name' => 'ai_salida_mayores.fecha'],
                        ['data' => 'upi', 'name' => 'upi.nombre as upi'],
                        ['data' => 'razonesx', 'name' => 'razonesx'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatable',
                    'permisox' => $this->opciones['permisox'],
                    'routxxxx' => $this->opciones['routxxxx'],
                    'parametr' => [],
                ]
            ];
        }else {
          
            $dataxxxx['tablasxx'][] =
                [
                    'titunuev' => 'AGREGAR JOVENES',
                    'titulist' => 'LISTA DE JOVENES',
                    'archdttb' => $dataxxxx['rutacarp'] . 'Acomponentes.Adatatable.index',
                    'titupreg' => 'Jovenes con permiso de salida:',
                    'vercrear' => true,
                    'urlxxxxx' => route($dataxxxx['routxxxx'] . '.salidajovenes', $dataxxxx['modeloxx']->id), // $this->opciones["urlxxxas"] = 'api/ag/asistentes';
                    'permtabl' => [
                        $dataxxxx['permisox'] . '-leer',
                        $dataxxxx['permisox'] . '-crear',
                        $dataxxxx['permisox'] . '-editar',
                        $dataxxxx['permisox'] . '-borrar',
                        $dataxxxx['permisox'] . '-activar',
                    ],
                    'cabecera' => [
                        [
                            ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                            ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ]
                    ],
                    'columnsx' => [
                        ['data' => 'botonexx', 'name' => 'botonexx'],
                        ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                        ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                        ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                        ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                        ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                        ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ],
                    'tablaxxx' => 'datatablejovenes',
                    'permisox' => $dataxxxx['permisox'],
                    'routxxxx' => 'salidajovenes',
                    'parametr' => [$dataxxxx['modeloxx']->id],
                ];        
         } 
        $dataxxxx['ruarchjs'][] =
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla'];
        return $dataxxxx;
    }
}
