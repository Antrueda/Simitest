<?php

namespace App\Traits\MatriculaAdmin\Grupo;

use App\Models\Acciones\Grupales\Educacion\GrupoDias;
use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\fichaobservacion\FosStse;
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
    public function setGrupo($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = GrupoMatricula::create($dataxxxx['requestx']->all());
            }

            $dataxxxx['modeloxx']->dias()->detach();
            
                if($dataxxxx['requestx']->dias){
                    foreach ($dataxxxx['requestx']->dias as $d) {
                        $dataxxxx['modeloxx']->dias()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'sis_esta_id'=>1,'grupo_id'=>$dataxxxx['modeloxx']->id]);
                 
                    }
                }

            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
