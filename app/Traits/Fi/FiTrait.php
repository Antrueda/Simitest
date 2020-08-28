<?php

namespace App\Traits\Fi;

use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Traits\DatatableTrait;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait FiTrait
{
    use DatatableTrait;

    public function getNnajsFi($request)
    {
        $dataxxxx =  FiDatosBasico::select([
            'fi_datos_basicos.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.sis_esta_id',
            'fi_datos_basicos.created_at',
            'sis_estas.s_estado'
        ])
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id');
        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getCompoFami($request)
    {
        $dataxxxx =  FiComposicionFami::select([
            'fi_composicion_famis.id',
            'fi_composicion_famis.s_primer_nombre',
            'fi_composicion_famis.s_documento',
            'fi_composicion_famis.s_segundo_nombre',
            'fi_composicion_famis.s_primer_apellido',
            'fi_composicion_famis.s_segundo_apellido',
            'fi_composicion_famis.sis_esta_id',
            'fi_composicion_famis.created_at',
            'sis_estas.s_estado'
        ])
        ->where('nnaj_nfamili_id',$request->padrexxx)
            ->join('sis_estas', 'fi_composicion_famis.sis_esta_id', '=', 'sis_estas.id');
        return $this->getDtAcciones($dataxxxx, $request);
    }
}
