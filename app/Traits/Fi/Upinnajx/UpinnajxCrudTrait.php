<?php

namespace App\Traits\Fi\Upinnajx;

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
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Sistema\SisNnaj;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait UpinnajxCrudTrait
{
    public function setNnajDocu($nuevoxxx = false)
    {

        $dataxxxx['s_documento'] = $this->dataxxxx['s_documento'];
        $dataxxxx['fi_datos_basico_id'] = $this->dataxxxx['fi_datos_basico_id'];
        $dataxxxx['prm_ayuda_id'] = $this->dataxxxx['prm_ayuda_id'];
        $dataxxxx['prm_tipodocu_id'] = $this->dataxxxx['prm_tipodocu_id'];
        $dataxxxx['prm_doc_fisico_id'] = $this->dataxxxx['prm_doc_fisico_id'];
        $dataxxxx['sis_pai_id'] = $this->dataxxxx['sis_paiexp_id'];
        $dataxxxx['sis_departam_id'] = $this->dataxxxx['sis_departamexp_id'];
        $dataxxxx['sis_municipio_id'] = $this->dataxxxx['sis_municipioexp_id'];
        if ($nuevoxxx) {
            $dataxxxx['sis_esta_id'] = $this->dataxxxx['sis_esta_id'];
            $dataxxxx['user_crea_id'] = $this->dataxxxx['user_crea_id'];
        }
        $dataxxxx['user_edita_id'] = $this->dataxxxx['user_edita_id'];
        $dataxxxx['sis_docfuen_id'] = 2;
        return $dataxxxx;
    }
    private $objetoxx;
    private $dataxxxx;
    /**
     * actulizar las tablas complemento de fi_datos_basicos
     *
     */
    public function setActualizarNnaj()
    {
        $this->dataxxxx['sis_docfuen_id'] = 2;
        $this->objetoxx->update($this->dataxxxx);
        $this->dataxxxx['fi_datos_basico_id'] = $this->objetoxx->id;
        $this->objetoxx->sis_nnaj->update($this->dataxxxx);
        if (is_null($this->objetoxx->nnaj_sexo)) {
            // $this->dataxxxx['sis_esta_id'] = 1;
            NnajSexo::create($this->dataxxxx);
        } else {
            $this->objetoxx->nnaj_sexo->update($this->dataxxxx);
        }

        $cedulaxx = GeNnajDocumento::where('numero_documento', $this->objetoxx->nnaj_docu->s_documento)->first();
        $respuest = $this->objetoxx->nnaj_docu->update($this->setNnajDocu());
        if (!is_null($cedulaxx)) {
            $cedulaxx->update(['numero_documento' => $this->dataxxxx['s_documento']]);
        }


        $this->objetoxx->nnaj_nacimi->update($this->dataxxxx);

        if (is_null($this->objetoxx->nnaj_sit_mil)) {
            // $this->dataxxxx['sis_esta_id'] = 1;
            NnajSitMil::create($this->dataxxxx);
        } else {
            $this->objetoxx->nnaj_sit_mil->update($this->dataxxxx);
        }
        if (is_null($this->objetoxx->nnaj_focali)) {
            NnajFocali::create($this->dataxxxx);
        } else {
            $this->objetoxx->nnaj_focali->update($this->dataxxxx);
        }
        if (is_null($this->objetoxx->nnaj_fi_csd)) {
            NnajFiCsd::create($this->dataxxxx);
        } else {
            $this->objetoxx->nnaj_fi_csd->update($this->dataxxxx);
        }
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
        NnajDocu::create($this->setNnajDocu(true));
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
        $repuest=$dataxxxx['prm_tipodocu_id'] != 144 && $dataxxxx['prm_tipodocu_id'] != 142;
        if (!$repuest) {
            $dataxxxx['prm_gsanguino_id']=235;
            $dataxxxx['prm_factor_rh_id']=235;
        }
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
