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
trait DBVistaAuxTrait
{
    public function combos()
    {
        $this->opciones['tipodocu'] = Tema::combo(3, true, false);
        $this->opciones['grupsang'] = Tema::combo(17, true, false);
        $this->opciones['factorrh'] = Tema::combo(18, true, false);
        $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
        $this->opciones['tipoblac'] = Tema::combo(119, true, false);
        $this->opciones['condicio'] = Tema::combo(366, true, false); // antiguo 23
        $this->opciones['situmili'] = Tema::combo(367, true, false); // antiguo 23
        $this->opciones['tiplibre'] = Tema::combo(33, true, false);
        $this->opciones['estacivi'] = Tema::combo(19, true, false);
        $this->opciones['grupetni'] = Tema::combo(20, true, false);
        $this->opciones['vestimen'] = Tema::combo(290, true, false);
        $this->opciones['generoxx'] = Tema::combo(12, true, false);
        $this->opciones['orientac'] = Tema::combo(13, true, false);
        $this->opciones['pais_idx'] = SisPai::combo(true, false);
        $this->opciones['localida'] = SisLocalidad::combo();
        $this->opciones['estrateg'] = ['' => 'Seleccione'];
    }

    private function view($dataxxxx)
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


        $this->opciones['mindatex'] = "-29y +0m +1d";
        $this->opciones['maxdatex'] = "-0y +0m +0d";

        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['poblindi'] = ['' => 'Seleccione'];
        $this->opciones['neciayud'] = ['' => 'Seleccione'];
        $this->opciones['readfisi'] = '';

        $localida = 0;
        $upzxxxxx = $localida;
        $paisxxxx = $localida;
        $paisexpe = $localida;
        $departam = $localida;
        $depaexpe = $localida;
        $this->opciones['servicio'] = ['' => 'Seleccione'];
        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        if ($dataxxxx['modeloxx'] != '') {
            $upixxxxx = $dataxxxx['modeloxx']
                ->sis_nnaj
                ->nnaj_upis
                ->where('prm_principa_id', 227)
                ->first(); //ddd($upixxxxx);
            $dataxxxx['modeloxx']->sis_depen_id = 0;
            if ($upixxxxx != null) {
                $dataxxxx['modeloxx']->sis_depen_id = $upixxxxx->sis_depen_id;
                $servicio = $dataxxxx['modeloxx']
                    ->sis_nnaj
                    ->nnaj_upis->where('prm_principa_id', 227)
                    ->first()->nnaj_deses
                    ->where('prm_principa_id', 227)
                    ->first();
                if ($servicio != null) {
                    $dataxxxx['modeloxx']->sis_servicio_id = $servicio->sis_servicio_id;
                }
            }

            if ($dataxxxx['modeloxx']->sis_nnaj->prm_escomfam_id != 2686) {
                $dataxxxx['modeloxx']->diligenc = date('Y-m-d', $dataxxxx['modeloxx']->fi_diligenc->diligenc);
                $this->opciones['servicio'] = NnajDese::getServiciosNnaj(['cabecera' => true, 'ajaxxxxx' => false, 'padrexxx' =>  $dataxxxx['modeloxx']->sis_depen_id]);
            }



            switch ($dataxxxx['padrexxx']->prm_tipoblaci_id) {
                case 650:
                    $this->opciones['estrateg'] = Tema::combo(355, false, false);
                    break;
                case 651:
                    $this->opciones['estrateg'] = Tema::combo(354, true, false);
                    break;
            }
            $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
            $this->opciones['pestpara'] = [$dataxxxx['padrexxx']->id];
            $this->opciones['pestpara'] = [$dataxxxx['modeloxx']->id];

            $this->opciones['perfilxx'] = 'conperfi';
            $this->opciones['usuariox'] =  $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 2; // darle prioridad a las pestañas
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            if ($dataxxxx['modeloxx']->sis_nnaj->prm_escomfam_id != 2686) {
                $dataxxxx['modeloxx']->prm_etnia_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_etnia_id;
                $dataxxxx['modeloxx']->prm_poblacion_etnia_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_poblacion_etnia_id;
                $dataxxxx['modeloxx']->prm_gsanguino_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_gsanguino_id;
                $dataxxxx['modeloxx']->prm_factor_rh_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_factor_rh_id;
                $dataxxxx['modeloxx']->prm_estado_civil_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_estado_civil_id;
                /**focalizacion */
                $dataxxxx['modeloxx']->s_nombre_focalizacion = $dataxxxx['modeloxx']->nnaj_focali->s_nombre_focalizacion;
                $dataxxxx['modeloxx']->s_lugar_focalizacion = $dataxxxx['modeloxx']->nnaj_focali->s_lugar_focalizacion;
                $dataxxxx['modeloxx']->sis_upzbarri_id = $dataxxxx['modeloxx']->nnaj_focali->sis_upzbarri_id;
                $localida =   $dataxxxx['modeloxx']->nnaj_focali->sis_upzbarri->sis_localupz;

                $upzxxxxx = $dataxxxx['modeloxx']->sis_upz_id = $localida->id;

                $localida = $dataxxxx['modeloxx']->sis_localidad_id = $localida->sis_localidad_id;
                $this->opciones['poblindi'] = Tema::combo(61, true, false);
                if ($this->opciones['modeloxx']->nnaj_fi_csd->prm_etnia_id != 157) {
                    $this->opciones['poblindi'] =  Parametro::find(235)->Combo;
                }
            }




            /** orientacion sexual */
            $dataxxxx['modeloxx']->s_nombre_identitario = $dataxxxx['modeloxx']->nnaj_sexo->s_nombre_identitario;
            $dataxxxx['modeloxx']->prm_sexo_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_sexo_id;
            $dataxxxx['modeloxx']->prm_identidad_genero_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_identidad_genero_id;
            $dataxxxx['modeloxx']->prm_orientacion_sexual_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_orientacion_sexual_id;

            // /** Nacimiento */

            $dataxxxx['modeloxx']->d_nacimiento = explode(' ', $dataxxxx['modeloxx']->nnaj_nacimi->d_nacimiento)[0];
            $this->opciones['aniosxxx'] = $dataxxxx['modeloxx']->nnaj_nacimi->Edad;
            $dataxxxx['modeloxx']->sis_pai_id = $paisxxxx = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departam->sis_pai_id;
            $dataxxxx['modeloxx']->sis_departam_id = $departam = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departam_id;
            $dataxxxx['modeloxx']->sis_municipio_id = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio_id;

            /** documento de identidad */
            $dataxxxx['modeloxx']->s_documento = $dataxxxx['modeloxx']->nnaj_docu->s_documento;
            $dataxxxx['modeloxx']->prm_ayuda_id = $dataxxxx['modeloxx']->nnaj_docu->prm_ayuda_id;

            $dataxxxx['modeloxx']->prm_tipodocu_id = $dataxxxx['modeloxx']->nnaj_docu->prm_tipodocu_id;
            $dataxxxx['modeloxx']->prm_doc_fisico_id = $dataxxxx['modeloxx']->nnaj_docu->prm_doc_fisico_id;

            $dataxxxx['modeloxx']->sis_paiexp_id = $paisexpe = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio->sis_departam->sis_pai_id;
            $dataxxxx['modeloxx']->sis_departamexp_id = $depaexpe = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio->sis_departam_id;
            $dataxxxx['modeloxx']->sis_municipioexp_id = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio_id;

            /** situacion militar */
            if ($dataxxxx['modeloxx']->nnaj_sit_mil != null) {
                $dataxxxx['modeloxx']->prm_situacion_militar_id = $dataxxxx['modeloxx']->nnaj_sit_mil->prm_situacion_militar_id;
                $dataxxxx['modeloxx']->prm_clase_libreta_id = $dataxxxx['modeloxx']->nnaj_sit_mil->prm_clase_libreta_id;
            }




            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', $this->opciones['parametr']],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }



            if ($this->opciones['aniosxxx'] < 15) {
                $this->opciones['generoxx'] =  Parametro::find(235)->Combo;
                $this->opciones['orientac'] =  Parametro::find(235)->Combo;
            }

            if ($this->opciones['aniosxxx'] < 18 || $dataxxxx['modeloxx']->prm_sexo_id == 21) {
                $this->opciones['tiplibre'] = Parametro::find(235)->Combo;
                $this->opciones['situmili'] = Parametro::find(235)->Combo;
            }
            if ($dataxxxx['modeloxx']->prm_tipodocu_id == 145) {
                $this->opciones['readfisi'] = 'readonly';
            }
            if ($dataxxxx['modeloxx']->prm_doc_fisico_id == 228) {

                $this->opciones['neciayud'] = Tema::combo(286, true, false);
            } else {

                $this->opciones['neciayud'] = Parametro::find(235)->Combo;
            }

            if ($dataxxxx['modeloxx']->prm_situacion_militar_id != 227) {
                $this->opciones['tiplibre'] = Parametro::find(235)->Combo;
            }
            // $this->opciones['poblindi'] = Tema::combo(61, true, false);
        }
        // ddd( $this->opciones['neciayud']);
        $this->opciones['dependen'] = User::getUpiUsuario(true, false);
        $this->opciones['upzxxxxx'] = SisUpz::combo($localida, false);
        $this->opciones['barrioxx'] = SisBarrio::combo($upzxxxxx, false);
        $this->opciones['municipi'] = SisMunicipio::combo($departam, false);
        $this->opciones['departam'] = SisDepartam::combo($paisxxxx, false);


