<?php

namespace App\Traits\Indicadores\Usuariox\Indinnaj;

use App\Models\Indicadores\Administ\InGrupregu;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ArmarIndicadorTrait
{
    use ArmarTablaTrait;
private $consulta;
    /**
     * Consultar las configuración de los indicadores
     */
    public function getConsultaAIT()
    {
    
        $respuest=InGrupregu::
        join('in_libagrups','In_grupregus.in_libagrup_id','=','in_libagrups.id')
        ->join('temacombos','In_grupregus.temacombo_id','=','temacombos.id')
        ->join('sis_tcampos','temacombos.sis_tcampo_id','=','sis_tcampos.id')
        ->join('sis_tablas','sis_tcampos.sis_tabla_id','=','sis_tablas.id')
        ->join('sis_docfuens','sis_tablas.sis_docfuen_id','=','sis_docfuens.id')
        ->join('in_indilibas','in_libagrups.in_indiliba_id','=','in_indilibas.id')
        ->join('in_linea_bases','in_indilibas.in_linea_base_id','=','in_linea_bases.id')
        ->join('in_areaindis','in_indilibas.in_areaindi_id','=','in_areaindis.id')
        ->join('in_indicados','in_areaindis.in_indicado_id','=','in_indicados.id')

        ->join('parametros as nivelxxx','in_indilibas.prm_nivelxxx_id','=','nivelxxx.id')
        ->join('parametros as categori','in_indilibas.prm_categori_id','=','categori.id')
        ->orderBy('in_areaindis.id','asc')
        ->orderBy('in_indilibas.id','asc')
        ->orderBy('in_libagrups.id','asc')

        ->get([
            'in_areaindis.id',
            'in_indicados.s_indicador',
            'temacombos.nombre as pregunta',
            'sis_docfuens.nombre as fuentexx', 
            'sis_docfuens.id as fuentexx_id', 
            'in_libagrups.id as grupoxxx',
            'in_linea_bases.s_linea_base as linebase',
            'in_indilibas.id as linebase_id',
            'temacombo_id',
            'nivelxxx.nombre as nivelxxx',
            'categori.nombre as categori',
            'prm_disparar_id',
        ])
       
        
        ;
        return $respuest;
    }

    public function getIndicadoresAIT()
    {
        $respuest=[];
        foreach ($this->consulta as $key => $value) {
            $arrayxxx=['id'=>$value->id,'indicado'=>$value->s_indicador];
            if (!in_array( $arrayxxx,$respuest)) {
                $respuest[]= $arrayxxx;
            }
        }
        return $respuest;
    }

    public function getTbodyAIT()
    {
     
        $this->consulta =$this->getConsultaAIT();   
        $respuest = [];
        foreach ($this->consulta as $key => $value) {   
            $respuest[] = $this->getTrATT($value);
        }
        // ddd($respuest);

        return $respuest;
    }
}
