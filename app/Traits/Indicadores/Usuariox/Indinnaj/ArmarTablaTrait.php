<?php

namespace App\Traits\Indicadores\Usuariox\Indinnaj;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ArmarTablaTrait
{
    private $variable = 0;
    private $fuentexx = 0;
    private $grupoxxx = 0;
    private $linebase = 0;
    /**
     * armar los atributos que van a dar la funcionalidad al td
     *
     * @param array $dataxxxx
     * @return void
     */
    public function getTdAtributosATT($dataxxxx)
    {

        $classxxx = 'align-middle';
        $widthxxx = 10;
        $rowspanx = 1;
        $colspanx = 1;

        if (isset($dataxxxx['classxxx'])) {
            $classxxx = $dataxxxx['classxxx'];
        }
        if (isset($dataxxxx['widthxxx'])) {
            $widthxxx = $dataxxxx['widthxxx'];
        }
        if (isset($dataxxxx['rowspanx'])) {
            $rowspanx = $dataxxxx['rowspanx'];
        }
        if (isset($dataxxxx['colspanx'])) {
            $colspanx = $dataxxxx['colspanx'];
        }
        $respuest = [
            'class' => $classxxx,
            'width' => $widthxxx,
            'rowspan' => $rowspanx,
            'colspan' => $colspanx
        ];
        return $respuest;
    }

    public function getTdATT($dataxxxx)
    {
        $botonesx = false;
        if (isset($dataxxxx['botonesx'])) {
            $botonesx = $dataxxxx['botonesx'];
        }
        $respuest = [
            'atributo' => $this->getTdAtributosATT([]),
            'botonesx' => $botonesx,
            'tituloxx' => $dataxxxx['tituloxx'],
        ];
        return $respuest;
    }


    function rowspanxIndicado($valuexxx)
    {
        
        $filasxxx = 0;
        foreach ($this->consulta as $key => $value) {
            if ($value->id == $valuexxx->id) {
                $filasxxx++;
            }
        }
        return $filasxxx;
    }

    function rowspanxFuentexx($valuexxx)
    {
        $filasxxx = 0;
        foreach ($this->consulta as $key => $value) {
            if ($value->id == $valuexxx->id && $value->fuentexx_id == $valuexxx->fuentexx_id
            &&$value->grupoxxx == $valuexxx->grupoxxx
            
            ) {
                $filasxxx++;
            }
        }
        return $filasxxx;
    }

    function rowspanxGrupoxxx($valuexxx)
    {
      
        $filasxxx = 0;
        foreach ($this->consulta as $key => $value) {
            if (
                $value->id == $valuexxx->id &&
                // $value->fuentexx_id == $valuexxx->fuentexx_id &&
                 $value->grupoxxx == $valuexxx->grupoxxx
            ) {
                $filasxxx++;
            }
        }
        return $filasxxx;
    }

    function rowspanxLinebase($valuexxx)
    {        
        $filasxxx = 0;
        foreach ($this->consulta as $key => $value) {
            if (
                $value->id == $valuexxx->id 
                // &&$value->fuentexx_id == $valuexxx->fuentexx_id
                // && $value->grupoxxx == $valuexxx->grupoxxx
                && $value->linebase_id == $valuexxx->linebase_id
            ) {
                $filasxxx++;
            }
        }
        return $filasxxx;
    }

    public function getTrATT($valuexxx)
    {
        $respuest = [];
        if ($this->variable == 0) { 
            $this->variable = $this->rowspanxIndicado($valuexxx);
            $respuest['variable'] = $this->getTdATT(['tituloxx' => $valuexxx->s_indicador]);
            $respuest['variable']['atributo']['rowspan'] = $this->variable;
        }

        if ($this->fuentexx == 0) {
            $this->fuentexx = $this->rowspanxFuentexx($valuexxx);
            $respuest['fuentexx'] = $this->getTdATT(['tituloxx' => $valuexxx->fuentexx]);
            $respuest['fuentexx']['atributo']['rowspan'] = $this->fuentexx;
        }
        // echo $valuexxx->grupoxxx.'<br>';
        if ($this->grupoxxx == 0) {      
            $this->grupoxxx = $this->rowspanxGrupoxxx($valuexxx);
            $respuest['grupoxxx'] = $this->getTdATT(['tituloxx' => 'GRUPO ' . $valuexxx->grupoxxx]);
            $respuest['grupoxxx']['atributo']['rowspan'] = $this->grupoxxx;
        }
        $respuest['valiadac'] = $this->getTdATT(['tituloxx' => $valuexxx->pregunta]);
        if ($this->linebase == 0) {
            $this->linebase = $this->rowspanxLinebase($valuexxx);
            $respuest['linebase'] = $this->getTdATT(['tituloxx' => $valuexxx->linebase]);
            $respuest['linebase']['atributo']['rowspan'] = $this->linebase;
            $respuest['nivelxxx'] = $this->getTdATT(['tituloxx' => $valuexxx->nivelxxx]);
            $respuest['nivelxxx']['atributo']['rowspan'] = $this->linebase;
            $respuest['categori'] = $this->getTdATT(['tituloxx' => $valuexxx->categori]);
            $respuest['categori']['atributo']['rowspan'] = $this->linebase;
            $respuest['botonces'] = $this->getTdATT(['tituloxx' => 'titulo', 'botonesx' => true]);
            $respuest['botonces']['atributo']['rowspan'] = $this->linebase;
        }

        $this->variable--;
        $this->fuentexx--;
        $this->grupoxxx--;
        $this->linebase--;
        
        return $respuest;
    }
}
