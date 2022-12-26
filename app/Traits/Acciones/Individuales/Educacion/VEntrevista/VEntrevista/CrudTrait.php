<?php

namespace App\Traits\Acciones\Individuales\Educacion\VEntrevista\VEntrevista;


use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\VEntrevista;
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
    public function setFormatoValoracion($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                           
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VEntrevista::create($dataxxxx['requestx']->all());
                
            }
            $dataxxxx['modeloxx']->areas()->detach();
            
            if($dataxxxx['requestx']->areas){
                foreach ($dataxxxx['requestx']->areas as $d) {
                    $dataxxxx['modeloxx']->areas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'sis_esta_id'=>1,'entrevista_id'=>$dataxxxx['modeloxx']->id]);
                }
            }
            $dataxxxx['modeloxx']->intra()->detach();
            if($dataxxxx['requestx']->intra){
                foreach ($dataxxxx['requestx']->intra as $d) {
                    $dataxxxx['modeloxx']->intra()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'sis_esta_id'=>1,'entrevista_id'=>$dataxxxx['modeloxx']->id]);
             
                }
            }
            
           
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
