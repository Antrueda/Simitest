<?php

namespace App\Traits\Acciones\Grupales\Matriculannaj;

use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Individuales\Pivotes\SalidaJovene;
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
    public function setMatnnaj($dataxxxx)
    {
   
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            $dataxxxx['requestx']->request->add(['hora_salida' =>  explode(' ',$dataxxxx['padrexxx']->fecha)[0].' '.$dataxxxx['requestx']->hora_salida]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = IMatriculaNnaj::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
