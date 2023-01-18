<?php

namespace App\Traits\Acciones\Grupales\Sena\Historial;

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

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVO RESPONSABLE',
                'titulist' => 'HISTORIAL FORMACIÓN TÉCNICA CONVENIOS',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'titupreg' => '',
                'vercrear' => FALSE,
                'urlxxxxx' => route('histocon.listaxxx', $this->opciones['padrexxx']->id),
                'permtabl' => [
                    'histocon-leer',
                ],
                'cabecera' => [
                    [
               
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'CONVENIO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PROGRAMA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'MODALIDAD', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ETAPA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'OBSERVACIONES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'id', 'name' => 'conve_nnajs.id'],
                    ['data' => 'convenio', 'name' => 'convenios.nombre as convenio'],
                    ['data' => 'programa', 'name' => 'programas.nombre as programa'],
                    ['data' => 'modalidad', 'name' => 'modalidads.nombre as modalidad'],
                    ['data' => 'etapa', 'name' => 'etapa.nombre as etapa'],
                    ['data' => 'observaciones', 'name' => 'conve_nnajs.observaciones'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablennaj',
                'permisox' => $this->opciones['permisox'],
                'routxxxx' => 'inscrnnaj',
                'parametr' => [$this->opciones['padrexxx']->id],
            ];

    
        $this->opciones['ruarchjs'][] =
            
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla'];
        return $this->opciones;
    }
}
