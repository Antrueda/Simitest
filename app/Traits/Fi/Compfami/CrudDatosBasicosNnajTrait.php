<?php

namespace App\Traits\Fi\Compfami;

use App\Models\fichaIngreso\FiCompfami;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * armar el crud principal para todo los datos basicos del nnaj
 */
trait CrudDatosBasicosNnajTrait
{
    /**
     * editar o crear un nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setSisNnajCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            if ($dataxxxx['modeloxx'] == null) {
                $dataxxxx['modeloxx'] = SisNnaj::create([
                    'sis_esta_id' => 1,
                    'user_crea_id' =>  Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'prm_escomfam_id' => $dataxxxx['escomfam']
                ]);
            } else {
                $dataxxxx['modeloxx']->update($dataxxxx);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar datos basicos del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setFiDatosBasicojCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            if ($dataxxxx['modeloxx'] == null) {
                /** Es un registro nuevo */
                $dataxxxx['dataxxxx']['sis_nnaj_id'] = $this->setSisNnajCDBNT(['modeloxx'=>null,'escomfam'=>228])->id;
                $dataxxxx['modeloxx'] = FiDatosBasico::create($dataxxxx['dataxxxx']);
            } else {
                /** Actualizar registro */
                $dataxxxx['modeloxx']->update($dataxxxx);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar informacion de servicio asiganado al nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setNnajDesejCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob']) {
                $registro = $dataxxxx['registro'];
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajDese::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar informacion de fecha de diligenciamiento de la fi del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setFiDiligencjCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            // cuando la informacion se llena por composicion familiar
            if ($dataxxxx['sinconob']) {
                if ($dataxxxx['modeloxx'] == null) {
                    $registro = $dataxxxx['registro'];
                } else {
                    $registro = $dataxxxx['modeloxx']->toArray();
                }
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = FiDiligenc::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar informacion de identificación del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setNnajDocujCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob'] && $dataxxxx['modeloxx'] == null) { // indica si crea el objeto o no
                $registro = $dataxxxx['registro'];
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajDocu::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }


    /**
     * crear o editar informacion de datos basicos complementarios del nnaj desde la fi o csd
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setNnajFiCsdjCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob']) {
                if ($dataxxxx['modeloxx'] == null) {
                    $registro = $dataxxxx['registro'];
                } else {
                    $registro = $dataxxxx['modeloxx']->toArray();
                }
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajFiCsd::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar informacion de focalización del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setNnajFocalijCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob']) {
                if ($dataxxxx['modeloxx'] == null) {
                    $registro = $dataxxxx['registro'];
                } else {
                    $registro = $dataxxxx['modeloxx']->toArray();
                }
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajFocali::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar informacion de nacimiento del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setNnajNacimijCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob'] && $dataxxxx['modeloxx'] == null) {
                $registro = $dataxxxx['registro'];
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajNacimi::create($registro);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar informacion de sexo del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setNnajSexojCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob'] && $dataxxxx['modeloxx'] == null) {
                $registro = $dataxxxx['registro'];
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajSexo::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }


    /**
     * crear o editar informacion de la situacion militar del nnaj del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setNnajSitMiljCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob']) {
                if ($dataxxxx['modeloxx'] == null) {
                    $registro = $dataxxxx['registro'];
                } else {
                    $registro = $dataxxxx['modeloxx']->toArray();
                }
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajSitMil::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar informacion de identificación del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setNnajUpijCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob']) {
                if ($dataxxxx['modeloxx'] == null) {
                    $registro = $dataxxxx['registro'];
                } else {
                    $registro = $dataxxxx['modeloxx']->toArray();
                }
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajUpi::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    /**
     * crear o editar informacion de identificación del nnaj
     *
     * @param array $dataxxxx
     * @param object $dataxxxx['modeloxx']
     * @return $dataxxxx['modeloxx']
     */
    public function setFiCompfamiCDBNT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $registro = [];
            if ($dataxxxx['sinconob']) {  // para cuando el nnaj no se ha crado como componente familiar
                if ($dataxxxx['modeloxx'] == null) {
                    $registro = $dataxxxx['registro'];
                } else {
                    $registro = $dataxxxx['modeloxx']->toArray();
                }
            } else {
                $registro = $dataxxxx['dataxxxx'];
                $registro['user_edita_id'] = Auth::user()->id;
            }
            if ($dataxxxx['modeloxx'] == null) {
                if (!$dataxxxx['sinconob']) {
                    $registro['sis_nnaj_id']=$dataxxxx['registro']['sis_nnaj_id'];
                    $registro['sis_nnajnnaj_id']=$dataxxxx['registro']['sis_nnajnnaj_id'];
                 }
                $registro['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = FiCompfami::create($registro);
            } else {
                $dataxxxx['modeloxx']->update($registro);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
