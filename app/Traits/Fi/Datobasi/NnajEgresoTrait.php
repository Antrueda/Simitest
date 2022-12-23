<?php

namespace App\Traits\Fi\Datobasi;

use App\Models\fichaIngreso\NnajUpi;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\sistema\SisNnaj;
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
            $value->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::id(), 'prm_principa_id' => 228]);
        }
    }
    /**
     * Verificar si el nnaj que se está editando tiene upi en en egreso 
     * en el antiguo sistemas y si lo tiene, entonces también lo asigna en el nuevo
     */
    public function setEgresoNET($dataxxxx)
    {
        $respuest = false;
        $datosbas = SisNnaj::where('id', $dataxxxx['nnajidxx'])->first();
        $simianti = GeNnajDocumento::join('ge_upi_nnaj', 'ge_nnaj_documento.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj')
            ->where('ge_nnaj_documento.id_nnaj', $datosbas->simianti_id)
            ->where('ge_upi_nnaj.origen', 'EGR')
            ->where("ge_upi_nnaj.fuente", "EGR")
            ->where("ge_upi_nnaj.estado", "A")
            ->first();
        if (!is_null($simianti)) {
            $nnajupis = NnajUpi::where('sis_nnaj_id', $dataxxxx['nnajidxx'])->where('sis_depen_id', 37)
                ->first();
            $respuest = true;
        }
        return  $respuest;
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
            if (Auth::user()->s_documento=='17496705') {
            //     $nnajupix = NnajUpi::where('sis_nnaj_id', $dataxxxx['nnajidxx'])
            // ->where('sis_esta_id', 1)
            // ->get();
            // 26897
                // ddd($nnajupis);
             }

        if (is_null($nnajupis)) {
            $respuest = false;
        }
        return  $respuest;
    }
    /**
     * Activar la upi de egreso
     */
    public function setActivarEgreso($dataxxxx)
    {

        // * E
        $nnajupis = NnajUpi::where('sis_nnaj_id', $dataxxxx['nnajidxx'])->where('sis_depen_id', 37)
            ->first();
        if (!is_null($nnajupis)) {
            $nnajupis->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::id(), 'prm_principa_id' => 227]);


            foreach ($nnajupis->nnaj_deses as $key => $value) {
                $value->update([
                    'user_edita_id' => Auth::id(),
                    'prm_principa_id' => 227,
                    'sis_esta_id' => 1,
                ]);
            }
        }
    }

    /**
     * habilitar solo la upi de egreso del nnaj
     */
    public function getEgresNET($dataxxxx)
    {
        $respuest = $this->setTieneEgresoNET($dataxxxx);

        
        $tienegre = $this->setEgresoNET($dataxxxx);
        if ($tienegre) {
            $respuest = $tienegre;
        }

        if ($respuest) {
            $this->getInactivarUpisNET($dataxxxx);
            $this->setActivarEgreso($dataxxxx);
        }
    }
}
