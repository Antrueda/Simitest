<?php

namespace App\Traits\PerfilOcupacionalAdmin\PerfilOcupComponente;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioComponente;

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
    public function setPerfilOcupComponente($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxy = $dataxxxx['requestx']->all();
                $arrayxx =
                    [
                        "nombre" => $dataxxxy['nombre'],
                        "sis_esta_id" =>  $dataxxxy['sis_esta_id'],
                        "estusuario_id" =>  $dataxxxy['estusuario_id'],
                        "user_edita_id" =>  $dataxxxy['user_edita_id'],
                        "user_crea_id" =>  $dataxxxy['user_crea_id']
                    ];


                $dataxxxx['modeloxx'] = FpoDesempenioComponente::create($arrayxx);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
