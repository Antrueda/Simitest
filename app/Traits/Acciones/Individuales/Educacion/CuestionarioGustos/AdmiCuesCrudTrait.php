<?php

namespace App\Traits\Acciones\Individuales\Educacion\CuestionarioGustos;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\Acciones\Individuales\Educacion\AdmiCgih\CgihCategoria;
use App\Models\Acciones\Individuales\Educacion\AdmiCgih\CgihHabilidad;



/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait AdmiCuesCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAsdActividad($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
               // * obtener el consecutivo
                $consecut = CgihHabilidad::where ('tipos_actividad_id',$dataxxxx['requestx']->tipos_actividad_id)->get(['id'])->count();
                $dataxxxx['requestx']->request->add(['consectivo_item' => $dataxxxx['itemxxxx'] . ($consecut + 1)]);
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = CgihHabilidad::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setTiposActividad($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = CgihCategoria::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

}
