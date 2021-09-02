<?php

namespace App\Traits\Combos;

use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Direccionamiento\EntidadServicio;
use App\Models\Actaencu\AeRecuadmi;
use App\Models\Actaencu\AeRecurso;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Parametro;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEntidad;
use App\Models\sistema\SisEsta;
use app\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisLocalupz;
use app\Models\Sistema\SisServicio;
use App\Models\Sistema\SisUpz;
use App\Models\Sistema\SisUpzbarri;
use App\Models\Temacombo;
use App\Models\User;
use App\Models\Usuario\Estusuario;

trait CombosTrait
{
    public function getCampoCT($dataxxxx, $campoxxx)
    {
        if (!isset($dataxxxx['campoxxx'])) {
            $dataxxxx['campoxxx'] = $campoxxx;
        }
        return $dataxxxx;
    }
    public function getDefaultCT($dataxxxx)
    {
        if (!isset($dataxxxx['orderxxx'])) {
            $dataxxxx['orderxxx'] = 'ASC';
        }
        if (!isset($dataxxxx['cabecera'])) {
            $dataxxxx['cabecera'] = true;
        }
        if (!isset($dataxxxx['ajaxxxxx'])) {
            $dataxxxx['ajaxxxxx'] = false;
        }
        return $dataxxxx;
    }
    public function getCabecera($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => ''];
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
        // * Campo en que se ordena el combo
        if (!isset($dataxxxx['campoxxx'])) {
            $dataxxxx['campoxxx'] = 'nombre';
        }

        // * Ordenación por defecto
        if (!isset($dataxxxx['orederby'])) {
            $dataxxxx['orederby'] = 'ASC';
        }

        // * Mostrar la opción: SELECCIONE
        if (!isset($dataxxxx['cabecera'])) {
            $dataxxxx['cabecera'] = true;
        }
        // * Se arma el combo en array
        if (!isset($dataxxxx['ajaxxxxx'])) {
            $dataxxxx['ajaxxxxx'] = false;
        }

        $dataxxxx['dataxxxx'] = Temacombo::where('id', $dataxxxx['temaxxxx'])
            ->with(['parametros' => function ($queryxxx) use ($dataxxxx) {
                $queryxxx->select(['id as valuexxx', 'nombre as optionxx']);
                if (isset($dataxxxx['notinxxx']) && count($dataxxxx['notinxxx'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['notinxxx']);
                }
                if (isset($dataxxxx['inxxxxxx']) && count($dataxxxx['inxxxxxx'])) {
                    $queryxxx->whereIn('id', $dataxxxx['inxxxxxx']);
                }
                $queryxxx->where('parametro_temacombo.sis_esta_id', 1);
                if (isset($dataxxxx['selected'])) {
                    $queryxxx->orWhere('id', $dataxxxx['selected']);
                }
                $queryxxx->orderBy($dataxxxx['campoxxx'], $dataxxxx['orederby']);
            }])
            ->first()->parametros;
        return ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
    }

