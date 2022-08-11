<?php

namespace App\Traits\Fi\FiActividadestl;

use App\Models\fichaIngreso\FiAccione;
use App\Models\fichaIngreso\FiActividadestl;
use App\Models\fichaIngreso\FiActividadTiempoLibre;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSacramento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait FiActividadestlCrudTrait
{
    /**
     * Datos complementarios para cuando el nnaj es habitante de calle
     *
     * @param object $nnajxxxx
     * @param array $dataxxxx
     * @return array
     */
    public function getHabitanteCalle($nnajxxxx, $dataxxxx)
    {
        if ($nnajxxxx->prm_poblacion_id == 650) {
            $dataxxxx['i_horas_permanencia_calle'] = 0;
            $dataxxxx['i_dias_permanencia_calle'] = 0;
            $dataxxxx['i_prm_pertenece_parche_id'] = 1;
            $dataxxxx['s_nombre_parche'] = 'CHC';
            $dataxxxx['i_prm_acceso_recreacion_id'] = 1;
            $dataxxxx['i_prm_practica_religiosa_id'] = 1;
            $dataxxxx['i_prm_religion_practica_id'] = 1;
        }
        return $dataxxxx;
    }

    /**
     * Crear los tiempos libres de actividad
     *
     * @param object $objetoxx
     * @param array $dataxxxx
     * @return object
     */
    public function setFiActividadTiempoLibre($objetoxx, $dataxxxx)
    {
        if (isset($dataxxxx['i_prm_actividad_tl_id'])) {
            DB::transaction(function () use ($dataxxxx, $objetoxx) {
                $datosxxx = [
                    'fi_actividadestl_id' => $objetoxx->id,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1,
                ];
                FiActividadTiempoLibre::where('fi_actividadestl_id', $objetoxx->id)->delete();
                foreach ($dataxxxx['i_prm_actividad_tl_id'] as $diagener) {
                    $datosxxx['i_prm_actividad_tl_id'] = $diagener;;
                    $this->getLinaBaseNnaj([
                        'modeloxx' => FiActividadTiempoLibre::create($datosxxx),
                        'nnajidxx' => $dataxxxx['sis_nnaj_id']
                    ]);
                }
                return $objetoxx;
            }, 5);
        }
        return $objetoxx;
    }

    /**
     * Crar los sacramentos para actividades
     *
     * @param object $objetoxx
     * @param array $dataxxxx
     * @return object
     */
    public function setFiSacramento($objetoxx, $dataxxxx)
    {
        if (isset($dataxxxx['prm_sacrhec_id'])) {
            DB::transaction(function () use ($dataxxxx, $objetoxx) {
                $datosxxx = [
                    'fi_actividadestl_id' => $objetoxx->id,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1,
                ];
                FiSacramento::where('fi_actividadestl_id', $objetoxx->id)->delete();
                foreach ($dataxxxx['prm_sacrhec_id'] as $diagener) {
                    $datosxxx['prm_sacrhec_id'] = $diagener;
                    $this->getLinaBaseNnaj([
                        'modeloxx' =>  FiSacramento::create($datosxxx),
                        'nnajidxx' => $dataxxxx['sis_nnaj_id']
                    ]);
                }
                return $objetoxx;
            }, 5);
        }
        return $objetoxx;
    }

    /**
     * Crear las acciones de las actividades
     *
     * @param array $dataxxxx
     * @return object
     */
    public function getFiAccione($dataxxxx)
    {
        if (isset($dataxxxx['prm_accione_id'])) {
            DB::transaction(function () use ($dataxxxx) {
                $datosxxx = [
                    'fi_actividadestl_id' => $dataxxxx['modeloxx']->id,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id,
                    'sis_esta_id' => 1,
                ];
                FiAccione::where('fi_actividadestl_id', $dataxxxx['modeloxx']->id)->delete();
                foreach ($dataxxxx['dataxxxx']['prm_accione_id'] as $diagener) {
                    $datosxxx['prm_accione_id'] = $diagener;
                    $this->getLinaBaseNnaj([
                        'modeloxx' => FiAccione::create($datosxxx),
                        'nnajidxx' => $dataxxxx['dataxxxx']['sis_nnaj_id']
                    ]);
                }
                return $dataxxxx['modeloxx'];
            }, 5);
        }
        return $dataxxxx['modeloxx'];
    }
    /**
     * Crear o actualizar las actividades de timpo libre del nnaj en fi
     *
     * @param array $dataxxxx
     * @param object $objetoxx
     * @return object
     */
    public function setFiActividadestl($dataxxxx, $objetoxx, $infoxxxx, $padrexxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                if (isset($dataxxxx['i_prm_pertenece_parche_id']) && $dataxxxx['i_prm_pertenece_parche_id'] == 228) {
                    $dataxxxx['s_nombre_parche'] = '';
                }
                $objetoxx->update($dataxxxx);
            } else {
                $nnajxxxx = FiDatosBasico::where('sis_nnaj_id', $dataxxxx['sis_nnaj_id'])->first();
                /** EN CASO DE QUE SEA CIUDADANO HABITANTE DE CALLE */
                $dataxxxx = $this->getHabitanteCalle($nnajxxxx, $dataxxxx);
                if (isset($dataxxxx['i_prm_pertenece_parche_id']) && $dataxxxx['i_prm_pertenece_parche_id'] == 228) {
                    $dataxxxx['s_nombre_parche'] = ' ';
                }
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiActividadestl::create($dataxxxx);
            }
            $this->getLinaBaseNnaj(['modeloxx' => $objetoxx, 'nnajidxx' => $dataxxxx['sis_nnaj_id']]);
            $this->setFiActividadTiempoLibre($objetoxx, $dataxxxx);
            $this->setFiSacramento($objetoxx, $dataxxxx);
            $this->getFiAccione(['modeloxx' => $objetoxx, 'dataxxxx' => $dataxxxx]);
            return $objetoxx;
        }, 5);
        return redirect()
            ->route('fiactividades.editar', [$padrexxx->id, $usuariox->id])
            ->with('info', $infoxxxx);
    }
}
