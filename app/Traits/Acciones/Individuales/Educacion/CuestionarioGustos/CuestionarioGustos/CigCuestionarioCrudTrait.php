<?php

namespace App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos\CuestionarioGustos;


use Illuminate\Support\Facades\DB;
use App\Models\Ejemplo\AeEncuentro;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\FormatoValoracion\ValoraComp;





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
    public function setFormatoValoracion($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                           
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = ValoraComp::create($dataxxxx['requestx']->all());
                
            }
            
            
           
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
