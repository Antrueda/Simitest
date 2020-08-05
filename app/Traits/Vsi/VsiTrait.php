<?php

namespace App\Traits\Vsi;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sicosocial\Vsi;
use App\Traits\DatatableTrait;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait VsiTrait
{
    use DatatableTrait;

    public function getNnajsVsi($request)
    {
        $dataxxxx =  FiDatosBasico::select([
            'fi_datos_basicos.id',
            's_primer_nombre',
            's_documento',
            's_segundo_nombre',
            's_primer_apellido',
            's_segundo_apellido',
            's_apodo',
            's_nombre_identitario',
            'sis_nnaj_id',
            'sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->where('fi_datos_basicos.sis_esta_id', 1);
        return $this->getDt($dataxxxx, $request);
    }

    public function getVsis($request)
    {
        $dataxxxx =  Vsi::select([
            'vsis.id',
            'vsis.fecha',
            'sis_depens.nombre',
            'vsis.sis_nnaj_id',
            'vsis.sis_esta_id',
            'sis_estas.s_estado'
        ])
        ->join('sis_depens', 'vsis.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_estas', 'vsis.sis_esta_id', '=', 'sis_estas.id')
            ->where('vsis.sis_nnaj_id', $request->padrexxx);
        return $this->getDtGeneral($dataxxxx, $request);
    }
}
