<?php

namespace App\Traits\Acciones\Grupales\Carguedocu\Fi;

use App\Helpers\Archivos\Archivos;
use App\Models\Acciones\Grupales\AgCarguedoc;
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
    public function setAgCargueDoc($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $rutaxxxx = Archivos::getRuta([
                'requestx' => $dataxxxx['requestx'],
                'nombarch' => 's_doc_adjunto_ar',
                'rutaxxxx' => 'talleres/soportes',
                'nomguard' => 'talleres'
            ]);
            if ($rutaxxxx != false) {
                $dataxxxx['requestx']->request->add(['s_ruta' => $rutaxxxx]);
            }

            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AgCarguedoc::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
