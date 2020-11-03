<?php

namespace App\Traits\Fi;

use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdComFamiliarObservaciones;
use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiCsdvsi;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\fichaIngreso\NnajSitMil;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Sistema\SisNnaj;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar el grabado de datos basicos para fi, csd y vsi
 */
trait DatosBasicosTrait
{
    public function getCedulaFi($dataxxxx)
    {
        $respuest = ['respuest' => true, 'document' => NnajDocu::where('s_documento', $dataxxxx['requestx']->s_documento)->first()];
        if ($respuest['document'] != null) {
            $respuest['document'] = $respuest['document']->fi_datos_basico;
            $respuest['respuest'] = false;
        }
        return $respuest;
    }


    public function setNnaj($dataxxxx)
    {
        $respuest = $this->setFi($dataxxxx);
        $dataxxxx=$dataxxxx['requestx']->all();
        $dataxxxx['objetoxx'] = $respuest['objetoxx'];
        $dataxxxx['fi_datos_basico_id'] = $dataxxxx['objetoxx']->id;
        FiCsdvsi::getTransaccion($dataxxxx);
        NnajSexo::getTransaccion($dataxxxx);
        NnajNacimi::getTransaccion($dataxxxx);
        NnajDocu::getTransaccion($dataxxxx);
        NnajSitMil::getTransaccion($dataxxxx);
        NnajFiCsd::getTransaccion($dataxxxx);
        NnajUpi::setUpiDatosBasicos($dataxxxx, $respuest['objetoxx']);
        FiDiligenc::transaccion($dataxxxx, $respuest['objetoxx']);
        return $respuest;
    }
    /**
     * registrar desde datos basicos a la composicon familiar en CSD
     *
     * @param array $dataxxxx
     * @return void
     */
    public function setComposionFamiliarDBCsd($dataxxxx)
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $compfami=CsdComFamiliar::where('csd_id',$dataxxxx['objetoxx']->id)
            ->where('s_documento',$dataxxxx['requestx']->s_documento)
            ->first();
            if ($compfami == null) {
                $dataxxxx = $this->getAMayuculas($dataxxxx);
                $dt = new DateTime($dataxxxx['requestx']->d_nacimiento);
                $dataxxxx['requestx']->request->add(['d_nacimiento'=>$dt->format('Y-m-d')]);
                $dataxxxx['requestx']->request->add(['prm_ocupacion_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_parentezco_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_convive_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_visitado_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_vin_actual_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_vin_pasado_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_regimen_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_sisben_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_discapacidad_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_peso_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_peso_dos_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_leer_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_escribir_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_operaciones_id'=>1269]);
                
                $dataxxxx['requestx']->request->add(['prm_educacion_id'=>1269]);
                $dataxxxx['requestx']->request->add(['prm_estudia_id'=>1269]);
                $dataxxxx['user_edita_id'] = Auth::user()->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['objetoxx'] = CsdComFamiliar::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['objetoxx'];
        }, 5);
        return $objetoxx;
    }




    /**
     * registrar composicon familiar en CSD
     *
     * @param array $dataxxxx
     * @return void
     */
    public function setComposionFamiliarCsd($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx = $this->getAMayuculas($dataxxxx);
            $dt = new DateTime($dataxxxx['requestx']->d_nacimiento);
            $dataxxxx['requestx']->request->add(['d_nacimiento' => $dt->format('Y-m-d')]);
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['objetoxx'] != '') {
                $dataxxxx['objetoxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['objetoxx'] = CsdComFamiliar::create($dataxxxx['requestx']->all());
            }
            $dataxxxx['requestx']->request->add(['s_documento' => 9999999999]);
            $respuest = $this->getCedulaFi($dataxxxx);

            if ($respuest['respuest']) {
                $dataxxxx['objetoxx']='';
                $dataxxxx['requestx']->request->add(['prm_estrateg_id' => 1269]);
                $dataxxxx['requestx']->request->add(['prm_escomfam_id' => 228]);
                $dataxxxx['requestx']->request->add(['sis_docfuen_id' => 4]);
                $dataxxxx['requestx']->request->add(['sis_depen_id' => 28]);
                $dataxxxx['requestx']->request->add(['sis_servicio_id' => 1]);
                $dataxxxx['requestx']->request->add(['prm_tipoblaci_id' => 1269]);
                $dataxxxx['requestx']->request->add(['prm_orientacion_sexual_id' => 1269]);
                $dataxxxx['requestx']->request->add(['sis_municipio_id' => 1]);
                $dataxxxx['requestx']->request->add(['prm_doc_fisico_id' => 1269]);
                $dataxxxx['requestx']->request->add(['prm_ayuda_id' => 1269]);
                $dataxxxx['requestx']->request->add(['prm_situacion_militar_id' => 1269]);
                $dataxxxx['requestx']->request->add(['prm_clase_libreta_id' => 1269]);
                $dataxxxx['requestx']->request->add(['prm_gsanguino_id' => 1269]);
                $dataxxxx['requestx']->request->add(['prm_factor_rh_id' => 1269]);
                $respuesx=$this->setNnaj($dataxxxx);
                $respuest = ['respuest' => false, 'document' => $respuesx['objetoxx'],'compfami'=>$respuesx['compfami']];
            }

           // CsdComFamiliarObservaciones::getTransaccion($dataxxxx);
            return $dataxxxx['objetoxx'];
        }, 5);
        return $objetoxx;
    }
    /**
     * agregar desde datos basicos a la composicion familiar fi
     *
     * @param [type] $dataxxxx
     * @return void
     */
    public function setComposionFamiliarFi($dataxxxx)
    {
        $dataxxxx['sis_nnajnnaj_id'] = $dataxxxx['objetoxx']->sis_nnaj_id;
        $dataxxxx['i_prm_ocupacion_id'] = 1269;
        $dataxxxx['i_prm_parentesco_id'] = 805;
        $dataxxxx['i_prm_vinculado_idipron_id'] = 227;
        $dataxxxx['i_prm_convive_nnaj_id'] = 227;
        $dataxxxx['prm_reprlega_id'] = 227;
        if ($dataxxxx['objetoxx']->nnaj_nacimi->Edad < 18) {
            $dataxxxx['prm_reprlega_id'] = 228;
        }
        FiCompfami::create($dataxxxx);
    }
    public function getAMayuculas($dataxxxx)
    {
        if (!isset($dataxxxx['requestx']->s_apodo)) {
            $dataxxxx['requestx']->request->add(['s_apodo'=>'']);
        }
        if (!isset($dataxxxx['requestx']->s_nombre_identitario)) {
            $dataxxxx['requestx']->request->add(['s_nombre_identitario'=>'']);
        }
        $dataxxxx['requestx']->request->add(['s_primer_nombre'=>strtoupper($dataxxxx['requestx']->s_primer_nombre)]);
        $dataxxxx['requestx']->request->add(['s_segundo_nombre'=>strtoupper($dataxxxx['requestx']->s_segundo_nombre)]);
        $dataxxxx['requestx']->request->add(['s_primer_apellido'=>strtoupper($dataxxxx['requestx']->s_primer_apellido)]);
        $dataxxxx['requestx']->request->add(['s_segundo_apellido'=>strtoupper($dataxxxx['requestx']->s_segundo_apellido)]);
        $dataxxxx['requestx']->request->add(['s_nombre_identitario'=>strtoupper($dataxxxx['requestx']->s_nombre_identitario)]);
        $dataxxxx['requestx']->request->add(['s_apodo'=>strtoupper($dataxxxx['requestx']->s_apodo)]);
        return $dataxxxx;
    }
    /**
     * grabar fi_datos_basicos
     *
     * @param [type] $dataxxxx
     * @return void
     */
    public function setFi($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx = $this->getAMayuculas($dataxxxx);
            $compfami = false; // indica si crea como componente familiar
            if ($dataxxxx['objetoxx'] != '') {
                /** Actualizar registro */
                $dataxxxx['objetoxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $compfami = true;
                /** Es un registro nuevo */
                $dataxxxx['requestx']->request->add(['sis_nnaj_id' => SisNnaj::create([
                    'sis_esta_id' => 1,
                    'user_crea_id' => $dataxxxx['requestx']->user_crea_id,
                    'user_edita_id' => $dataxxxx['requestx']->user_edita_id,
                    'prm_escomfam_id' => $dataxxxx['requestx']->prm_escomfam_id])->id]);
                $dataxxxx['objetoxx'] = FiDatosBasico::create($dataxxxx['requestx']->all());
            }
            return ['objetoxx' => $dataxxxx['objetoxx'], 'compfami' => $compfami];
        }, 5);
        return $objetoxx;
    }
    /**
     * agregar registro creado a los nnajs visitados, si la cedula existe y es un nnaj
     *
     * @param array $dataxxxx
     * @return void
     */
    public function setVisitadoCsd($dataxxxx)
    {
        $nnajxxxx = $dataxxxx['nnajxxxx']['document'];
        if (isset($nnajxxxx->sis_nnaj) && $nnajxxxx->sis_nnaj->prm_escomfam_id == 227) {
            $dataxxxx['objetoxx'] = CsdSisNnaj::where('csd_id', $dataxxxx['nnajxxxx']['objetoxx']->csd_id)
            ->where('sis_nnaj_id', $nnajxxxx->id)
            ->first();
            if ($dataxxxx['objetoxx'] == null) {
                $dataxxxx['user_edita_id'] = Auth::user()->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['csd_id'] = $dataxxxx['nnajxxxx']['objetoxx']->csd_id;
                $dataxxxx['sis_nnaj_id'] = $nnajxxxx->id;
                $dataxxxx['prm_tipofuen_id'] = 2315;
                $dataxxxx['sis_esta_id'] = 1;
                $dataxxxx['objetoxx'] = CsdSisNnaj::create($dataxxxx);
            }
        }
    }
    /**
     * grabar datos basicos de CSD
     *
     * @param array $dataxxxx
     * @return void
     */
    public function setCsd($dataxxxx)
    {
        /** Actualizar registro */
        if ($dataxxxx['objetoxx'] != '') {
            $respuest = $this->getCedulaFi($dataxxxx);
            $dataxxxx['objetoxx']->update($dataxxxx['requestx']->all());
        } else {
            $respuest = $this->getCedulaFi($dataxxxx);

            if ($respuest['respuest']) {
                $dataxxxx['objetoxx']='';
                $dataxxxx['requestx']->request->add(['prm_estrateg_id' => 1269]);
                $dataxxxx['requestx']->request->add(['prm_escomfam_id' => 228]);
                $dataxxxx['requestx']->request->add(['sis_docfuen_id' => 4]);
                $dataxxxx['requestx']->request->add(['sis_depen_id' => 28]);
                $dataxxxx['requestx']->request->add(['sis_servicio_id' => 1]);
                $respuesx=$this->setNnaj($dataxxxx);
                $respuest = ['respuest' => false, 'document' => $respuesx['objetoxx'],'compfami'=>$respuesx['compfami']];
            }
            $dataxxxx['objetoxx'] = CsdDatosBasico::create($dataxxxx['requestx']->all());
        }
        $this->setComposionFamiliarDBCsd($dataxxxx);
        $respuest['objetoxx'] = $dataxxxx['objetoxx'];
        $this->setVisitadoCsd(['nnajxxxx' => $respuest]);

        return $respuest;
    }

    public function getTransaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx = [];
            switch ($dataxxxx['requestx']->tipoacci) {
                case '1': // datos basicos fi
                    $objetoxx = $this->setNnaj($dataxxxx);
                    /* agregarlo como componeten familiar */
                    if ($objetoxx['compfami']) {
                        $this->setComposionFamiliarFi($dataxxxx);
                    }
                    break;
                case '2': // composicion familiar fi
                    # code...
                    break;
                case '3': // datos basicos csd
                    $objetoxx = $this->setCsd($dataxxxx);
                    break;
                case '4': // composicion familiar csd
                    $objetoxx =$this->setComposionFamiliarCsd($dataxxxx);
                    break;
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }
}
