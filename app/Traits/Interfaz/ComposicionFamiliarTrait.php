<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\NnajDocu;
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
        ])
            ->where('ge_nnaj_documento.numero_documento', $request['padrexxx']->nnaj_docu->s_documento)
            ->where('if_composicion_familiar.estado','A')
            ->join('if_composicion_familiar', 'ge_nnaj_documento.id_nnaj', '=', 'if_composicion_familiar.id_nnaj')
            ->get();
        return $document;
    }

    public function setCmposicionFamiliarCFT($requestx)
    {
        $dataxxxx = $this->getCmposicionFamiliarCFT($requestx);
        foreach ($dataxxxx as $key => $value) {
            $value->prm_tipodocu_id=$this->getParametrosSimiMultivalor(
                ['codigoxx' => $value->prm_tipodocu_id,
                'tablaxxx' => 'TIPO_DOCUMENTO',
                'temaxxxx' => 3,
                'testerxx' => false])->id;
                if($value->s_documento==0){
                    $value->s_documento=$this->getCedulaAleatoria();
                }
                $value->i_prm_parentesco_id=$this->getParametrosSimiMultivalor(
                    ['codigoxx' => $value->i_prm_parentesco_id,
                    'tablaxxx' => 'PARENTESCO',
                    'temaxxxx' => 358,
                    'testerxx' => false])->id;
            $value->sis_municipio_id=$this->getMunicipoSimi(['idmunici'=>0])->id;

            $value->prm_reprlega_id=$this->getParametrosSimi(['codigoxx'=>$value->prm_reprlega_id,'temaxxxx'=>23])->id;

            $value->d_nacimiento=(date('Y')-$value->edad).'-'.date('m-d');
            $value->s_nombre_identitario=' ';
            $value->i_prm_vinculado_idipron_id=$this->getParametrosSimi(['codigoxx'=>$value->i_prm_vinculado_idipron_id,'temaxxxx'=>23])->id;
            $value->i_prm_ocupacion_id=$this->getParametrosSimiMultivalor(
                ['codigoxx' => $value->i_prm_ocupacion_id,
                'tablaxxx' => 'OCUPACION',
                'temaxxxx' => 156,
                'testerxx' => false])->id;
                $value->i_prm_convive_nnaj_id=$this->getParametrosSimi(['codigoxx'=>$value->i_prm_convive_nnaj_id,'temaxxxx'=>23])->id;
                $value->sis_nnajnnaj_id=$requestx['padrexxx']->sis_nnaj_id;
            FiCompfami::transaccion($value->toArray(), '');
        }
    }
}
