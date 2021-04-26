<?php

namespace App\Traits\Fi\Compfami;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\fichaIngreso\NnajFocali;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\fichaIngreso\NnajSitMil;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Sistema\SisNnaj;


/**
 * armar el crud principal para todo los datos basicos del nnaj
 */
trait CrudDatosBasicosNnajTrait
{
    private $dataxxxx,  $objetoxx;
    /**
     * editar o crear un nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setSisNnaj($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = SisNnaj::create([
                'sis_esta_id' => 1,
                'user_crea_id' =>  $dataxxxx['user_crea_id'],
                'user_edita_id' => $dataxxxx['user_edita_id'],
                'prm_escomfam_id' => $dataxxxx['escomfam']
            ]);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }

    /**
     * crear o editar datos basicos del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setFiDatosBasico($dataxxxx, $objetoxx)
    {
        if ($objetoxx != '') {
            /** Actualizar registro */
            $objetoxx->update($dataxxxx);
        } else {
            /** Es un registro nuevo */
            $dataxxxx['sis_nnaj_id'] = SisNnaj::create([
                'sis_esta_id' => 1,
                'user_crea_id' =>  $dataxxxx['user_crea_id'],
                'user_edita_id' => $dataxxxx['user_edita_id'],
                'prm_escomfam_id' => 228
            ])->id;
            $objetoxx = FiDatosBasico::create($dataxxxx);
        }
        return $objetoxx;
    }

    /**
     * crear o editar informacion de servicio asiganado al nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setNnajDese($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = NnajDese::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }

    /**
     * crear o editar informacion de fecha de diligenciamiento de la fi del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setFiDiligenc($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = FiDiligenc::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }

    /**
     * crear o editar informacion de identificación del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setNnajDocu($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = NnajDocu::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }


    /**
     * crear o editar informacion de datos basicos complementarios del nnaj desde la fi o csd
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setNnajFiCsd($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = NnajFiCsd::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }

    /**
     * crear o editar informacion de focalización del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setNnajFocali($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = NnajFocali::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }

    /**
     * crear o editar informacion de nacimiento del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setNnajNacimi($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = NnajNacimi::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }

    /**
     * crear o editar informacion de sexo del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setNnajSexo($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = NnajSexo::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }


    /**
     * crear o editar informacion de la situacion militar del nnaj del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setNnajSitMil($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = NnajSitMil::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }

    /**
     * crear o editar informacion de identificación del nnaj
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return $objetoxx
     */
    public function setNnajUpi($dataxxxx, $objetoxx)
    {
        if ($objetoxx == null) {
            $objetoxx = NnajUpi::create($dataxxxx);
        } else {
            $objetoxx->update($dataxxxx);
        }
        return $objetoxx;
    }
}
