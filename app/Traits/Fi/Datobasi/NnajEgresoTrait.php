<?php

namespace App\Traits\Fi\Datobasi;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeUpiNnaj;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisServicio;
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
     * Verifica que el nnaj que se está editando tenga upi en en egreso en el antiguo sistemas y si lo tiene, entonces también lo asigna en el nuvo
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
        // GeUpiNnaj
        $respuest = true;
        $nnajupis = NnajUpi::where('sis_nnaj_id', $dataxxxx['nnajidxx'])->where('sis_depen_id', 37)
            ->where('sis_esta_id', 1)
            ->first();


        if (is_null($nnajupis)) {
            $respuest = false;
            if (Auth::user()->s_documento == '111111111111') {
                
            // $this->setEgresoNET($dataxxxx);
            }
        }
        return  $respuest;
    }

    public function setActivarEgreso($dataxxxx)
    {
        $nnajupis = NnajUpi::where('sis_nnaj_id', $dataxxxx['nnajidxx'])->where('sis_depen_id', 37)
            ->first();

        $nnajupis->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::id(), 'prm_principa_id' => 227]);


        foreach ($nnajupis->nnaj_deses as $key => $value) {
            $value->update([
                'user_edita_id' => Auth::id(),
                'prm_principa_id' => 227,
                'sis_esta_id' => 1,
            ]);
        }
    }

    /**
     * habilitar solo la upi de egreso del nnaj
     */
    public function getEgresNET($dataxxxx)
    {
        $respuest = $this->setTieneEgresoNET($dataxxxx);
        if (Auth::user()->s_documento == '111111111111') {
        }
        // if (Auth::user()->s_documento == '111111111111') {

        if ($respuest) {
            $this->getInactivarUpisNET($dataxxxx);
            $this->setActivarEgreso($dataxxxx);
        }

    
        // }
    }
}
