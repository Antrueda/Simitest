<?php

namespace App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\ValorCompetencias;


use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\UniComp;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\fichaIngreso\FiResidencia;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setUnidad($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);

            $dataxxxx['requestx']->request->add(['conocimiento' => $dataxxxx['requestx']->conoci]);
            $dataxxxx['requestx']->request->add(['desempeno' => $dataxxxx['requestx']->desemp]);
            $dataxxxx['requestx']->request->add(['producto' => $dataxxxx['requestx']->product]);
            //ddd( $dataxxxx['requestx']->request);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                           
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = UniComp::create($dataxxxx['requestx']->all());
               // ddd( $dataxxxx['modeloxx']);
            }
            
            
           
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
