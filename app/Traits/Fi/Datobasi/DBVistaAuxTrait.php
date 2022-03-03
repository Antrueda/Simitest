<?php

namespace App\Traits\Fi\Datobasi;

use App\Models\fichaIngreso\NnajDese;
use App\Models\Parametro;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisUpz;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DBVistaAuxTrait
{
    use DBVistaAgregarNnajSimiAntiTrait;
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
    

    public function getNacimi($dataxxxx)
    {
        $dataxxxx['modeloxx']->d_nacimiento = explode(' ', $dataxxxx['modeloxx']->nnaj_nacimi->d_nacimiento)[0];
        $this->opciones['aniosxxx'] = $dataxxxx['modeloxx']->nnaj_nacimi->Edad;
        $paisxxxx = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departam->sis_pai_id;
        $departam = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departam_id;
        $document = $dataxxxx['modeloxx']->nnaj_nacimi;
        if (!is_null($document->sis_pai_id)) {
            $paisxxxx = $document->sis_pai_id;
            $departam = $document->sis_departam_id;
        }
        $dataxxxx['modeloxx']->sis_pai_id = $paisxxxx;
        $dataxxxx['modeloxx']->sis_departam_id = $departam;
        $dataxxxx['modeloxx']->sis_municipio_id = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio_id;
        return $dataxxxx;
    }

    public function getDocumen($dataxxxx)
    {
        $paisxxxx = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio->sis_departam->sis_pai_id;
        $departam = $dataxxxx['modeloxx']->nnaj_docu->sis_municipio->sis_departam_id;
        $document = $dataxxxx['modeloxx']->nnaj_docu;
        if (!is_null($document->sis_pai_id)) {
            $paisxxxx = $document->sis_pai_id;
            $departam = $document->sis_departam_id;
        }

        $paisnaci = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departam->sis_pai_id;
        $depanaci = $dataxxxx['modeloxx']->nnaj_nacimi->sis_municipio->sis_departam_id;
        $nacimien = $dataxxxx['modeloxx']->nnaj_nacimi;


        if (!is_null($nacimien->sis_pai_id)) {
            $paisnaci = $nacimien->sis_pai_id;
            $depanaci = $nacimien->sis_departam_id;
        }

        $dataxxxx['modeloxx']->s_documento = $dataxxxx['modeloxx']->nnaj_docu->s_documento;
        $dataxxxx['modeloxx']->prm_ayuda_id = $dataxxxx['modeloxx']->nnaj_docu->prm_ayuda_id;
        $dataxxxx['modeloxx']->prm_tipodocu_id = $dataxxxx['modeloxx']->nnaj_docu->prm_tipodocu_id;
        $dataxxxx['modeloxx']->prm_doc_fisico_id = $dataxxxx['modeloxx']->nnaj_docu->prm_doc_fisico_id;
        $dataxxxx['modeloxx']->sis_paiexp_id = $paisxxxx;
        $dataxxxx['modeloxx']->sis_departamexp_id = $departam;

        $dataxxxx['modeloxx']->sis_pai_id = $paisnaci;
        $dataxxxx['modeloxx']->sis_departam_id = $depanaci;

        $dataxxxx['modeloxx']->sis_municipio_id = $nacimien->sis_municipio_id;
        $dataxxxx['modeloxx']->sis_municipioexp_id = $document->sis_municipio_id;
        return $dataxxxx;
    }
    private function getArchivos($dataxxxx)
    {
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }




    private function getGenerales()
    {
        $this->getFechaPuedeMTT(['estoyenx'=>1]);
        $this->getEdadIdipron();
        $this->opciones['generoxx'] = Tema::combo(12, true, false);
        $this->opciones['orientac'] = Tema::combo(13, true, false);
        $this->opciones['estacivi'] = Tema::combo(19, true, false);
        $this->opciones['estadoxx'] = 'ACTIVO';

        $this->opciones['upzxxxxx'] = ['' => 'Seleccione'];
        $this->opciones['poblindi'] = ['' => 'Seleccione'];
        $this->opciones['neciayud'] = ['' => 'Seleccione'];
        $this->opciones['readfisi'] = '';
    }

    public function getNnajFiCsd($dataxxxx)
    {
        $dataxxxx['modeloxx']->prm_etnia_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_etnia_id;
        $dataxxxx['modeloxx']->prm_poblacion_etnia_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_poblacion_etnia_id;
        $dataxxxx['modeloxx']->prm_gsanguino_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_gsanguino_id;
        $dataxxxx['modeloxx']->prm_factor_rh_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_factor_rh_id;
        $dataxxxx['modeloxx']->prm_estado_civil_id = $dataxxxx['modeloxx']->nnaj_fi_csd->prm_estado_civil_id;
        return $dataxxxx;
    }
    public function getNnajFocali($dataxxxx)
    {
        $dataxxxx['modeloxx']->s_nombre_focalizacion = $dataxxxx['modeloxx']->nnaj_focali->s_nombre_focalizacion;
        $dataxxxx['modeloxx']->s_lugar_focalizacion = $dataxxxx['modeloxx']->nnaj_focali->s_lugar_focalizacion;
        $dataxxxx['modeloxx']->sis_upzbarri_id = $dataxxxx['modeloxx']->nnaj_focali->sis_upzbarri_id;
        return $dataxxxx;
    }
    public function getNnajSexo($dataxxxx)
    {
        $dataxxxx['modeloxx']->s_nombre_identitario = $dataxxxx['modeloxx']->nnaj_sexo->s_nombre_identitario;
        $dataxxxx['modeloxx']->prm_sexo_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_sexo_id;
        $dataxxxx['modeloxx']->prm_identidad_genero_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_identidad_genero_id;
        $dataxxxx['modeloxx']->prm_orientacion_sexual_id = $dataxxxx['modeloxx']->nnaj_sexo->prm_orientacion_sexual_id;
        return $dataxxxx;
    }


    private function view($dataxxxx)
    {
       
        $this->getArchivos($dataxxxx);
        $this->getGenerales();
       

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
                ->first();
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
                $dataxxxx = $this->getNnajFiCsd($dataxxxx);
                /**focalizacion */
                $dataxxxx = $this->getNnajFocali($dataxxxx);
                $localida =   $dataxxxx['modeloxx']->nnaj_focali->sis_upzbarri->sis_localupz;
                $upzxxxxx = $dataxxxx['modeloxx']->sis_upz_id = $localida->id;
                $localida = $dataxxxx['modeloxx']->sis_localidad_id = $localida->sis_localidad_id;
                $this->opciones['poblindi'] = Tema::combo(61, true, false);
                if ($this->opciones['modeloxx']->nnaj_fi_csd->prm_etnia_id != 157) {
                    $this->opciones['poblindi'] =  Parametro::find(235)->Combo;
                }
            }
            /** orientacion sexual */
            $dataxxxx = $this->getNnajSexo($dataxxxx);
            // /** Nacimiento */
            $dataxxxx = $this->getNacimi($dataxxxx);
            $paisxxxx = $dataxxxx['modeloxx']->sis_pai_id;
            $departam = $dataxxxx['modeloxx']->sis_departam_id;
            /** documento de identidad */
            $dataxxxx = $this->getDocumen($dataxxxx);
            $paisexpe = $dataxxxx['modeloxx']->sis_paiexp_id;
            $depaexpe = $dataxxxx['modeloxx']->sis_departamexp_id;

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
        }



       
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

   
}
