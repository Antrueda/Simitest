<?php

namespace App\Traits\Direccionamiento;

use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Direccionamiento\Direccionamiento;
use App\Models\Direccionamiento\DireccionInst;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait CrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setDireccionamiento($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['direc_id' => $dataxxxx['modeloxx']->id]);
                $dataxxxx['objetoxx']=$dataxxxx['requestx']->all();
                if ($dataxxxx['modeloxx']->direcinsti != '') {
                    $dataxxxx['modeloxx']->direcinsti->update($dataxxxx['objetoxx']);
                     }else{
                        DireccionInst::create($dataxxxx['objetoxx']);
                     }
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = Direccionamiento::create($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['direc_id' => $dataxxxx['modeloxx']->id]);
                $dataxxxx['objetoxx']=$dataxxxx['requestx']->all();
                DireccionInst::create($dataxxxx['objetoxx']);
            }

            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

   
}
