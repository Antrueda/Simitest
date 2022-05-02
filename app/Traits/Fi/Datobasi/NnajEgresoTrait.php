<?php

namespace App\Traits\Fi\Datobasi;

use App\Models\fichaIngreso\NnajUpi;
use Illuminate\Support\Facades\Auth;

/**
 * Poner en egreso a los nnaj que tienen activa la upi egreso
 */
trait NnajEgresoTrait
{
    /**
     * inactivar todas las upis del nnaj
     */
    public function getInactivarUpisNET($dataxxxx)
    {
        $nnajupis = NnajUpi::where('sis_nnaj_id', $dataxxxx['nnajidxx'])
            ->where('sis_esta_id', 1)
            ->get();

        foreach ($nnajupis as $key => $value) {
            $value->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::id(),'prm_principa_id'=>228]);
        }
    }

    /**
     * saber si el nnaj tiene la upi egreso
     */
    public function setTieneEgresoNET($dataxxxx)
    {
        $respuest = true;
        $nnajupis = NnajUpi::where('sis_nnaj_id', $dataxxxx['nnajidxx'])->where('sis_depen_id', 37)
            ->where('sis_esta_id', 1)
            ->first();
        if (is_null($nnajupis)) {
            $respuest = false;
        }
        return  $respuest;
    }

    public function setActivarEgreso($dataxxxx)
    {
        $nnajupis = NnajUpi::where('sis_nnaj_id', $dataxxxx['nnajidxx'])->where('sis_depen_id', 37)
        ->first();
      
        $nnajupis->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::id(),'prm_principa_id'=>227]);

       
        foreach ($nnajupis->nnaj_deses as $key => $value) {
            $value->update([
                'user_edita_id'=> Auth::id(),
                'prm_principa_id'=>227,
                'sis_esta_id'=>1,
            ]);
        }
        
    }
    /**
     * habilitar solo la upi de egreso del nnaj
     */
    public function getEgresNET($dataxxxx)
    {
        if (Auth::user()->s_documento == '111111111111') {
            $respuest = $this->setTieneEgresoNET($dataxxxx);
            if ($respuest) {
                $this->getInactivarUpisNET($dataxxxx);
                $this->setActivarEgreso($dataxxxx);
            }
    
            // ddd($respuest);
        }
    }
}
