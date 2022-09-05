<?php

namespace App\Traits\Acciones\Individuales\Sociolegal\AtencionCaso;




use App\Models\Acciones\Individuales\SocialLegal\CasoJur;
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
    public function setCasoJuridico($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            //ddd($dataxxxx['requestx']->checki);
            $FiResidencia=$dataxxxx['padrexxx']->FiResidencia;
            if($dataxxxx['requestx']->checki==1){
                $FiResidencia->update($dataxxxx['requestx']->all());
                ddd($FiResidencia);
            }
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
               
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = CasoJur::create($dataxxxx['requestx']->all());
            
                
            }
     
            
            
           
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
