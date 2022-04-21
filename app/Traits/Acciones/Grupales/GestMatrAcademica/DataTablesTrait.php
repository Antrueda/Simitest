<?php

namespace App\Traits\Acciones\Grupales\GestMatrAcademica;


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

        $this->opciones['tablasxx'] = [
            [
                'titunuev' => '',
                'titulist' => 'LISTA DE MATRÍCULAS',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => false,
                'urlxxxxx' => 'gestmaca.listmatr',
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Número matrícula', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Primer Apellido', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Segundo Apellido', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Primer Nombre', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Segundo Nombre', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Tipo Doc', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Documento', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Grupo', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Grado', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Fecha Matrícula', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Periodo Académico', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Servicio', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Estrategia', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'ACCIONES', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'id', 'name' => 'i_matricula_nnajs.id'],
                    ['data' => 'numeromatricula', 'name' => 'i_matricula_nnajs.numeromatricula'],
                    ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
                    ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
                    ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
                    ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
                    ['data' => 'tipodocu', 'name' => 'tipodocu.nombre as tipodocu'],
                    ['data' => 's_documento', 'name' => 'nnaj_docus.s_documento'],
                    ['data' => 's_grupo', 'name' => 'grupo_matriculas.s_grupo'],
                    ['data' => 's_grado', 'name' => 'eda_grados.s_grado'],
                    ['data' => 'fecha', 'name' => 'i_matriculas.fecha'],
                    ['data' => 'periodo', 'name' => 'periodo.nombre as periodo'],
                    ['data' => 'upi', 'name' => 'sis_depens.nombre as upi'],
                    ['data' => 's_servicio', 'name' => 'sis_servicios.s_servicio'],
                    ['data' => 'estrategia','name' => 'estrategia.nombre as estrategia'],
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                ],
                'tablaxxx' => 'datatable',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],
            ],
            [
                'titunuev' => '',
                'titulist' => 'HISTÓRICO DE MATRÍCULAS',
                'archdttb' => $this->opciones['rutacarp'] . 'Acomponentes.Adatatable.index',
                'vercrear' => false,
                'urlxxxxx' => 'gestmaca.histmatr',
                'permtabl' => [
                    $this->opciones['permisox'] . '-leerxxxx',
                    $this->opciones['permisox'] . '-crearxxx',
                    $this->opciones['permisox'] . '-editarxx',
                    $this->opciones['permisox'] . '-borrarxx',
                    $this->opciones['permisox'] . '-activarx',
                ],
                'cabecera' => [
                    [
                        ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Número matrícula', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Primer Apellido', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Segundo Apellido', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Primer Nombre', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Segundo Nombre', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Tipo Doc', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Documento', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Grupo', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Grado', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Fecha Matrícula', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Año', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Periodo Académico', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'UPI', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Estrategia', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                        ['td' => 'Estado', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ]
                ],
                'columnsx' => [
                    ['data' => 'id_matricula', 'name' => 'ped_matricula.id_matricula'],
                    ['data' => 'numero_matricula', 'name' => 'ped_matricula.numero_matricula'],
                    ['data' => 'primer_apellido', 'name' => 'ge_nnaj.primer_apellido'],
                    ['data' => 'segundo_apellido', 'name' => 'ge_nnaj.segundo_apellido'],
                    ['data' => 'primer_nombre', 'name' => 'ge_nnaj.primer_nombre'],
                    ['data' => 'segundo_nombre', 'name' => 'ge_nnaj.segundo_nombre'],
                    ['data' => 'tipo_documento', 'name' => 'ge_nnaj.tipo_documento'],
                    ['data' => 'numero_documento', 'name' => 'ge_nnaj_documento.numero_documento'],
                    ['data' => 'grupo', 'name' => 'ge_grupo.nombre as grupo'],
                    ['data' => 'grado', 'name' => 'ge_programa.nombre as grado'],
                    ['data' => 'fecha_inscripcion', 'name' => 'ped_matricula.fecha_inscripcion'],
                    ['data' => 'ano', 'name' => 'ped_periodo_m.ano'],
                    ['data' => 'periodo', 'name' => 'ped_periodo_m.periodo'],
                    ['data' => 'upi', 'name' => 'ge_upi.nombre as upi'],
                    ['data' => 'estrategia','name' => 'ped_matricula.estrategia'],
                    ['data' => 'estado', 'name' => 'ped_estado_m.estado'],
                ],
                'tablaxxx' => 'datatable2',
                'permisox' => $this->opciones['permisox'],
                'permnuev' => 'crearxxx',
                'parametr' => [],
            ]
        ];
    }
}
