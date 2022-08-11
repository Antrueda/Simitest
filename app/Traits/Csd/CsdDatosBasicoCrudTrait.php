<?php

namespace App\Traits\Csd;

use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\fichaIngreso\FiCsdvsi;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\fichaIngreso\NnajSitMil;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\sistema\SisNnaj;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar el crud para los indicadores
 */
trait CsdDatosBasicoCrudTrait
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

    public function setFi($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
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
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'prm_escomfam_id' => 2315
                ])->id]);
                $dataxxxx['objetoxx'] = FiDatosBasico::create($dataxxxx['requestx']->all());
            }
            return ['objetoxx' => $dataxxxx['objetoxx'], 'compfami' => $compfami];
        }, 5);
        return $objetoxx;
    }
    public function setNnaj($dataxxxx)
    {
        $respuest = $this->setFi($dataxxxx);

        $dataxxxy = $dataxxxx['requestx']->all();
        if (isset($dataxxxx['diligenc'])) {
            $dataxxxy['diligenc'] = $dataxxxx['diligenc'];
        }
        $dataxxxy['objetoxx'] = $respuest['objetoxx'];
        $dataxxxy['fi_datos_basico_id'] = $dataxxxy['objetoxx']->id;
        FiCsdvsi::getTransaccion($dataxxxy);
        NnajSexo::getTransaccion($dataxxxy);
        NnajNacimi::getTransaccion($dataxxxy);
        NnajDocu::getTransaccion($dataxxxy);
        NnajSitMil::getTransaccion($dataxxxy);
        NnajFiCsd::getTransaccion($dataxxxy);
        NnajUpi::setUpiDatosBasicos($dataxxxy, $respuest['objetoxx']);
        FiDiligenc::transaccion($dataxxxy, $respuest['objetoxx']);
        return $respuest;
    }

    public function setCsdComFamiliar($dataxxxx)
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $compfami = CsdComFamiliar::where('csd_id', $dataxxxx['requestx']->csd_id)
                ->where('s_documento', $dataxxxx['requestx']->s_documento)
                ->first();

            if ($compfami == null) {
                $dt = new DateTime($dataxxxx['requestx']->d_nacimiento);
                $dataxxxx['requestx']->request->add(['d_nacimiento' => $dt->format('Y-m-d')]);
                $dataxxxx['requestx']->request->add(['prm_ocupacion_id' => 1]);
                $dataxxxx['requestx']->request->add(['prm_parentezco_id' => 1]);
                $dataxxxx['user_edita_id'] = Auth::user()->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['objetoxx'] = CsdComFamiliar::create($dataxxxx['requestx']->all());
            }

            return $dataxxxx['objetoxx'];
        }, 5);
        return $objetoxx;
    }

    public function setCsdSisNnaj($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
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
        }, 5);
    }


    public function setCsdDatosBasico($dataxxxx)
    {
        $dataxxxx['requestx']->request->add([
            'sis_esta_id' => 1,
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
        ]);

        $objetoxx = DB::transaction(function () use ($dataxxxx) {
        /** Actualizar registro */
        if ($dataxxxx['objetoxx'] != '') {
            $respuest = $this->getCedulaFi($dataxxxx);
            $dataxxxx['objetoxx']->update($dataxxxx['requestx']->all());
        } else {
            $respuest = $this->getCedulaFi($dataxxxx);
            if ($respuest['respuest']) {
                $dataxxxx['objetoxx'] = '';
                $dataxxxx['requestx']->request->add(['prm_estrateg_id' => 235]);
                $dataxxxx['requestx']->request->add(['prm_escomfam_id' => 228]);
                $dataxxxx['requestx']->request->add(['sis_docfuen_id' => 4]);
                $dataxxxx['requestx']->request->add(['sis_depen_id' => 28]);
                $dataxxxx['requestx']->request->add(['sis_servicio_id' => 1]);
                $dataxxxx['diligenc'] = explode(' ', $dataxxxx['padrexxx']->csd->fecha)[0];
                // ddd(2);
                $respuesx = $this->setNnaj($dataxxxx);
                $respuest = ['respuest' => false, 'document' => $respuesx['objetoxx'], 'compfami' => $respuesx['compfami']];
            }
            $dataxxxx['objetoxx'] = CsdDatosBasico::create($dataxxxx['requestx']->all());
        }
        $this->setCsdComFamiliar($dataxxxx);
        $respuest['objetoxx'] = $dataxxxx['objetoxx'];
        $this->setCsdSisNnaj(['nnajxxxx' => $respuest]);
        return $dataxxxx['objetoxx'];
        }, 5);
        return redirect()
        ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['padrexxx']->id, $objetoxx->id])
        ->with('info', $dataxxxx['infoxxxx']);
    }
}
