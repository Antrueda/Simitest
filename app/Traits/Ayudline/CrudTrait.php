<?php

namespace App\Traits\Ayudline;

use App\Models\Ayuda\Ayuda;
use App\Traits\Ayudline\Backend\Ayudaxxx\CargarImagenTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CrudTrait
{
    use CargarImagenTrait;
    /**
     * grabar o actualizar registros para paises
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAyuda($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {

            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = Ayuda::create($dataxxxx['requestx']->all());
            }
            if ($dataxxxx['modeloxx']->id > 0) {
                $this->CargarImagenes($dataxxxx['guardado'], $dataxxxx['modeloxx']->id, $dataxxxx['requestx']->cuerpo);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
