<?php

namespace App\Traits\Acciones\Individuales\Educacion\VctOcupacional\FormuVctOcupacional;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\Vcto;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoCompeten;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoCaracteri;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait VctCrudTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setVctocupacional($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'fecha'=>$dataxxxx['requestx']->fecha,
                    'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                ]);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = Vcto::create([
                    'sis_nnaj_id'=>$dataxxxx['requestx']->sis_nnaj_id,
                    'fecha'=>$dataxxxx['requestx']->fecha,
                    'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                    'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                    'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                ]);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setVctocompetens($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VctoCompeten::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->vcto_id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setVctocaracterizacion($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                //eliminara relacion respuestas anteriores para luego actualizar
                foreach ($dataxxxx['modeloxx']->caracterizacion as $key => $caracterizacion) {
                    $caracterizacion->items()->detach();
                }
                $dataxxxx['modeloxx']->caracterizacion()->delete();

                foreach ($dataxxxx['requestx']->caracterizacion as $key => $value) {
                    $dataxxxx['modeloxx'] = VctoCaracteri::create([
                        'vcto_id'=>$dataxxxx['requestx']->vcto_id,
                        'area' => $value['area'],
                        'observacion' => $value['descripcion'],
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                    ]);

                    $data=[];
                    foreach ($value['items'] as $key => $item) {
                        array_push($data,['vcto_item_id'=>$key,'prm_valor'=>$item]);
                    }
                    $dataxxxx['modeloxx']->items()->sync($data);
                }
                $dataxxxx['padrexxx']->update(['concepto'=>$dataxxxx['requestx']->concepto]);
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                foreach ($dataxxxx['requestx']->caracterizacion as $key => $value) {
                    $dataxxxx['modeloxx'] = VctoCaracteri::create([
                        'vcto_id'=>$dataxxxx['requestx']->vcto_id,
                        'area' => $value['area'],
                        'observacion' => $value['descripcion'],
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                    ]);

                    $data=[];
                    foreach ($value['items'] as $key => $item) {
                        array_push($data,['vcto_item_id'=>$key,'prm_valor'=>$item]);
                    }
                    $dataxxxx['modeloxx']->items()->sync($data);
                }

                $dataxxxx['padrexxx']->update(['concepto'=>$dataxxxx['requestx']->concepto]);
            }
            return $dataxxxx['padrexxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$dataxxxx['padrexxx']->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setVctoFortalecer($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['padrexxx']->fortalecer()->sync($dataxxxx['requestx']->fortalecer);
            } else {
                $dataxxxx['padrexxx']->fortalecer()->sync($dataxxxx['requestx']->fortalecer);
            }
            return $dataxxxx['padrexxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }

    public function setVctoRemitir($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['padrexxx']->update(
                    [
                        'prm_remitir'=>$dataxxxx['requestx']->prm_remitir,
                        'interinstitu'=>$dataxxxx['requestx']->interinstitu,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id
                    ]);

                $dataxxxx['padrexxx']->intrainstitucional()->sync($dataxxxx['requestx']->intrainstitucional);
            } else {
                $dataxxxx['padrexxx']->update(
                    [
                        'prm_remitir'=>$dataxxxx['requestx']->prm_remitir,
                        'interinstitu'=>$dataxxxx['requestx']->interinstitu,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id
                    ]);

                $dataxxxx['padrexxx']->intrainstitucional()->sync($dataxxxx['requestx']->intrainstitucional);
            }
            return $dataxxxx['padrexxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}