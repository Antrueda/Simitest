<?php

namespace App\Traits\Csd;

/**
 * Este trait permite armar la tabla para la combinacion de los contextos y las servicioas
 */
trait CcontviolTrait
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
        $this->tablaxxx = ['servicio' => [], 'contexto' => [], 'colspanx' => 0];
        $cabecera = [
            [
                ['td' => 'ACCIONES', 'widthxxx' => 200, 'rowspanx' => 1, 'colspanx' => 1],
                ['td' => 'Servicio', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
            ],
        ];
        return $cabecera;
    }
    /**
     * hallar cabecera
     */
    public function getCabeceraCuerpo($dataxxxx)
    {
        
        $this->tablaxxx = ['servicio' => [], 'contexto' => [], 'colspanx' => 0];
        foreach ($this->modeloxx->csdresservi as $key => $value) {
            
            /**
             * encontrar nombre de colunas
             */
            $servicio=['td' => $value->prm_servicio->nombre, 'id' => $value->prm_servicio_id, 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1];
            if (!in_array($servicio, $this->tablaxxx['servicio'])) {
                $this->tablaxxx['servicio'][] = $servicio;
                $this->tablaxxx['colspanx']++;
            }
            /** encontrar los contextos (filas) */
            $contexto=['td' => $value->prm_legalxxx->nombre, 'id' => $value->prm_legalxxx_id];
            if (!in_array($contexto, $this->tablaxxx['contexto'])) {
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
                ['td' => 'SERVICIO', 'widthxxx' => '', 'rowspanx' => 2, 'colspanx' => 1],
                ['td' => '¿Es Legal?', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => $this->tablaxxx['colspanx']],
            ],
            $this->tablaxxx['servicio'],
        ];
        return $cabecera;
    }

    public function getCabeceraTabla($dataxxxx)
    {
        $this->temaidxx=$dataxxxx['temaidxx'];
        $cabecera = $this->getCabeceraBase();
        if ($this->modeloxx) {
            if (isset($this->modeloxx->csdresservi[0])) {
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
            foreach ($this->tablaxxx['servicio'] as $key => $value) {
                $respuest='NO';
                foreach ($this->modeloxx->csdresservi as $key => $valuey) {
                    if($valuey->prm_legalxxx_id==$valuex['id'] && $valuey->prm_servicio_id==$value['id']){
                        $respuest=$valuey->prm_respuest->nombre;
                        $cuerpoxx[$keyc][0]['botonesx'][]=[$valuey->id,$valuey->prm_legalxxx->nombre.' '.$valuey->prm_servicio->nombre];
                    
                    }
                }
                $cuerpoxx[$keyc][] =  ['td' => $respuest];
            }
        }
  
        return $cuerpoxx;
    }
}
