<?php

namespace App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag;


trait PruediagPestaniasTrait
{
    /**
     * Estructura principal de las pestañas
     *
     * ['actaencu', // nombre del rout que va a tener la pestaña
     * '', // complemento le rout si lo tiene
     * [], // parametros del rout si los tiene
     * 'ACTA DE ENCUENTRO', // titulo de la pestana
     * true, // true indica que se carga de una y false que no
     * '', // agregarle la clase active
     * 'Actas de encuentro' // contenido que se muestra en el tooltip de la pestaña
     * ],
     */
    public $pestania = [
        'ai' => ['.ver', [], 'INDIVIDUALES', true, '', 'Volver a las acciones individuales del nnaj'],
        'pruediag' => ['', [], 'PRUEBAS DIAGNOSTICAS', true, '', 'Gestionar pruebas diagnósticas para el nnaj'],
        // 'edasigra' => ['', [], 'GRADO-ASIGNATURAS', false, '', 'Asociar el grado con la asignatura'],
        // 'edaasign' => ['', [], 'ASIGNATURAS', false, '', 'Administración de las asignaturas'],
        // 'edasipre' => ['', [], 'ASIGNATURA-PRESABERES', false, '', 'Asociar la asigantura con presaberes'],
        // 'edapresa' => ['', [], 'PRESABERES', false, '', 'Administración de los presaberes'],
    ];

    public function getPrametros($dataxxxx)
    {
        $this->pestania['ai'][1]=$dataxxxx[0];
        $this->pestania['pruediag'][1]=$dataxxxx[0];
    }
}
