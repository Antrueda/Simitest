<?php

namespace App\Traits\Fi\Nnajdese;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait NnajdeseDataTablesTrait
{
    public function getTablasFDTT($dataxxxx)
    {
        
        $tablasx =
            [
                'titunuev' => $dataxxxx['titunuev'],
                'titulist' => $dataxxxx['titulist'],
                'archdttb' => $this->opciones['rutacomp'] . 'datatable.listaxxx',
                'vercrear' => $dataxxxx['vercrear'],
                'urlxxxxx' => $dataxxxx['urlxxxxx'],
                'permtabl' => $dataxxxx['permtabl'],
                'cabecera' => $dataxxxx['cabecera'],
                'columnsx' => $dataxxxx['columnsx'],
                'tablaxxx' => $dataxxxx['tablaxxx'],
                'permisox' => $dataxxxx['permisox'],
                'routxxxx' => $this->opciones['routxxxx'],
                'parametr' => $dataxxxx['parametr'],
            ];
            if(isset($dataxxxx['camposxx'])){
                $tablasx['camposxx']=$dataxxxx['camposxx'];
            }  
            if(isset($dataxxxx['targetsx'])){
                $tablasx['targetsx']=$dataxxxx['targetsx'];
            } 
            
        return $tablasx;
    }
    public function getGeneralFDT($dataxxxx)
    {
        $dataxxxx['permtabl'] = [
            $this->opciones['permisox'] . '-listaxxx',
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        $dataxxxx['urlxxxxx'] = route($this->opciones['routxxxx'] . '.' . $dataxxxx['listaxxx'], $dataxxxx['pararout']);
        return $dataxxxx;
    }


    public function getIndex($dataxxxx)
    {

        $dataxxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SERVICIO', 'widthxxx' => 500, 'rowspanx' => 1, 'colspanx' => 1],
                
                ['td' => 'ESTADO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
            ]
        ];

        $dataxxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
        ];
        $dataxxxx['camposxx'] = [0,"dependen",0];
        $dataxxxx['targetsx'] = [0];
        $dataxxxx['tablaxxx'] = 'datatable';
        // $dataxxxx['parametr'] = $dataxxxx['parametr'];
        $dataxxxx['listaxxx'] = 'listaxxx';
        $dataxxxx['pararout'] = $dataxxxx['parametr'];
        $this->opciones['tablasxx'][] = $this->getTablasFDTT($this->getGeneralFDT($dataxxxx));
    }
}
