<?php

namespace App\Traits\Fi;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiDataTablesTrait
{
    public function getTablasFDTT($dataxxxx)
    {
        
        $tablasx =
            [
                'titunuev' => $dataxxxx['titunuev'],
                'titulist' => $dataxxxx['titulist'],
                'archdttb' => $this->opciones['rutacomp'] . 'Adatatable.index',
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
            $this->opciones['permisox'] . '-leer',
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
    public function getDatosBasicosFDT($dataxxxx)
    {


        $dataxxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                // ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TIPO DE DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'DOCUMENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                //   ['td' => 'FECHA DE NACIMIENTO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'UPI/DEPENDENCIA-SERVICIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ]
        ];

        $dataxxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            // ['data' => 'id', 'name' => 'fi_datos_basicos.id'],
            ['data' => 'tipodocumento', 'name' => 'tipodocumento.nombre as tipodocumento'],
            ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
            ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
            // ['data' => 'd_nacimiento', 'name' => 'nnaj_nacimis.d_nacimiento'],
            ['data' => 'upiservicio', 'name' => 'upiservicio'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
        ];
        $dataxxxx['camposxx'] = [0,0,"document","primnomb","segunomb","primapel","seguapel","dependencia",0];
        $dataxxxx['targetsx'] = [0,1,8];
        $dataxxxx['tablaxxx'] = 'datatable';
        $dataxxxx['parametr'] = [];
        $dataxxxx['listaxxx'] = 'listaxxx';
        $dataxxxx['pararout'] = [];
        $this->opciones['tablasxx'][] = $this->getTablasFDTT($this->getGeneralFDT($dataxxxx));
    }

    /**
     * lista los componentes familiares asociados al nnaj
     *
     * @param array $dataxxxx
     */
    public function getComposicionFamiliarFDT($dataxxxx)
    {


        $dataxxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
            ]
        ];

        $dataxxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'fi_compfamis.id'],
            ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
            ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
        ];
        
        $dataxxxx['tablaxxx'] = 'datatable';
        $dataxxxx['pararout'] = $dataxxxx['parametr'];
        $dataxxxx['listaxxx'] = 'listodox';
        $this->opciones['tablasxx'][] = $this->getTablasFDTT($this->getGeneralFDT($dataxxxx));
    }

    /**
     * lista todos los registros existentes para seleccionar los componentes familiares
     *
     * @param array $dataxxxx
     */
    public function getTodoDatosBasicosFDT($dataxxxx)
    {
        $dataxxxx['cabecera'] = [
            [
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'FECHA NACIMIENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
            ]
        ];
        $dataxxxx['columnsx'] = [
            ['data' => 'id', 'name' => 'sis_nnajs.id'],
            ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
            ['data' => 'd_nacimiento', 'name' => 'nnaj_nacimis.d_nacimiento'],
            ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
        ];
        $dataxxxx['tablaxxx'] = 'datatable';
        $dataxxxx['pararout'] = $dataxxxx['parametr'];
        $dataxxxx['listaxxx'] = 'listaxxx';
        $this->opciones['tablasxx'][] = $this->getTablasFDTT($this->getGeneralFDT($dataxxxx));
        $this->opciones['ruarchjs'][0]['jsxxxxxx'] = str_replace('tabla', 'tablatodos', $this->opciones['ruarchjs'][0]['jsxxxxxx']);
        $this->opciones['ruarchjs'][1] = ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
    }

    /**
     * lisatr los nnajs que tienen ficha de ingreso
     *
     * @param array $dataxxxx
     */
    public function getCompnnajFDT($dataxxxx)
    {


        $dataxxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
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
        $dataxxxx['targetsx'] = [0,1];
     
        $dataxxxx['tablaxxx'] = 'datatable';
        $dataxxxx['parametr'] = [];
        $dataxxxx['listaxxx'] = 'linnajco';
        $dataxxxx['pararout'] = [];
        $this->opciones['tablasxx'][] = $this->getTablasFDTT($this->getGeneralFDT($dataxxxx));
    }
}
