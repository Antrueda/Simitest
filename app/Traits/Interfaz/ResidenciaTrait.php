<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiResidencia;
use App\Models\Simianti\Ge\GeDirecciones;
use App\Models\Simianti\Ge\GeNnajDocumento;

/**
 * realiza la comunicación entre las dos bases de datos=>'{$value->s_iso}'que se busca?
 * * que a traves de una api desarrollada en java la interfaz pueda realizar consultas e insertar registros
 * * al crar un nnaj se digite la cédula y se realice una búsqueda en la db del simi antiguo y este existe alla lo traiga y lo inserte en la nueva base de datos
 * * sino existe lo debe crear en las dos db
 */
trait ResidenciaTrait
{
    use HomologacionesTrait;
    public function getDireccionesCFT($request)
    {

        $document = GeNnajDocumento::select([
            //composicon familiar
            'ge_direcciones.id_direccion ',
            'ge_direcciones.tipo_via_ppal as i_prm_tipo_via_id', 
            'ge_direcciones.numero_via_ppal as  ',
            'ge_direcciones.nombre_via_ppal as s_nombre_via  ',
            'ge_direcciones.letra_via_ppal ',
            'ge_direcciones.bis_via_ppal ',
            'ge_direcciones.letra_bis_via ',
            'ge_direcciones.cuad_via_ppal ',
            'ge_direcciones.numero_via_gral ',
            'ge_direcciones.letra_via_gral ',
            'ge_direcciones.numero_placa ',
            'ge_direcciones.cuad_via_gral ',
            'ge_direcciones.comple_select ',
            'ge_direcciones.comple_text ',
            'ge_direcciones.rural ',
            'ge_direcciones.id_nnaj ',
            'ge_direcciones.id_barrio ',
            'ge_direcciones.tipo_vivienda ',
            'ge_direcciones.tenencia ',
            'ge_direcciones.estrato_residencia ',
            'ge_direcciones.zona ',
            'ge_direcciones.telefonos ',
            'ge_direcciones.id_tipo_dir ',
            'ge_direcciones.id_espacio_parcha ',
            'ge_direcciones.nombre_espacio ',
            'ge_direcciones.celular_1 as s_telefono_uno',
            'ge_direcciones.celular_2 as s_telefono_dos',
            'ge_direcciones.email ',
            'ge_direcciones.tipo_residencia ',
            'ge_direcciones.tiene_residencia ',

            /*
        'i_prm_tiene_dormir_id',
        'i_prm_tipo_duerme_id',
        'i_prm_tipo_tenencia_id',
        'i_prm_tipo_direccion_id',
        'i_prm_zona_direccion_id',
        'i_prm_tipo_via_id',
        's_nombre_via',
        'i_prm_alfabeto_via_id',
        'i_prm_tiene_bis_id',
        'i_prm_bis_alfabeto_id',
        'i_prm_cuadrante_vp_id',
        'i_via_generadora',
        'i_prm_alfabetico_vg_id',
        'i_placa_vg',
        'i_prm_cuadrante_vg_id',
        'i_prm_estrato_id',
        'i_prm_espacio_parcha_id',
        's_nombre_espacio_parcha',
        'sis_upzbarri_id',
        's_complemento',
        's_telefono_uno',
        's_telefono_dos',
        's_telefono_tres',
        's_email_facebook',
        'sis_nnaj_id',
                */

 
        ])
            ->where('ge_nnaj_documento.numero_documento', $request->docuagre)
            ->join('ge_direcciones', 'ge_nnaj_documento.id_nnaj', '=', 'ge_direcciones.id_nnaj')
            ->get();
// ddd($document);

        return $document;
    }
    public function setResidencia($request)
    {
        $dataxxxx = $this->getDireccionesCFT($request);
        foreach ($dataxxxx as $key => $value) {
            $value->prm_tipodocu_id=$this->getParametrosSimiMultivalor(
                ['codigoxx' => $value->prm_tipodocu_id,
                'tablaxxx' => 'TIPO_DOCUMENTO',
                'temaxxxx' => 3,
                'testerxx' => false])->id;

                $value->i_prm_parentesco_id=$this->getParametrosSimiMultivalor(
                    ['codigoxx' => $value->i_prm_parentesco_id,
                    'tablaxxx' => 'PARENTESCO',
                    'temaxxxx' => 358,
                    'testerxx' => false])->id;
            $value->sis_municipio_id=$this->getMunicipoSimi(['idmunici'=>0])->id;

            $value->prm_reprlega_id=$this->getParametrosSimi(['codigoxx'=>$value->prm_reprlega_id,'temaxxxx'=>23])->id;

            $value->d_nacimiento=(date('Y')-$value->edad).'-'.date('m-d');
            $value->s_nombre_identitario='migracione del antiguo simi';
            $value->i_prm_vinculado_idipron_id=$this->getParametrosSimi(['codigoxx'=>$value->i_prm_vinculado_idipron_id,'temaxxxx'=>23])->id;
            $value->i_prm_ocupacion_id=$this->getParametrosSimiMultivalor(
                ['codigoxx' => $value->i_prm_ocupacion_id,
                'tablaxxx' => 'OCUPACION',
                'temaxxxx' => 156,
                'testerxx' => false])->id;
                $value->i_prm_convive_nnaj_id=$this->getParametrosSimi(['codigoxx'=>$value->i_prm_convive_nnaj_id,'temaxxxx'=>23])->id;






            FiResidencia::transaccion($value->toArray(), '');

        }

    }
}
