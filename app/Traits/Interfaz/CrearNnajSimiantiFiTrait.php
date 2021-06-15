<?php

namespace App\Traits\Interfaz;

use App\Models\Parametro;
use App\Models\Simianti\Ge\GeNnaj;

use App\Models\User;

/**
 * armar array de la data que se le va a enviar en la creación del nnaj en el antiguo simi
 */
trait CrearNnajSimiantiFiTrait
{
    public function getDataGeNnajCNSFT($dataxxxx)
    {
        $padrexxx = $dataxxxx['padrexxx'];
        $padrexxx->prm_tipoblaci_id = 651;
        $maximoxx = GeNnaj::select(['id_nnaj'])->orderBy('id_nnaj', 'DESC')->first()->id_nnaj + 1;
        $nnajfics = $padrexxx->nnaj_fi_csd;
        $sexoxxxx = $padrexxx->nnaj_sexo;
        if (!is_null($nnajfics->prm_gsanguino_id) && !is_null($nnajfics->prm_factor_rh_id)) {
            $factorRh = Parametro::find($nnajfics->prm_gsanguino_id)->nombre . Parametro::find($nnajfics->prm_factor_rh_id)->nombre;
        } else {
            $factorRh = null;
        }
        $datannaj = [
            'id_nnaj' => $maximoxx,
            'primer_apellido' => $padrexxx->s_primer_apellido,
            'segundo_apellido' => $padrexxx->s_segundo_apellido,
            'primer_nombre' => $padrexxx->s_primer_nombre,
            'segundo_nombre' => $padrexxx->s_segundo_nombre,
            'fecha_nacimiento' => $padrexxx->nnaj_nacimi->d_nacimiento,
            'id_nacimiento' => $padrexxx->nnaj_nacimi->sis_municipio->simianti_id,
            'apodo' => $padrexxx->s_apodo,
            'fecha_insercion' => date('Y-m-d'),
            'usuario_insercion' => User::find($padrexxx->user_crea_id)->s_documento,
            'fecha_modificacion' => date('Y-m-d'),
            'usuario_modificacion' => User::find($padrexxx->user_crea_id)->s_documento,
            'rh' => $factorRh,
            'genero' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $sexoxxxx->prm_sexo_id,
                'tablaxxx' => 'GENERO',
                'temaxxxx' => 11,
                'tipoxxxx' => 'multival',
            ]),
            'tipo_documento' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_docu->prm_tipodocu_id,
                'tablaxxx' => 'TIPO_DOCUMENTO',
                'temaxxxx' => 3,
                'tipoxxxx' => 'multival',
            ]),
            'numero_documento' => $padrexxx->nnaj_docu->s_documento,
            'clase_libreta_militar' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_sit_mil->prm_clase_libreta_id,
                'tablaxxx' => 'CLASE_LIBRETA',
                'temaxxxx' => 33,
                'tipoxxxx' => 'multival',
            ]),
            'estado' => 'A',
            'etnia' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_fi_csd->prm_etnia_id,
                'tablaxxx' => 'ETNIA',
                'temaxxxx' => 20,
                'tipoxxxx' => 'multival',
            ]),
            'nombre_identitario' => $padrexxx->nnaj_sexo->s_nombre_identitario,
            'estado_civil' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_fi_csd->prm_estado_civil_id,
                'tablaxxx' => 'ESTADOC',
                'temaxxxx' => 19,
                'tipoxxxx' => 'multival',
            ]),
            'genero_identifica' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $sexoxxxx->prm_identidad_genero_id,
                'tablaxxx' => 'IDENTIDADG',
                'temaxxxx' => 12,
                'tipoxxxx' => 'multival',
            ]),
            'sexo_orienta' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $sexoxxxx->prm_orientacion_sexual_id,
                'tablaxxx' => 'ORIENTACIONS',
                'temaxxxx' => 13,
                'tipoxxxx' => 'multival',
            ]),
            'condicion_vestido' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->prm_vestimenta_id,
                'tablaxxx' => 'DICOTOMIAS',
                'temaxxxx' => 290,
                'tipoxxxx' => 'multival',
            ]),
            'cuenta_doc' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_docu->prm_doc_fisico_id,
                'tablaxxx' => 'DICOTOMIA',
                'temaxxxx' => 366,
                'tipoxxxx' => 'multival',
            ]),
            'tipo_poblacion' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->prm_tipoblaci_id,
                'tablaxxx' => 'TIPOPOB',
                'temaxxxx' => 119,
                'tipoxxxx' => 'multival',
            ]),
            'id_pais_nacimiento' => $this->getMunicipiosHSAT($dataxxxx),
        ];
        return $datannaj;
    }
}
