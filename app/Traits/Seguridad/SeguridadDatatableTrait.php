<?php

namespace App\Traits\Seguridad;



/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait SeguridadDatatableTrait
{

    public function getTablas()
    {
        $this->opciones['tablasxx'][] =
            [
                'titunuev' => 'CREAR USUARIO',
                'titulist' => 'LISTA DE USUARIOS',
                'vercrear' => true,
                'urlxxxxx' => route('usuario.listaxxx', $this->opciones['parametr']),
                'cabecera' => [
                    [
                        ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO NOMBRE', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'PRIMER APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'SEGUNDO APELLIDO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'CORREO ELECTRÓNICO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'TIPO VINCULACION', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ROL', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ESTADO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ],


                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'id'],
                    ['data' => 's_documento', 'name' => 's_documento'],
                    ['data' => 's_primer_nombre', 'name' => 's_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 's_segundo_nombre'],
                    ['data' => 's_primer_apellido', 'name' => 's_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 's_segundo_apellido'],
                    ['data' => 'email', 'name' => 'email'],
                    ['data' => 'nombre', 'name' => 'nombre'],
                    ['data' => 'name', 'name' => 'name'],
                    ['data' => 's_estado', 'name' => 's_estado'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => 'usuario',
                'routxxxx' => 'usuario',
                'parametr' => $this->opciones['parametr'],

        ];
            $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.tabla']
        ];
    }
}
