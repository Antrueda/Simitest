<?php

namespace App\Traits\Combos;

use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepen;
use App\Models\sistema\SisDepeUsua;
use App\Models\Sistema\SisEntidad;
use app\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisLocalupz;
use app\Models\Sistema\SisServicio;
use App\Models\Sistema\SisUpz;
use App\Models\Sistema\SisUpzbarri;
use App\Models\Temacombo;
use App\Models\User;

trait CombosTrait
{
    public function getCabecera($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        return $comboxxx;
    }
    public function getCuerpoCombo($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => strtoupper($registro->optionxx)];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }

    public function getCuerpoUsuarioCT($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->s_documento . ' - ' . strtoupper($registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->s_documento . ' - ' . strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }
    public function getInRespuestas($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        $padrexxx = $dataxxxx['padrexxx']->sis_tcampo->tema->temacombos[0]->parametros;
        foreach ($padrexxx as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }




    public function getDocBase($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        $linebase = InLineabaseNnaj::Where('id', $dataxxxx['padrexxx'])->first()->in_fuente->in_base_fuente;
        foreach ($linebase as $registro) {
            $document = $registro->sis_documento_fuente->nombre;
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $document];
            } else {
                $comboxxx[$registro->id] = $document;
            }
        }
        return $comboxxx;
    }

    public function getSoportes($dataxxxx)
    {
        $notinxxx = [];
        $comboxxx = $this->getCabecera($dataxxxx);
        $soportes = InActsoporte::where('in_accion_gestion_id', $dataxxxx['padrexxx'])->get();
        foreach ($soportes as $registro) {
            if (!in_array($registro->sis_fsoporte_id, $notinxxx)) {
                $notinxxx[] = $registro->sis_fsoporte_id;
            }
        }
        $soportes = InAccionGestion::find($dataxxxx['padrexxx'])->sis_actividad->sis_fsoportes;
        foreach ($soportes as $registro) {
            if (!in_array($registro->id, $notinxxx) || $registro->id == $dataxxxx['seleccio']) {
                if ($dataxxxx['ajaxxxxx']) {
                    $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
                } else {
                    $comboxxx[$registro->id] = $registro->nombre;
                }
            }
        }
        return $comboxxx;
    }

    /**
     * encontrar los parámetros del tema indicado
     * @param array $dataxxxx tema padre de los parámetros

     * @return $comboxxx
     */
    public function getTemacomboCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = Temacombo::where('id', $dataxxxx['temaxxxx'])
            ->with(['parametros' => function ($queryxxx) use ($dataxxxx) {
                $queryxxx->select(['id as valuexxx', 'nombre as optionxx']);
                $queryxxx->orderBy($dataxxxx['campoxxx'], $dataxxxx['orederby']);
            }])
            ->first()->parametros;
        return ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
    }

    public function getResponsablesActividad($dataxxxx)
    {
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajax']) {
            }
        }
    }

    public function getUpzsCT($dataxxxx)
    {
        $localida = SisLocalupz::select(['sis_upz_id'])
            ->where('sis_localidad_id', $dataxxxx['padrexxx'])
            ->whereNotIn('sis_upz_id', $dataxxxx['selected'])
            ->get();
        $dataxxxx['dataxxxx'] = SisUpz::select(['sis_upzs.id as valuexxx', 'sis_upzs.s_upz as optionxx'])
            ->whereNotIn('id', $localida)
            ->get();
        return ['comboxxx' => $this->getCuerpoComboCT($dataxxxx)];
    }

    public function getCuerpoComboCT($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->valuexxx . ' ' . strtoupper($registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }

    public function getCuerpoComboSinValueCT($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => strtoupper($registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }
    public function getBarriosCT($dataxxxx)
    {
        $localida = SisUpzbarri::select(['sis_barrio_id'])
            ->where('sis_localupz_id', $dataxxxx['padrexxx'])
            ->whereNotIn('sis_barrio_id', $dataxxxx['selected'])
            ->get();
        $dataxxxx['dataxxxx'] = SisBarrio::select(['sis_barrios.id as valuexxx', 'sis_barrios.s_barrio as optionxx'])
            ->whereNotIn('id', $localida)
            ->get();
        return ['comboxxx' => $this->getCuerpoComboCT($dataxxxx)];
    }
    /**
     * combo de los barrios para utilizarlos en el select
     */
    public function getBarriosComboCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisLocalupz::select(['sis_barrios.id as valuexxx', 'sis_barrios.s_barrio as optionxx'])
            ->join('sis_upzbarris', 'sis_localupzs.id', '=', 'sis_upzbarris.sis_localupz_id')
            ->join('sis_barrios', 'sis_upzbarris.sis_barrio_id', '=', 'sis_barrios.id')
            ->where('sis_localupzs.sis_localidad_id', $dataxxxx['localidx'])
            ->where('sis_localupzs.sis_upz_id', $dataxxxx['upzidxxx'])
            ->where('sis_upzbarris.sis_esta_id', 1)
            ->get();
        return    $this->getCuerpoComboSinValueCT($dataxxxx);
    }
    /**
     * encontrar las upzs de la localidad
     */
    public function getUpzsComboCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisLocalupz::select(['sis_upzs.id as valuexxx', 'sis_upzs.s_upz as optionxx'])
            ->join('sis_upzs', 'sis_localupzs.sis_upz_id', '=', 'sis_upzs.id')
            ->where('sis_localupzs.sis_localidad_id', $dataxxxx['localidx'])
            ->get();
        return    $this->getCuerpoComboCT($dataxxxx);
    }

    /**
     * encontrar los servicios de la upi
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getServiciosUpiComboCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisServicio::select(['sis_servicios.id as valuexxx', 'sis_servicios.s_servicio as optionxx'])
            ->join('sis_depeservs', 'sis_depeservs.sis_servicio_id', 'sis_servicios.id')
            ->where('sis_depeservs.sis_depen_id', $dataxxxx['dependen'])
            ->where('sis_servicios.sis_esta_id', 1)
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return    $respuest;
    }

    /**
     * encontrar el responsable de la upi
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getResponsableUpiCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = User::select('users.name as optionxx', 'users.id as valuexxx')
            ->join('sis_depen_user', 'sis_depen_user.user_id', 'users.id')
            ->where('sis_depen_user.sis_depen_id', $dataxxxx['dependen'])
            ->where('sis_depen_user.i_prm_responsable_id', 227)->get();
        $respuest = $this->getCuerpoComboCT($dataxxxx);
        return    $respuest;
    }
    /**
     * listado de localidades
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getLocalidadesCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisLocalidad::select('sis_localidads.s_localidad as optionxx', 'sis_localidads.id as valuexxx')
            ->get();
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }
    /**
     * listoado de recursos para combo
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getAgRecursosComboCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = AgRecurso::select('ag_recursos.s_recurso as optionxx', 'ag_recursos.id as valuexxx')
            ->get();
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }

    /**
     * listoado de entidades para combo
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getSisEntidadComboCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisEntidad::select('sis_entidads.nombre as optionxx', 'sis_entidads.id as valuexxx')
            ->get();
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }

    /**
     * listado de usuarios contratistas  para combo
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getFuncionarioContratistaComboCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = User::join('sis_depen_user', 'users.id', '=', 'sis_depen_user.user_id')
            ->join('sis_depens', 'sis_depen_user.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_depeservs', 'sis_depens.id', '=', 'sis_depeservs.sis_depen_id')
            ->whereIn('prm_tvinculacion_id', [1673, 1674])
            ->where('sis_depeservs.sis_servicio_id', 6)
            ->get(['users.name as optionxx', 'users.id as valuexxx', 's_documento']);
        $respuest = ['comboxxx' => $this->getCuerpoUsuarioCT($dataxxxx)];
        return $respuest;
    }

    /**
     * lista de usuarios por el numero de cédula
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getUsuarioCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = User::whereIn('s_documento', $dataxxxx['document'])
            ->orderBy($dataxxxx['campoxxx'], $dataxxxx['orderxxx'])
            ->get(['users.name as optionxx', 'users.id as valuexxx', 's_documento']);
        $respuest = ['comboxxx' => $this->getCuerpoUsuarioCT($dataxxxx)];
        return $respuest;
    }

    /**
     * Lista de usuarios que pertenezcan a upis con servicio territorio
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getUsuarioTerritorioCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = User::whereIn('s_documento', $dataxxxx['document'])
            ->orderBy($dataxxxx['campoxxx'], $dataxxxx['orderxxx'])
            ->get(['users.name as optionxx', 'users.id as valuexxx', 's_documento']);
        $respuest = ['comboxxx' => $this->getCuerpoUsuarioCT($dataxxxx)];
        return $respuest;
    }
    /**
     * listado de dependencias para acta de encuentro para combo
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getDepenTerritorioAECT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisDepen::join('sis_depeservs', 'sis_depens.id', '=', 'sis_depeservs.sis_depen_id')
            ->where('sis_depeservs.sis_servicio_id', 6)
            ->get(['sis_depens.nombre as optionxx', 'sis_depens.id as valuexxx']);
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }
}
