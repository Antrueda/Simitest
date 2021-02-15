<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\Simianti\Ge\GeNnajDocumento;
use Maatwebsite\Excel\Concerns\ToArray;

trait ComposicionFamiliarTrait
{
    use HomologacionesTrait;
    public function getCmposicionFamiliarCFT($request)
    {

        $document = GeNnajDocumento::select([
            //composicon familiar
            'if_composicion_familiar.telefono as s_telefono',
            'if_composicion_familiar.edad', // nacimiento
            'if_composicion_familiar.parentesco as i_prm_parentesco_id',
            'if_composicion_familiar.representante_legal as prm_reprlega_id',
            'if_composicion_familiar.ocupacion as i_prm_ocupacion_id',
            'if_composicion_familiar.vinc_idipron as i_prm_vinculado_idipron_id',
            'if_composicion_familiar.convive_con_nnaj as i_prm_convive_nnaj_id',
            'if_composicion_familiar.numero_documento as s_documento',
            'if_composicion_familiar.primer_nombre as s_primer_nombre',
            'if_composicion_familiar.segundo_nombre as s_segundo_nombre',
            'if_composicion_familiar.primer_apellido as s_primer_apellido',
            'if_composicion_familiar.segundo_apellido as s_segundo_apellido',
            'if_composicion_familiar.id_tipo_doc as prm_tipodocu_id',

            // 'if_composicion_familiar.id_composicion_familiar',
            //
            //     'if_composicion_familiar.estado_civil',
            //     'if_composicion_familiar.escolaridad',
            //     'if_composicion_familiar.custodia',
            //     'if_composicion_familiar.cabeza_hogar',
            //     'if_composicion_familiar.id_nnaj',
            //     'if_composicion_familiar.fecha_insercion',
            //     'if_composicion_familiar.usuario_insercion',
            //     'if_composicion_familiar.fecha_modificacion',
            //     'if_composicion_familiar.usuario_modificacion',
            //
            //
            //
            //     'if_composicion_familiar.direccion',

            //     'if_composicion_familiar.id_visita_domiciliaria',
            //     'if_composicion_familiar.fuente',
            //     'if_composicion_familiar.id_valoracion_inicial',
            //     'if_composicion_familiar.grupo_poblacional',
            //     'if_composicion_familiar.estado',
            //     'if_composicion_familiar.id_ficha_ingreso',
            //     'if_composicion_familiar.flag',
            //
            //     'if_composicion_familiar.tipo_enfermedad',
            //     'if_composicion_familiar.id_medicamento_perm',
            //     'if_composicion_familiar.cuales_medicamentos',
            //     'if_composicion_familiar.id_tratamiento',
            //     'if_composicion_familiar.id_proceso_penal',
            //     'if_composicion_familiar.proceso',
            //     'if_composicion_familiar.id_vigente',
            //     'if_composicion_familiar.numero_veces_proceso',
            //     'if_composicion_familiar.motivo_proceso',
            //     'if_composicion_familiar.hace_cuanto_proc',
            //     'if_composicion_familiar.direccion_ch',
            //     'if_composicion_familiar.beneficios',
            //     'if_composicion_familiar.tiempo',

            //     'if_composicion_familiar.tipo_tiempo',
        ])
            ->where('ge_nnaj_documento.numero_documento', $request->docuagre)
            ->join('if_composicion_familiar', 'ge_nnaj_documento.id_nnaj', '=', 'if_composicion_familiar.id_nnaj')
            ->get();
// ddd($document);

        return $document;
    }

    public function setCmposicionFamiliarCFT($request)
    {
        $dataxxxx = $this->getCmposicionFamiliarCFT($request);
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






            FiCompfami::transaccion($value->toArray(), '');

        }

    }
}
