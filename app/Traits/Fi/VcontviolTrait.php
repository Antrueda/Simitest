<?php

namespace App\Traits\Fi;

/**
 * Este trait permite armar la tabla para la combinacion de los contextos y las violencias
 */
trait VcontviolTrait
{
    private $modeloxx;
    private $tablaxxx;
    private $temaidxx;
    public function setModelo($modeloxx)
    {
        $this->modeloxx = $modeloxx;
    }

    public function getCabeceraBase()
    {
        $this->tablaxxx = ['violenci' => [], 'contexto' => [], 'colspanx' => 0];
        $cabecera = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'AMBITO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
            ],
        ];
        return $cabecera;
    }
    /**
     * hallar cabecera
     */
    public function getCabeceraCuerpo($dataxxxx)
    {

        $this->tablaxxx = ['violenci' => [], 'contexto' => [], 'colspanx' => 0];
        foreach ($this->modeloxx->fi_contviol as $key => $value) {
            /**
             * encontrar nombre de colunas
             */
            $violenci=['td' => $value->prm_violenci->nombre, 'id' => $value->prm_violenci_id, 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1];
            if (!in_array($violenci, $this->tablaxxx['violenci']) && $dataxxxx['temaidxx'] == $value->tema_id) {
                $this->tablaxxx['violenci'][] = $violenci;
                $this->tablaxxx['colspanx']++;
            }
            /** encontrar los contextos (filas) */
            $contexto=['td' => $value->prm_contexto->nombre, 'id' => $value->prm_contexto_id];
            if (!in_array($contexto, $this->tablaxxx['contexto']) && $dataxxxx['temaidxx'] == $value->tema_id) {
                $this->tablaxxx['contexto'][] = $contexto;
            }
        }
    }
    public function getCabecera($dataxxxx)
    {
        $this->getCabeceraCuerpo($dataxxxx);
        $cabecera = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 2, 'colspanx' => 1],
                ['td' => 'AMBITO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                ['td' => 'VIOLENCIA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => $this->tablaxxx['colspanx']],
            ],
            $this->tablaxxx['violenci'],
        ];
        return $cabecera;
    }

    public function getCabeceraTabla($dataxxxx)
    {
        $this->temaidxx=$dataxxxx['temaidxx'];
        $cabecera = $this->getCabeceraBase();
        if ($this->modeloxx) {
            if (isset($this->modeloxx->fi_contviol[0])) {
                $cabecera = $this->getCabecera($dataxxxx);
            }
        }
        return $cabecera;
    }
    public function getCuerpoTabla()
    {
        
        $cuerpoxx = [];
        foreach ($this->tablaxxx['contexto'] as $keyc => $valuex) {
            $cuerpoxx[$keyc] =[
                ['td' => 1,],
                ['td' => $valuex['td']],
             ];
            foreach ($this->tablaxxx['violenci'] as $key => $value) {
                $respuest='NO';
                foreach ($this->modeloxx->fi_contviol as $key => $valuey) {
                    if($valuey->prm_contexto_id==$valuex['id'] && $valuey->prm_violenci_id==$value['id']&& $this->temaidxx==$valuey->tema_id){
                        $respuest=$valuey->prm_respuest->nombre;
                        $cuerpoxx[$keyc][0]['botonesx'][]=[$valuey->id,$valuey->prm_contexto->nombre.' '.$valuey->prm_violenci->nombre];
                    
                    }
                }
                $cuerpoxx[$keyc][] =  ['td' => $respuest];
            }
        }
  
        return $cuerpoxx;
    }
}
