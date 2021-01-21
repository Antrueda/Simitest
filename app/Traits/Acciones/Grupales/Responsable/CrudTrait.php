<?php

namespace App\Traits\Acciones\Grupales\Responsable;

use App\Models\Acciones\Grupales\AgResponsable;
use App\Traits\Acciones\Grupales\Tallacciones\ActivarTallerTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{
    use ActivarTallerTrait;
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAgResponsable($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['modeloxx'] = AgResponsable::create($dataxxxx['requestx']->all());
                $this->getActivar($dataxxxx['modeloxx']->ag_actividad_id);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
