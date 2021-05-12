<?php

namespace App\Traits\Ayudline;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DataTablesTrait
{
    public function getTablasADTT($dataxxxx)
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
        return $tablasx;
    }
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function getUyudasModuloDT($dataxxxx)
    {



        $this->opciones['tablasxx'] = [];

        $this->opciones['ruarchjs'] = [

        ];
    }

    public function getGeneralDTT($dataxxxx)
    {
        $dataxxxx['permtabl'] = [
            $this->opciones['permisox'] . '-leerxxxx',
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
        $dataxxxx['urlxxxxx'] = route($this->opciones['routxxxx'] . '.' . $dataxxxx['listaxxx'], $dataxxxx['pararout']);
        return $dataxxxx;
    }
    public function getUyudasIndexADT($dataxxxx)
    {
        $dataxxxx['permtabl'] = [
            $this->opciones['permisox'] . '-leerxxxx',
        ];

        $dataxxxx['cabecera'] = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'TITULO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
            ]
        ];

        $dataxxxx['columnsx'] = [
            ['data' => 'botonexx', 'name' => 'botonexx'],
            ['data' => 'id', 'name' => 'ayudas.id'],
            ['data' => 'titulo', 'name' => 'ayudas.titulo'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
        ];

        $dataxxxx['tablaxxx'] = 'datatable';
        $dataxxxx['parametr'] = [];
        $dataxxxx['pararout'] = [];
        $dataxxxx['listaxxx'] = 'listaxxx';
        $this->opciones['tablasxx'][] = $this->getTablasADTT($this->getGeneralDTT($dataxxxx));

        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
    }
}
