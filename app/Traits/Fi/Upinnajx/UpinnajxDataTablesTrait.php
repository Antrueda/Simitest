<?php

namespace App\Traits\Fi\Upinnajx;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait UpinnajxDataTablesTrait
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

    /**
     * lisatr los nnajs que tienen ficha de ingreso
     *
     * @param array $dataxxxx
     */
    public function getIndex($dataxxxx)
    {

        $dataxxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TIPO DE DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ]
        ];

        $dataxxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'tipodocumento', 'name' => 'tipodocumento.nombre as tipodocumento'],
            ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
            ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
        ];
        $dataxxxx['camposxx'] = [0,0,"document","primnomb","segunomb","primapel","seguapel",0];
        $dataxxxx['targetsx'] = [0,1,7];
        $dataxxxx['tablaxxx'] = 'datatable';
        $dataxxxx['parametr'] = [];
        $dataxxxx['listaxxx'] = 'listnnaj';
        $dataxxxx['pararout'] = [];
        $this->opciones['tablasxx'][] = $this->getTablasFDTT($this->getGeneralFDT($dataxxxx));
    }

    

    public function getIndexUpisnnaj($dataxxxx)
    {

        $dataxxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 20, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'UPI', 'widthxxx' => 500, 'rowspanx' => 1, 'colspanx' => 1],
                
                ['td' => 'ESTADO', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
            ]
        ];

        $dataxxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
        ];
        $dataxxxx['camposxx'] = [0,"dependen",0];
        $dataxxxx['targetsx'] = [0];
        $dataxxxx['tablaxxx'] = 'datatable';
        $dataxxxx['parametr'] = [];
        $dataxxxx['listaxxx'] = 'listaxxx';
        // $dataxxxx['pararout'] = [];
        $this->opciones['tablasxx'][] = $this->getTablasFDTT($this->getGeneralFDT($dataxxxx));
    }
}
