<?php

namespace App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait PruediagDataTablesTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function getTablasModulo($dataxxxx)
    {
        $dataxxxx['tablasxx'] = [

        ];
        $dataxxxx['ruarchjs'] = [

        ];
        return $dataxxxx;
    }
    public function getDtGrados()
    {

        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVO GRADO',
                'titulist' => 'LISTA DE GRADOS',
                'archdttb' => $this->opciones['rutacomp'] . '.Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['permisox'] . '.listgrad', []),
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 80, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'GRADO', 'widthxxx' =>300, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 100, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'ae_encuentros.id'],
                    ['data' => 'dependencia', 'name' => 'sis_depens.nombre as dependencia'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],

        ];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ;
    }

}