    /**
     * encontrar los parámetros del tema indicado
     * @param array $dataxxxx tema padre de los parámetros

     * @return $comboxxx
     */
    public function getTemacomboCTNotIn($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = Temacombo::where('id', $dataxxxx['temaxxxx'])
            ->with(['parametros' => function ($queryxxx) use ($dataxxxx) {
                $queryxxx->select(['id as valuexxx', 'nombre as optionxx']);
                $queryxxx->orderBy($dataxxxx['campoxxx'], $dataxxxx['orederby']);
                $queryxxx->whereNotIn('id', $dataxxxx['notinxxx']);
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
            ->orderBy('sis_barrios.s_barrio', $dataxxxx['ordenxxx'])
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

    public function getServiciosEntidadComboCT($dataxxxx)
    {
        // $dataxxxx['dataxxxx'] = EntidadServicio::select(['sis_servicios.id as valuexxx', 'sis_servicios.s_servicio as optionxx'])
        //     ->join('sis_entidads', 'sis_entidad_sis_servicio.fos_tse_id', '=', 'sis_entidads.id')
        //     ->join('sis_servicios', 'sis_entidad_sis_servicio.fos_stses_id', '=', 'sis_servicios.id')
        //     ->where('sis_entidad_sis_servicio.sis_servicio_id', $dataxxxx['entidadx'])
        //     ->where('sis_entidad_sis_servicio.sis_esta_id', 1)
        //     ->orderBy('sis_entidad_sis_servicio.id', 'asc')
        //     ->get();
        // $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        // return    $respuest;
    }

    /**
     * encontrar el responsable de la upi
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getResponsableUpiCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $selected = ['users.name as optionxx', 'users.id as valuexxx', 'users.s_documento'];
        if ($dataxxxx['usersele'] == 0) {
            $dataxxxx['dataxxxx'] = User::join('sis_depen_user', 'sis_depen_user.user_id', 'users.id')
            ->where('sis_depen_user.sis_depen_id', $dataxxxx['dependen'])
            ->orWhere('sis_depen_user.i_prm_responsable_id', 227)
            ->whereIn('users.sis_cargo_id', $dataxxxx['cargosxx'])
            ->get($selected);
        }else{
            $dataxxxx['dataxxxx'] = User::where('id',$dataxxxx['usersele'])->get($selected);
        }
        $respuest = $this->getCuerpoUsuarioCT($dataxxxx);
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
            ->where(function ($queryxxx) use ($dataxxxx) {
                if (isset($dataxxxx['whereinx']) && count($dataxxxx['whereinx'])) {
                    $queryxxx->whereIN('id', $dataxxxx['whereinx']);
                }
                if (isset($dataxxxx['wherenot']) && count($dataxxxx['wherenot'])) {
                    $queryxxx->whereNotIn('id', $dataxxxx['wherenot']);
                }
            })
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
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        if (!isset($dataxxxx['campoxxx'])) {
            $dataxxxx['campoxxx'] = 'name';
        }
        $dataxxxx['dataxxxx'] = User::join('sis_depen_user', 'users.id', '=', 'sis_depen_user.user_id')
            ->join('sis_depens', 'sis_depen_user.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_depeservs', 'sis_depens.id', '=', 'sis_depeservs.sis_depen_id')
            ->orderBy($dataxxxx['campoxxx'], $dataxxxx['orderxxx'])
            ->whereIn('users.sis_cargo_id', [5, 25, 35])
            ->where('sis_depeservs.sis_servicio_id', 6)
            ->where('sis_depen_user.sis_esta_id', 1)
            ->where('sis_depen_user.sis_depen_id', $dataxxxx['dependid'])
            ->orderBy('s_primer_nombre', 'ASC')
            ->get(['users.name as optionxx', 'users.id as valuexxx', 's_documento']);
        $respuest = ['comboxxx' => $this->getCuerpoUsuarioCT($dataxxxx)];
        return $respuest;
    }


    public function getFuncionarioComboCT($dataxxxx)
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
    public function getUsuarioCargosCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        if (!isset($dataxxxx['campoxxx'])) {
            $dataxxxx['campoxxx'] = 'name';
        }
        $dataxxxx['dataxxxx'] = User::whereIn('sis_cargo_id', $dataxxxx['cargosxx'])
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
            ->where('sis_depeservs.sis_esta_id', 1)
            ->get(['sis_depens.nombre as optionxx', 'sis_depens.id as valuexxx']);
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }

    /**
     * listado de justificaciones
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getEstusuariosAECT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = Estusuario::where('sis_esta_id', $dataxxxx['estadoid'])
            ->where('prm_formular_id', $dataxxxx['formular'])
            ->orderBy('estusuarios.estado', 'asc')
            ->get(['estusuarios.estado as optionxx', 'estusuarios.id as valuexxx']);
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }

    /**
     * listado de justificaciones
     *
     * @param array $dataxxxx
     * @return array $respuest
     */
    public function getEstadosAECT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $dataxxxx['dataxxxx'] =  SisEsta::where(function ($queryxxx) use ($dataxxxx) {
            if (isset($dataxxxx['notinxxx'])) {
                $queryxxx->whereNotIn('id', $dataxxxx['notinxxx']);
            }
            if (isset($dataxxxx['inxxxxxx'])) {
                $queryxxx->whereIn('id', $dataxxxx['inxxxxxx']);
            }
        })
            ->orderBy($dataxxxx['campoxxx'], $dataxxxx['orderxxx'])
            ->get(['sis_estas.s_estado as optionxx', 'sis_estas.id as valuexxx']);
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }


    public function getSisEntidadCT($dataxxxx)
    {
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        if (!isset($dataxxxx['campoxxx'])) {
            $dataxxxx['campoxxx'] = 'nombre';
        }
        $dataxxxx['dataxxxx'] = SisEntidad::orderby($dataxxxx['campoxxx'], $dataxxxx['orderxxx'])
            ->get(['sis_entidads.nombre as optionxx', 'sis_entidads.id as valuexxx']);
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }

    public function getSisDepenCT($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = SisDepen::orderby($dataxxxx['campoxxx'], $dataxxxx['orderxxx'])
            ->get(['sis_depens.nombre as optionxx', 'sis_depens.id as valuexxx']);
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }

    public function getAeRecursosAECT($dataxxxx)
    {
        $dataxxxx = $this->getCampoCT($dataxxxx, 's_recurso');
        $dataxxxx = $this->getDefaultCT($dataxxxx);
        $notinxxx = [];
        if (isset($dataxxxx['notinxxx'])) {
            $notinxxx = $dataxxxx['notinxxx'];
        }
        $notinxxx = AeRecurso::whereNotIn('ae_recuadmi_id', $notinxxx)
            ->where('ae_encuentro_id', $dataxxxx['actaencu'])
            ->get(['ae_recuadmi_id']);

        $dataxxxx['dataxxxx'] = AeRecuadmi::whereNotIn('id', $notinxxx)
            ->where('prm_trecurso_id', $dataxxxx['padrexxx'])
            ->orderby($dataxxxx['campoxxx'], $dataxxxx['orderxxx'])
            ->get(['ae_recuadmis.s_recurso as optionxx', 'ae_recuadmis.id as valuexxx']);
        $respuest = ['comboxxx' => $this->getCuerpoComboSinValueCT($dataxxxx)];
        return $respuest;
    }
}
//
