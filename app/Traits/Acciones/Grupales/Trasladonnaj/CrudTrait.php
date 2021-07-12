<?php

namespace App\Traits\Acciones\Grupales\Trasladonnaj;

use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\fichaIngreso\NnajUpi;
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
    public function setTrasnnaj($dataxxxx)
    {
        
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            $dataxxxx['sis_depen_id'] = $dataxxxx['padrexxx']->prm_trasupi_id;
            $dataxxxx['sis_servicio_id'] = $dataxxxx['padrexxx']->prm_serv_id;
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = TrasladoNnaj::create($dataxxxx['requestx']->all());
            }
            if($dataxxxx['padrexxx']->tipotras_id==2642){
                NnajUpi::setUpiTrasladoCompartido($dataxxxx);
            }else{
              
                NnajUpi::setUpiTrasladoGeneral($dataxxxx);
            }
            
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
