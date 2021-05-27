<?php

namespace App\Traits\Fi\Datobasi;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\fichaIngreso\NnajFocali;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\fichaIngreso\NnajSitMil;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Sistema\SisNnaj;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DBCrudTrait
{
    private $objetoxx;
    private $dataxxxx;
    /**
     * actulizar las tablas complemento de fi_datos_basicos
     *
     */
    public function setActualizarNnaj()
    {
        $this->objetoxx->update($this->dataxxxx);
        $this->dataxxxx['fi_datos_basico_id'] = $this->objetoxx->id;
        $this->objetoxx->nnaj_sexo->update($this->dataxxxx);
        $this->objetoxx->nnaj_docu->update($this->dataxxxx);
        $this->objetoxx->nnaj_nacimi->update($this->dataxxxx);
        $this->objetoxx->nnaj_sit_mil->update($this->dataxxxx);
        $this->objetoxx->nnaj_focali->update($this->dataxxxx);
        $this->objetoxx->nnaj_fi_csd->update($this->dataxxxx);
    }

    /**
     * crear el nnaj y registrar las tablas complemento de fi_datos_basicos
     *
     */
    public function setCrearNnaj()
    {
        $this->dataxxxx['sis_nnaj_id'] = SisNnaj::create(
            [
                'sis_esta_id' => 1, 'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'prm_escomfam_id' => 227,
                "simianti_id" => 0,
                "prm_nuevoreg_id" => 227
            ]
        )->id;
        $this->dataxxxx['user_crea_id'] = Auth::user()->id;
        $this->objetoxx = FiDatosBasico::create($this->dataxxxx);

        $this->dataxxxx['fi_datos_basico_id'] = $this->objetoxx->id;
        NnajSexo::create($this->dataxxxx);
        NnajNacimi::create($this->dataxxxx);
        NnajDocu::create($this->dataxxxx);
        NnajSitMil::create($this->dataxxxx);
        NnajFocali::create($this->dataxxxx);
        NnajFiCsd::create($this->dataxxxx);
    }
    /**
     * agregar el nnaj como componente familiar
     *
     */
    public function setComposicionFamiliar()
    {
        $this->dataxxxx['sis_nnajnnaj_id'] = $this->dataxxxx['sis_nnaj_id'];
        $this->dataxxxx['i_prm_ocupacion_id'] = 235;
        $this->dataxxxx['i_prm_parentesco_id'] = 805;
        $this->dataxxxx['i_prm_vinculado_idipron_id'] = 227;
        $this->dataxxxx['i_prm_convive_nnaj_id'] = 227;
        $this->dataxxxx['prm_reprlega_id'] = 227;
        if ($this->objetoxx->nnaj_nacimi->Edad < 18) {
            $this->dataxxxx['prm_reprlega_id'] = 228;
        }
        FiCompfami::create($this->dataxxxx);
    }

    /**
     * crear o actuliar datos basicos
     *
     */
    public function setDatosBasicos($dataxxxx, $objetoxx, $infoxxxx) // grabar de datos basicos
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $this->objetoxx = $objetoxx;
            $this->dataxxxx = $dataxxxx;
            $dt = new DateTime($dataxxxx['d_nacimiento']);
            $this->dataxxxx['d_nacimiento'] = $dt->format('Y-m-d');
            $this->dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($this->objetoxx != '') {
                /** Actualizar registro */
                $this->setActualizarNnaj();
            } else {
                $this->dataxxxx['sis_docfuen_id'] = 2;
                $this->dataxxxx['sis_esta_id'] = 1;
                /** Es un registro nuevo */
                $this->setCrearNnaj();
                /**
                 * agregar el nnaj a la composocion familiar
                 */
                $this->setComposicionFamiliar();
                /**
                 * agregar las upis cuando es un nnaj traido del antiguo simi
                 */
                // if($this->dataxxxx['pasaupis']){
                //     $this->getUpisNnajIFT(['objetoxx'=>$this->objetoxx]);
                // }
            }

            NnajUpi::setUpiDatosBasicos($this->dataxxxx, $this->objetoxx);
            FiDiligenc::transaccion($this->dataxxxx, $this->objetoxx);
            //    $this->getInsertarDatosBasicos($dataxxxx, $this->objetoxx);
            return $this->objetoxx;
        }, 5);
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$objetoxx->id])
            ->with('info', $infoxxxx);
        return $objetoxx;
    }
}
