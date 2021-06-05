<?php

namespace App\Traits\Interfaz\Nuevsimi;

use App\Models\fichaIngreso\NnajUpi;
use App\Models\Simianti\Ge\GeNnajDocumento;
use Illuminate\Support\Facades\Auth;

/**
 * actuliza un nnaj en el nuevo desarrollo con la información que se encuentra en el antiguo simi
 */
trait ActualizarNnajFiTrait
{
    public function pruebaANFT($dataxxxx)
    {
        $padrexxx = $dataxxxx['padrexxx'];
        $objetoxx = $this->getBuscarNnajAgregar(['docuagre' => $dataxxxx['padrexxx']->nnaj_docu->s_documento, 'buscarxx' => false]);
        // if (Auth::user()->s_documento == 17496705) {
        //     // ddd($sisdepen);
        //     // $sisdepen->update();
        //     ddd($padrexxx->sis_nnaj->toArray(), $objetoxx->toArray());
        // }
        // && $padrexxx->sis_nnaj->simianti_id < 1
        if ($objetoxx != null&& $padrexxx->sis_nnaj->simianti_id < 1) {

            $padrexxx->s_primer_nombre = $objetoxx->s_primer_nombre;
            $padrexxx->s_segundo_nombre = $objetoxx->s_segundo_nombre;
            $padrexxx->s_primer_apellido = $objetoxx->s_primer_apellido;
            $padrexxx->s_segundo_apellido = $objetoxx->s_segundo_apellido;
            $padrexxx->s_apodo = $objetoxx->s_apodo;

            $padrexxx->prm_tipoblaci_id = $objetoxx->prm_tipoblaci_id;
            $padrexxx->prm_vestimenta_id = $objetoxx->prm_vestimenta_id;
            $padrexxx->user_edita_id = Auth::user()->id;
            $padrexxx->updated_at = date('Y-m-d H:m:s');
            $padrexxx->update();

            $diligenc = $padrexxx->fi_diligenc;
            $diligenc->user_edita_id = Auth::user()->id;
            $diligenc->updated_at = date('Y-m-d H:m:s');
            $diligenc->diligenc = $objetoxx->diligenc;
            $diligenc->update();

            $sisdepen = $padrexxx->sis_nnaj->nnaj_upis;

            if ($sisdepen->where('sis_depen_id', $objetoxx->sis_depen_id)->first() == null) {
                $nnajupix = NnajUpi::create(
                    [
                        'sis_nnaj_id' => $padrexxx->sis_nnaj->id,
                        'sis_depen_id' => $objetoxx->sis_depen_id,
                        'user_crea_id' => Auth::user()->id,
                        'prm_principa_id' => 227,
                        'user_edita_id' => Auth::user()->id,
                        'sis_esta_id' => 1
                    ]
                );
            }
            foreach ($sisdepen as $key => $value) {
                $upixxxxx = $value;
                $principal = 228;
                if ($value->sis_depen_id == $objetoxx->sis_depen_id) {
                    $principal = 227;
                }
                foreach ($value->nnaj_deses as $key => $servicio) {
                    $seviprin = 228;
                    if ($servicio->sis_servicio_id == $objetoxx->sis_servicio_id) {
                        $seviprin = 227;
                    }
                    $servicio->sis_servicio_id = $servicio->sis_servicio_id;
                    $servicio->user_edita_id = Auth::user()->id;
                    $servicio->prm_principa_id = $seviprin;
                    $servicio->updated_at = date('Y-m-d H:m:s');
                    $servicio->update();
                }
                $upixxxxx->sis_depen_id = $upixxxxx->sis_depen_id;
                $upixxxxx->user_edita_id = Auth::user()->id;
                $upixxxxx->prm_principa_id = $principal;
                $upixxxxx->updated_at = date('Y-m-d H:m:s');
                $upixxxxx->update();
            }

            $nacimien = $padrexxx->nnaj_nacimi;
            $nacimien->sis_municipio_id = $objetoxx->sis_municipio_id;
            $nacimien->user_edita_id = Auth::user()->id;
            $nacimien->d_nacimiento = $objetoxx->d_nacimiento;
            $nacimien->updated_at = date('Y-m-d H:m:s', time());
            $nacimien->update();

            $sexoxxxx = $padrexxx->nnaj_sexo;
            $sexoxxxx->prm_sexo_id =  $objetoxx->prm_sexo_id;
            $sexoxxxx->prm_identidad_genero_id =  $objetoxx->prm_identidad_genero_id;
            $sexoxxxx->prm_orientacion_sexual_id =  $objetoxx->prm_orientacion_sexual_id;
            $sexoxxxx->user_edita_id = Auth::user()->id;
            $sexoxxxx->updated_at = date('Y-m-d H:m:s', time());
            $sexoxxxx->update();

            $ficsdxxx = $padrexxx->nnaj_fi_csd;

            $ficsdxxx->prm_etnia_id =  $objetoxx->prm_etnia_id;
            $ficsdxxx->prm_poblacion_etnia_id =  235;
            $ficsdxxx->s_apodo =  $objetoxx->s_apodo;
            if ($objetoxx->prm_gsanguino_id != null) {
                $ficsdxxx->prm_gsanguino_id =  $objetoxx->prm_gsanguino_id;
                $ficsdxxx->prm_factor_rh_id =  $objetoxx->prm_factor_rh_id;
            }

            $ficsdxxx->prm_estado_civil_id =  $objetoxx->prm_estado_civil_id;
            $ficsdxxx->user_edita_id = Auth::user()->id;
            $ficsdxxx->updated_at = date('Y-m-d H:m:s');
            $ficsdxxx->update();

            $document = $padrexxx->nnaj_docu;
            $document->prm_tipodocu_id =  $objetoxx->prm_tipodocu_id;
            $document->prm_doc_fisico_id =  $objetoxx->prm_doc_fisico_id;
            $document->s_documento =  $objetoxx->s_documento;
            $document->sis_municipio_id =  $objetoxx->sis_municipioexp_id;
            $document->user_edita_id = Auth::user()->id;
            $document->updated_at = date('Y-m-d H:m:s');
            $document->update();

            $situmili = $padrexxx->nnaj_sit_mil;
            $situmili->prm_situacion_militar_id =  $objetoxx->prm_situacion_militar_id;
            $situmili->prm_clase_libreta_id =  $objetoxx->prm_clase_libreta_id;
            $situmili->user_edita_id = Auth::user()->id;
            $situmili->updated_at = date('Y-m-d H:m:s');
            $situmili->update();

            $focaliza = $padrexxx->nnaj_focali;
            $focaliza->s_lugar_focalizacion =  $objetoxx->s_lugar_focalizacion;
            $focaliza->s_nombre_focalizacion =  $objetoxx->s_nombre_focalizacion;
            $focaliza->sis_upzbarri_id =  $objetoxx->sis_upzbarri_id;
            $focaliza->user_edita_id = Auth::user()->id;
            $focaliza->updated_at = date('Y-m-d H:m:s');
            $focaliza->update();

            $nnajxxxx = $padrexxx->sis_nnaj;
            $nnajxxxx->simianti_id = GeNnajDocumento::where('numero_documento', $objetoxx->s_documento)->first()->id_nnaj;
            $nnajxxxx->user_edita_id = Auth::user()->id;
            $nnajxxxx->updated_at = date('Y-m-d H:m:s');
            $nnajxxxx->prm_nuevoreg_id = 228;
            $nnajxxxx->update();

            // if (Auth::user()->s_documento == 17496705) {
            //     // ddd($sisdepen);
            //     // $sisdepen->update();
            //     ddd($padrexxx->sis_nnaj->toArray(), $objetoxx->toArray());
            // }
            return $padrexxx;
        }
    }
}
