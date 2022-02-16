<?php

namespace App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCursos;


use App\Models\Acciones\Grupales\Traslado\Traslado;
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
    public function setAMatriculaCurso($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            $residenc=$dataxxxx['padrexxx']->FiResidencia;
            
           if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $residenc->update(['s_telefono_uno' => $dataxxxx['requestx']->telefono, 's_telefono_dos' => $dataxxxx['requestx']->celular,'s_telefono_tres' =>$dataxxxx['requestx']->celular2]);
           
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = MatriculaCurso::create($dataxxxx['requestx']->all());
                $residenc->update(['s_telefono_uno' => $dataxxxx['requestx']->telefono, 's_telefono_dos' => $dataxxxx['requestx']->celular,'s_telefono_tres' =>$dataxxxx['requestx']->celular2]);
            }
            
            
           
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
