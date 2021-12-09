<?php

namespace App\Traits\Actenadm;


use App\Models\Actaencu\AeRecuadmi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait ActenadmCrudTrait
{

    /**
     * realizar el crud de la administración de los recursos del acta de encentro
     *
     * @param array $dataxxxx
     * @return void
     */
    public function setAeRecuadmi($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeRecuadmi::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['permisox'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }


}
