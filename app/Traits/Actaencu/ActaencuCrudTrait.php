<?php

namespace App\Traits\Actaencu;

use App\Models\Actaencu\AeAsisNnajDatAux;
use App\Models\Actaencu\AeAsistencia;
use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeDirregi;
use App\Models\Actaencu\AeEncuentro;
use App\Models\fichaIngreso\FiDatosBasico;
use app\Models\sistema\SisNnaj;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait ActaencuCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAeEncuentro($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeEncuentro::create($dataxxxx['requestx']->all());
            }

            $dataxxxx['modeloxx']->ag_recurso_id()->detach();
            foreach ($dataxxxx['requestx']->ag_recurso_id as $key => $value) {
                $dataxxxx['modeloxx']->ag_recurso_id()->attach([$value => [
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1,
                ]]);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAeContacto($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeContacto::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAeAsistencia($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->aeDirregis->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AeAsistencia::create($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['ae_asistencia_id' => $dataxxxx['modeloxx']->id]);
                AeDirregi::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setAeAsisNnaj($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $dataxxxx['modeloxx']->aeAsisnnajdataux->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                // * Se añaden campos para crear el nnaj en el sistema.
                $dataxxxx['requestx']->request->add(['prm_escomfam_id' => 'nueva opcion']); // ! cambiar
                $dataxxxx['requestx']->request->add(['prm_nuevoreg_id' => 227]);
                $dataxxxx['requestx']->request->add(['sis_esta_id' => 1]);
                $sisnnajx = SisNnaj::create($dataxxxx['requestx']->all());
                // * Se añaden datos para crear la ficha de ingreso.
                $dataxxxx['requestx']->request->add(['sis_nnaj_id' =>  $sisnnajx->id]);
                $dataxxxx['requestx']->request->add(['prm_estrateg_id' => 69]);
                $dataxxxx['requestx']->request->add(['sis_docfuen_id' => 2]);
                $dataxxxx['modeloxx'] = FiDatosBasico::create($dataxxxx['requestx']->all());
                AeAsisNnajDatAux::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
