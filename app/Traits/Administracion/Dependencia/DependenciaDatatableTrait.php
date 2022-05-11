<?php

namespace App\Traits\Administracion\Dependencia;



/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait DependenciaDatatableTrait
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

    public function getTablas()
    {
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVA DEPENDENCIA',
                'titulist' => 'LISTA DE DEPENDENCIAS',
                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listnuev', []),
                'cabecera' => [
                    ['td' => 'ACCIONES'],
                    ['td' => 'DEPENDENCIA'],
                    ['td' => 'SEXO'],
                    ['td' => 'DIRECCION'],
                    ['td' => 'LOCALIDAD'],
                    ['td' => 'BARRIO'],
                    ['td' => 'TELÉFONO'],
                    ['td' => 'CORREO'],
                    //['td' => 'RECREATIVA'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'nombre', 'name' => 'nombre'],
                    ['data' => 'sexo', 'name' => 'sexo'],
                    ['data' => 's_direccion', 'name' => 's_direccion'],
                    ['data' => 'sis_localidad_id', 'name' => 'sis_localidad_id'],
                    ['data' => 'sis_barrio_id', 'name' => 'sis_barrio_id'],
                    ['data' => 's_telefono', 'name' => 's_telefono'],
                    ['data' => 's_correo', 'name' => 's_correo'],
                    //['data' => 'prm_recreativa_id', 'name' => 'prm_recreativa_id'],
                    ['data' => 's_estado', 'name' => 's_estado'],
                ],
                'tablaxxx' => 'depenuev',
                'permisox' => 'dependencia',
                'routxxxx' => 'dependencia',
                'parametr' => [],

            ];
            $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
    }
}
