<?php

namespace App\Traits\PerfilOcupacionalAdmin\PerfilOcupItems;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioItem;


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
    public function setPerfilOcupItem($dataxxxx)
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
                        "item_nombre" => $dataxxxy['item_nombre'],
                        "categoria_id" => $dataxxxy['categoria_id'],
                        "desempenio_id" => $dataxxxy['desempenio_id'],
                        "estusuario_id" =>  $dataxxxy['estusuario_id'],
                        "user_edita_id" =>  $dataxxxy['user_edita_id'],
                        "user_crea_id" =>  $dataxxxy['user_crea_id'],
                        "sis_esta_id" =>  $dataxxxy['sis_esta_id']
                    ];


                $dataxxxx['modeloxx'] = FpoDesempenioItem::create($arrayxx);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'],$dataxxxx['requestx']->desempenio_id)
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
