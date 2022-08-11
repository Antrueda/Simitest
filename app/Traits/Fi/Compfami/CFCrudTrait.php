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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CFCrudTrait
{
    use CrudDatosBasicosNnajTrait;
    public function getNnajDesejCDBNT($dataxxxx)
    {
        $registro = new NnajDese();
        $registro->sis_servicio_id = 1;
        $registro->nnaj_upi_id = $dataxxxx['padrexxx']->id;
        $registro->prm_principa_id = 1269;
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro->sis_esta_id = 1;
        $registro = $registro->toArray();
        return $registro;
    }

    public function getFiDiligencjCDBNT($dataxxxx)
    {
        // cuando la informacion se llena por composicion familiar
        $registro = new FiDiligenc();
        $registro->diligenc = $dataxxxx['padrexxx']->fi_diligenc->diligenc;
        $registro->fi_datos_basico_id = $dataxxxx['padrexxx']->id;
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro->sis_esta_id = 1;
        $registro = $registro->toArray();
        return $registro;
    }

    public function getNnajDocujCDBNT($dataxxxx)
    {
        $registro = new NnajDocu();
        $registro->s_documento = $dataxxxx['dataxxxx']['s_documento'];
        $registro->fi_datos_basico_id = $dataxxxx['padrexxx']->id;
        $registro->prm_ayuda_id = 1269;
        $registro->prm_tipodocu_id = $dataxxxx['dataxxxx']['prm_tipodocu_id'];
        $registro->sis_docfuen_id = 2;
        $registro->prm_doc_fisico_id = 1269;
        $registro->sis_municipio_id = $dataxxxx['dataxxxx']['sis_municipio_id'];
        $registro = $registro->toArray();
        return $registro;
    }

    public function getNnajFiCsdjCDBNT($dataxxxx)
    {
        $registro = new NnajFiCsd();
        $registro->fi_datos_basico_id = $dataxxxx['padrexxx']->id;
        $registro->prm_etnia_id = 1269;
        $registro->prm_poblacion_etnia_id = 235;
        $registro->prm_gsanguino_id = 1269;
        $registro->prm_factor_rh_id = 1269;
        $registro->prm_estado_civil_id = 1269;
        $registro->sis_docfuen_id = 2;
        $registro->sis_esta_id = 1;
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro = $registro->toArray();
        return $registro;
    }

    public function getNnajFocalijCDBNT($dataxxxx)
    {
        $registro = new NnajFocali();
        $registro->fi_datos_basico_id = $dataxxxx['padrexxx']->id;
        $registro->s_nombre_focalizacion = 'INFORMACION CREADA POR COMPOSOCION FAMILIAR';
        $registro->s_lugar_focalizacion = 'INFORMACION CREADA POR COMPOSOCION FAMILIAR';
        $registro->sis_upzbarri_id = $dataxxxx['padrexxx']->nnaj_focali->sis_upzbarri_id;
        $registro->sis_esta_id = 1;
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro = $registro->toArray();
        return $registro;
    }

    public function getNnajNacimijCDBNT($dataxxxx)
    {

        $registro = new NnajNacimi();
        $registro->fi_datos_basico_id = $dataxxxx['padrexxx']->id;
        $registro->d_nacimiento = $dataxxxx['dataxxxx']['d_nacimiento'];
        $registro->sis_municipio_id = $dataxxxx['dataxxxx']['sis_municipio_id'];
        $registro->sis_esta_id = 1;
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro = $registro->toArray();
        return $registro;
    }


    public function getNnajSexojCDBNT($dataxxxx)
    {

        $registro = new NnajSexo();
        $registro->fi_datos_basico_id = $dataxxxx['padrexxx']->id;
        $registro->s_nombre_identitario = $dataxxxx['dataxxxx']['s_nombre_identitario'];
        $registro->prm_sexo_id = 1269;
        $registro->prm_identidad_genero_id = 1269;
        $registro->prm_orientacion_sexual_id = 1269;
        $registro->sis_docfuen_id = 2;
        $registro->sis_esta_id = 1;
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro = $registro->toArray();
        return $registro;
    }

    public function getNnajSitMiljCDBNT($dataxxxx)
    {
        $registro = new NnajSitMil();
        $registro->fi_datos_basico_id = $dataxxxx['padrexxx']->id;
        $registro->prm_situacion_militar_id = 1269;
        $registro->prm_clase_libreta_id = 1269;
        $registro->sis_esta_id = 1;
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro = $registro->toArray();
        return $registro;
    }

    public function getNnajUpijCDBNT($dataxxxx)
    {
        $upixxxxx = $dataxxxx['padrexxx']->sis_nnaj->nnaj_upis->where('prm_principa_id', 227)->first();
        $registro = new NnajUpi();
        $registro->sis_nnaj_id = $upixxxxx->id;
        $registro->sis_depen_id = $upixxxxx->sis_depen_id;
        $registro->prm_principa_id = $upixxxxx->prm_principa_id;
        $registro->sis_esta_id = 1;
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro = $registro->toArray();
        return $registro;
    }

    public function getFiCompfamiCDBNT($dataxxxx)
    {
        $padrexxx = $dataxxxx['padrexxx'];
        $registro = new FiCompfami();
        $registro->s_nombre_identitario = $padrexxx->nnaj_sexo->s_nombre_identitario;
        $registro->s_telefono = null;
        $registro->d_nacimiento = $padrexxx->nnaj_nacimi->d_nacimiento;
        $registro->i_prm_parentesco_id = 803;
        $registro->prm_reprlega_id = $padrexxx->Edad > 17 ? 227 : 228;
        $registro->i_prm_ocupacion_id = 235;
        $registro->i_prm_vinculado_idipron_id = 227;
        $registro->i_prm_convive_nnaj_id = 227;
        $registro->sis_nnajnnaj_id = $padrexxx->sis_nnaj_id;
        $registro->sis_nnaj_id = $dataxxxx['nnajidxx'];
        $registro->user_crea_id = Auth::user()->id;
        $registro->user_edita_id = Auth::user()->id;
        $registro->sis_esta_id = 1;
        $registro = $registro->toArray();
        return $registro;
    }


    public function getFiDatosBasicojCDBNT($dataxxxx)
    {
        $registro = new FiDatosBasico();
        $registro->s_primer_nombre = $dataxxxx['dataxxxx']['s_primer_nombre'];
        $registro->s_segundo_nombre = $dataxxxx['dataxxxx']['s_segundo_nombre'];
        $registro->s_primer_apellido = $dataxxxx['dataxxxx']['s_primer_apellido'];
        $registro->s_segundo_apellido = $dataxxxx['dataxxxx']['s_segundo_apellido'];
        $registro->s_apodo = 'DESDE COMPOSICION FAMILIAR';
        $registro->prm_tipoblaci_id = 1269;
        $registro->prm_estrateg_id = 235;
        $registro->prm_vestimenta_id = 235;
        $registro->sis_docfuen_id = 2;
        $registro->user_edita_id = Auth::user()->id;
        $registro->user_crea_id = Auth::user()->id;
        $registro->sis_esta_id = 1;
        $registro = $registro->toArray();
        return $registro;
    }

    public function setFiCompfami($dataxxxx)
    {

        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $padrexxx = $dataxxxx['padrexxx'];
            // primero se verifica que el nnaj esté creado como componente familiar
            $compexis = $padrexxx
                ->sis_nnaj
                ->fi_compfamis->where('sis_nnaj_id', $dataxxxx['padrexxx']->sis_nnaj_id)->first();
            // el nnaj no está creado como componente familiar
            if ($compexis == null) {
                $compexis = $this->setFiCompfamiCDBNT(
                    [
                        'modeloxx' => '',
                        'sinconob' => true,
                        'padrexxx' => $padrexxx,
                        'dataxxxx' => '',
                    ]
                );
            }
            $objetoxx = '';
            $padrexxx = '';
            if ($dataxxxx['modeloxx'] == null) {
                $padrexxx = $this->setFiDatosBasicojCDBNT(
                    [
                        'modeloxx' => null,
                        'dataxxxx' => $this->getFiDatosBasicojCDBNT(['dataxxxx' => $dataxxxx['requestx']]),
                    ]
                );

                $padrexxx->fi_diligenc=   $this->setFiDiligencjCDBNT(
                    [
                        'modeloxx' => null,
                        'sinconob' => false,
                        'dataxxxx' => $this->getFiDiligencjCDBNT(['padrexxx' => $dataxxxx['padrexxx']]),
                        'registro' => $this->getFiDiligencjCDBNT(['padrexxx' => $dataxxxx['padrexxx']])
                    ]
                );

            } else {
                $objetoxx = $dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico->nnaj_docu;
                $padrexxx = $this->setFiDatosBasicojCDBNT(
                    [
                        'modeloxx' => $dataxxxx['modeloxx']->sis_nnaj->fi_datos_basico,
                        'dataxxxx' => $this->getFiDatosBasicojCDBNT(['dataxxxx' => $dataxxxx['requestx']]),
                    ]
                );
            }
            // la cedula no existe
            // primero crea el complemento de los datos basicos y luego si la composicion familiar
            // $padrexxx = $objetoxx->fi_datos_basico;
            // modificar infomracion de documento
            $objetoxx = $this->setNnajDocujCDBNT(
                [
                    'modeloxx' => $objetoxx,
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getNnajDocujCDBNT(
                        [
                            'padrexxx' => $padrexxx,
                            'dataxxxx' => $dataxxxx['requestx'],
                        ]
                    )
                ]
            );
            // modificar informacion del
            $this->setNnajSexojCDBNT(
                [
                    'modeloxx' => $padrexxx->nnaj_sexo,
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getNnajSexojCDBNT(
                        [
                            'padrexxx' => $padrexxx,
                            'dataxxxx' => $dataxxxx['requestx'],
                        ]
                    )
                ]
            );

            $this->setFiDiligencjCDBNT(
                [
                    'modeloxx' => $padrexxx->fi_diligenc,
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getFiDiligencjCDBNT(['padrexxx' => $padrexxx,])
                ]
            );

            $this->setNnajFiCsdjCDBNT(
                [
                    'modeloxx' => $padrexxx->nnaj_fi_csd,
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getNnajFiCsdjCDBNT(['padrexxx' => $padrexxx,])
                ]
            );
            $this->setNnajFocalijCDBNT(
                [
                    'modeloxx' => $padrexxx->nnaj_focali,
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getNnajFocalijCDBNT(['padrexxx' => $padrexxx,])
                ]
            );

            $this->setNnajNacimijCDBNT(
                [
                    'modeloxx' => $padrexxx->nnaj_nacimi,
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getNnajNacimijCDBNT(['padrexxx' => $padrexxx, 'dataxxxx' => $dataxxxx['requestx'],])
                ]
            );

            $this->setNnajSitMiljCDBNT(
                [
                    'modeloxx' => $padrexxx->nnaj_sit_mil,
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getNnajSitMiljCDBNT(['padrexxx' => $padrexxx,])
                ]
            );

            $upixxxxx = $this->setNnajUpijCDBNT(
                [
                    'modeloxx' => $padrexxx->sis_nnaj->nnaj_upis->first(),
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getNnajUpijCDBNT(['padrexxx' => $padrexxx,])
                ]
            );
            $this->setNnajDesejCDBNT(
                [
                    'modeloxx' => $padrexxx->sis_nnaj->nnaj_upis->first()->nnaj_deses->first(),
                    'sinconob' => true,
                    'dataxxxx' => $dataxxxx['requestx'],
                    'registro' => $this->getNnajDesejCDBNT(['padrexxx' => $upixxxxx,])
                ]
            );
            // se crea la composicion familiar
            return $this->setFiCompfamiCDBNT(
                [
                    'modeloxx' => $dataxxxx['modeloxx'],
                    'sinconob' => false,
                    'dataxxxx' => $dataxxxx['requestx']->all(),
                    'registro' => $this->getFiCompfamiCDBNT(
                        [
                            'padrexxx' => $dataxxxx['padrexxx'],
                            'nnajidxx' => $objetoxx->fi_datos_basico->sis_nnaj_id,
                        ]
                    )
                ]
            );
        }, 5);
        return $objetoxx;
    }
}
