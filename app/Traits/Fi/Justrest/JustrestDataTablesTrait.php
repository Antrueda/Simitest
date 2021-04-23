<?php

namespace app\Traits\FI\Justrest;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait JustrestDataTablesTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function getTablasVistaJDTT($dataxxxx,$datatabl)
    {
        $this->opciones['tablasxx'] = [
            [
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.justicia',
                'titunuev' => 'CREAR COMPONENTE FAMILIAR CON PROCESOS LEGALES',
                'titulist' => 'LISTA DE COMPONENTES FAMILIARES CON PROCESOS LEGALES',
                'dataxxxx' => [],
                'titupreg' => '10.6 ¿Qué personas de su familia han estado o se encuentran en procesos legales, o han estado en la cárcel o fiscalía?',
                'vercrear' => $datatabl['vercrear'],
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listaxxx', [$dataxxxx['padrexxx']->id]),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'FAMILIAR', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PROCESO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'VIGENTE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'NO. DE VECES', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],

                        ['td' => 'HACE CUÁNTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO TIEMPO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name'          => 'fi_red_apoyo_actuals.id'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_proceso', 'name' => 'fi_jr_familiars.s_proceso'],
                    ['data' => 'vigente', 'name' => 'parametros.nombre as vigente'],
                    ['data' => 'i_veces', 'name' => 'fi_jr_familiars.i_veces'],

                    ['data' => 'i_tiempo', 'name' => 'fi_jr_familiars.i_tiempo'],
                    ['data' => 'tiempo', 'name' => 'parametros.nombre as tiempo'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'datatablejusticia',
                'permisox' => 'fijrfamiliar',
                'routxxxx' => 'fijrfamiliar',
                'parametr' => [isset($this->opciones['modeloxx']->id) ? $this->opciones['modeloxx']->id : ''],
            ],
        ];
    }
}
