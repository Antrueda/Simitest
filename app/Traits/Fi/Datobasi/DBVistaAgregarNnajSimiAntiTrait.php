<?php

namespace App\Traits\Fi\Datobasi;

use App\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\NnajDese;
use App\Models\Parametro;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DBVistaAgregarNnajSimiAntiTrait
{
  
    private function viewagregar($dataxxxx)
    {
        $fechaxxx = explode('-', date('Y-m-d'));
        if ($fechaxxx[1] < 12) {
            $fechaxxx[1] = (int) $fechaxxx[1] + 1;
        }
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
        $fechaxxx[2] = cal_days_in_month(CAL_GREGORIAN, $fechaxxx[1], $fechaxxx[0]) + $fechaxxx[2];
        $this->opciones['generoxx'] = Tema::combo(12, true, false);
        $this->opciones['orientac'] = Tema::combo(13, true, false);
        $this->opciones['estacivi'] = Tema::combo(19, true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->getFechaPuedeMTT(['estoyenx'=>1]);
        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['neciayud'] = ['' => 'Seleccione'];
        $this->opciones['readfisi'] = '';
        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        $this->opciones['pestpara'] = [];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['usuariox'] =  $dataxxxx['modeloxx'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas
        /** documento de identidad */
        $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
        if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                    'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        $this->opciones['poblindi'] = Tema::combo(61, true, false);
        switch ($dataxxxx['modeloxx']->prm_tipoblaci_id) {
            case 650:
                $this->opciones['estrateg'] =  Parametro::find(235)->Combo;
                break;
            case 651:
                $this->opciones['estrateg'] =  Parametro::find(651)->Combo;
                break;
            case 2503:
                $this->opciones['estrateg'] =  Parametro::find(2503)->Combo;
                break;
        }
        if ($dataxxxx['modeloxx']->prm_etnia_id == 164) {
            $this->opciones['poblindi'] =  Parametro::find(235)->Combo;
        }
        $this->opciones['neciayud'] = Parametro::find(235)->Combo;
        if ($dataxxxx['modeloxx']->prm_situacion_militar_id != 227) {
            $this->opciones['tiplibre'] = Parametro::find(235)->Combo;
            if ($dataxxxx['modeloxx']->prm_situacion_militar_id == 235) {
                $this->opciones['situmili'] = Parametro::find(235)->Combo;
            }
        }
        if ($this->opciones['modeloxx']->prm_etnia_id != 157) {
            $this->opciones['poblindi'] =  Parametro::find(235)->Combo;
        }
        $this->opciones['dependen'] = User::getUpiUsuario(true, false);
        $this->opciones['dependen'][$dataxxxx['modeloxx']->sis_depen_id] = SisDepen::find($dataxxxx['modeloxx']->sis_depen_id)->nombre;
        $this->opciones['servicio'] = NnajDese::getServiciosNnaj(['cabecera' => true, 'ajaxxxxx' => false, 'padrexxx' => $dataxxxx['modeloxx']->sis_depen_id]);
        $this->opciones['upzxxxxx'] = SisUpz::combo($dataxxxx['modeloxx']->sis_localidad_id, false);
        $this->opciones['barrioxx'] = SisBarrio::combo($dataxxxx['modeloxx']->sis_upz_id, false);
        $this->opciones['municipi'] = SisMunicipio::combo($dataxxxx['modeloxx']->sis_departam_id, false);
        $this->opciones['departam'] = SisDepartam::combo($dataxxxx['modeloxx']->sis_pai_id, false);
        $this->opciones['municexp'] = SisMunicipio::combo($dataxxxx['modeloxx']->sis_departamexp_id, false);
        $this->opciones['deparexp'] = SisDepartam::combo($dataxxxx['modeloxx']->sis_paiexp_id, false);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
