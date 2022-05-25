<?php

namespace App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\CuestionarioGustos;


use Illuminate\Support\Facades\DB;
use App\Models\Ejemplo\AeEncuentro;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfPerfilVoca;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;





/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait CigCuestionarioCrudTrait
{
   /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
   


    public function setCghiCuestionario($dataxxxx)
    {

        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'fecha'=>$dataxxxx['requestx']->fecha,
                    'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                ]);
                $dataxxxx['modeloxx']->habilidades()->sync($dataxxxx['requestx']->habilidades);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = CgihCuestionario::create([
                    'sis_nnaj_id'=>$dataxxxx['requestx']->sis_nnaj_id,
                    'fecha'=>$dataxxxx['requestx']->fecha,
                    'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                    'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                ]);

                $dataxxxx['modeloxx']->habilidades()->sync($dataxxxx['requestx']->habilidades);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