        $this->opciones['municexp'] = SisMunicipio::combo($depaexpe, false);
        $this->opciones['deparexp'] = SisDepartam::combo($paisexpe, false);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

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
        //


        // $this->opciones['tiplibre'] = Parametro::find(235)->Combo;
        $this->opciones['estadoxx'] = 'ACTIVO';


        $this->opciones['mindatex'] = "-29y +0m +1d";
        $this->opciones['maxdatex'] = "-0y +0m +0d";

        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];

        $this->opciones['neciayud'] = ['' => 'Seleccione'];
        $this->opciones['readfisi'] = '';

        $localida = 0;




        // indica si se esta actualizando o viendo
        $this->opciones['aniosxxx'] = '';
        $this->opciones['pestpara'] = [];
        $this->opciones['perfilxx'] = 'sinperfi';
        $this->opciones['usuariox'] =  $dataxxxx['modeloxx'];
        $this->opciones['pestpadr'] = 1; // darle prioridad a las pestañas


        /** documento de identidad */
        // ddd($dataxxxx['modeloxx']->nnaj_nacimi);
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

        // $this->opciones['poblindi'] = Tema::combo(61, true, false);
        if ($dataxxxx['modeloxx']->prm_etnia_id == 164) {
            $this->opciones['poblindi'] =  Parametro::find(235)->Combo;
        }

        // if ($dataxxxx['modeloxx']->prm_doc_fisico_id == 228) {

        //     $this->opciones['neciayud'] = Tema::combo(286, true, false);
        // } else {

        $this->opciones['neciayud'] = Parametro::find(235)->Combo;
        // }


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
