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
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' =>
                    $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                ],

                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listnuev', []),
                'cabecera' => [
                    ['td' => 'DEPENDENCIA'],
                    ['td' => 'SEXO'],
                    ['td' => 'DIRECCION'],
                    ['td' => 'LOCALIDAD'],
                    ['td' => 'BARRIO'],
                    ['td' => 'TELÉFONO'],
                    ['td' => 'CORREO'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
                    ['data' => 'sexo', 'name' => 'parametros.nombre as sexo'],
                    ['data' => 's_direccion', 'name' => 'sis_depens.s_direccion'],
                    ['data' => 'sis_localidad_id', 'name' => 'sis_localidads.s_localidad as sis_localidad_id'],
                    ['data' => 'sis_barrio_id', 'name' => 'sis_barrios.s_barrio as sis_barrio_id'],
                    ['data' => 's_telefono', 'name' => 'sis_depens.s_telefono'],
                    ['data' => 's_correo', 'name' => 'sis_depens.s_correo'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => 'depenuev',
                'permisox' => 'dependencia',
                'routxxxx' => 'dependencia',
                'parametr' => [],

            ];

            $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'NUEVA DEPENDENCIA',
                'titulist' => 'LISTA DE DEPENDENCIAS ANTIGO SIMI',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' =>
                    $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                ],

                'accitabl' => true,
                'vercrear' => false,
                'urlxxxxx' => route($this->opciones['routxxxx'] . '.listanti', []),
                'cabecera' => [
                    ['td' => 'DEPENDENCIA'],
                    ['td' => 'SEXO'],
                    ['td' => 'DIRECCION'],
                    ['td' => 'LOCALIDAD'],
                    ['td' => 'BARRIO'],
                    // ['td' => 'TELÉFONO'],
                    // ['td' => 'CORREO'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'nombre', 'name' => 'ge_upi.nombre'],
                    ['data' => 'sexo', 'name' => 'ge_upi.sexo'],
                    ['data' => 'direccion', 'name' => 'ge_upi.direccion'],
                    // ['data' => 'sis_localidad_id', 'name' => 'sis_localidads.s_localidad as sis_localidad_id'],
                    // ['data' => 'sis_barrio_id', 'name' => 'sis_barrios.s_barrio as sis_barrio_id'],
                    // ['data' => 's_telefono', 'name' => 'sis_depens.s_telefono'],
                    // ['data' => 's_correo', 'name' => 'sis_depens.s_correo'],
                    // ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                    ['data' => 'estado', 'name' => 'ge_upi.estado'],
                ],
                'tablaxxx' => 'depeanti',
                'permisox' => 'dependencia',
                'routxxxx' => 'dependencia',
                'parametr' => [],
            ];
            $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
    }
}
