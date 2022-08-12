<?php


namespace App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait perfilOcupacionalDataTablesTrait
{
   /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */

    public function getTablasModulo($dataxxxx)
    {
        $dataxxxx['tablasxx'] = [];
        $dataxxxx['ruarchjs'] = [
            ['jsxxxxxx' => $dataxxxx['rutacarp'] . $dataxxxx['carpetax'] . '.Js.tabla']
        ];
        return $dataxxxx;
    }


    public function getTablas($padrexx){

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'NUEVO PERFIL OCUPACIONAL',
                'titulist' => 'LISTA DE PERFIL OCUPACIONAL',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$padrexx]),
                
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'FECHA DE DILIGENCIAMIENTO', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'CONCEPTO PERFIL', 'widthxxx' => 500, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'RESULTADO', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => 0, 'rowspanx' => 2, 'colspanx' => 1],
                        ['td' => 'FUNCIONARIO(A) / CONTRATISTA', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'fpo_perfil_ocupacionals.id'],
                    ['data' => 'fecha_registro', 'name' => 'fpo_perfil_ocupacionals.fecha_registro'],
                    ['data' => 'concepto_perfil', 'name' => 'fpo_perfil_ocupacionals.concepto_perfil'],
                    ['data' => 'resultado_text', 'name' => 'fpo_perfil_ocupacionals.resultado_text'],
                    ['data' => 'nombre', 'name' => 'users.name as nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [$padrexx],
            ]
        ];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];

    }




}
