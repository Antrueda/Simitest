<?php

namespace App\Traits\Valoraciones;

use App\Models\Indicadores\InValoracion;
use App\Models\Parametro;
use App\Models\Tema;

/**
 * calcular el nivel de la valoracion
 */
trait ValoracionTrait
{
    /**
     * calcular el nivel y avance
     * @param $categori: categoria con que se calcula nivel
     * @param $ajaxxxxx: true devuelve para respuesta en ajax y false combo html
     */
    public function getNivel($categori, $ajaxxxxx)
    {
        $nivelxxx = 0;
        $nivelesx = [];
        switch ($categori) {
            case 246: // 1
            case 247: // 2
            case 248: // 3
                $nivelxxx = 938; // BAJO
                if ($ajaxxxxx) {
                    $nivelesx[] = ['valuexxx' => $nivelxxx, 'optionxx' => 'BAJO'];
                } else {
                    $nivelesx = [$nivelxxx => 'BAJO'];
                }

                break;
            case 300: // 4
            case 301: // 5
            case 302: // 6
                $nivelxxx = 939; // MEDIO
                if ($ajaxxxxx) {
                    $nivelesx[] = ['valuexxx' => $nivelxxx, 'optionxx' => 'MEDIO'];
                } else {
                    $nivelesx = [$nivelxxx => 'MEDIO'];
                }

                break;
            case 840: // 7
            case 518: // 8
            case 841: // 9
                $nivelxxx = 940; // ALTO
                if ($ajaxxxxx) {
                    $nivelesx[] = ['valuexxx' => $nivelxxx, 'optionxx' => 'ALTO'];
                } else {
                    $nivelesx = [$nivelxxx => 'ALTO'];
                }
                break;
        }
        $pcategor = Parametro::where('id', $categori)->first();
        $idcatego[$pcategor->id] = $pcategor->nombre;
        return [
            $nivelesx, // NIVEL EN LISTA
            $this->getAvance($categori, $nivelxxx), // AVANCE
            $idcatego, // CATEGORIA
            $nivelxxx // NIVEL PARAMETRO
        ];
    }
    /**
     * ARMAR EL COMBO AVANCE
     * @param $categori: INDICA COMO SE ARMA EL COMBO
     * @param $nivelxxx: ARMAR COMBO CUANDO SE ESTA EN EL NIVEL ALTO
     */
    private function getAvance($categori, $nivelxxx)
    {
        $comboxxx = [];
        // econtrar los niveles de avance
        $avanzaxx = Tema::combo(52, true, false);
        // recorre los niveles de avance
        foreach ($avanzaxx as $key => $avancexx) {
            switch ($categori) {
                case 246: // CATEGORIA 1
                    if ($key != 1688) {
                        $comboxxx[$key] = $avancexx; // AVANZA, AVANZA PARCIALMENTE Y NO AVANZA
                    }
                    break;
                case 841: // CATEGORIA 9
                    if ($key != 514 && $key != 512) { //
                        $comboxxx[$key] = $avancexx; // NO AVANZA Y RETROCESO
                    }
                    break;
                default;
                    if ($nivelxxx == 940) { // ALTO
                        if ($key != 512) {
                            $comboxxx[$key] = $avancexx; // AVANZA PARCIALMENTE, NO AVANZA Y RETROCESO
                        }
                    } else {
                        $comboxxx[$key] = $avancexx; // AVANZA, AVANZA PARCIALMENTE, NO AVANZA Y RETROCESO
                    }
            }
        }
        return $comboxxx;
    }

    public function getVista($dataxxxx, $ajaxxxxx)
    {

        $avancexx = $this->getNivel($dataxxxx['cateactu'], $ajaxxxxx);
        $acategor = [246, 247, 248, 300, 301, 302, 840, 518, 841];
        $encatego = array_search($dataxxxx['cateactu'], $acategor);
        $respuest = [];
        switch ($dataxxxx['avancexx']) {
            case 512: //avanza  
                $parametr = Parametro::where('id', $avancexx[3] + 1)->first();
                $respuest = [
                    'nivelxxx' => [['valuexxx' => $parametr->id, 'optionxx' => $parametr->nombre]],
                    'categori' => $this->getCombo($avancexx[3] + 1, $ajaxxxxx)
                ];
                break;
            case 514: // avance parcial                    
                $avancexx = $this->getNivel($acategor[$encatego + 1], $ajaxxxxx);
                $parametr = Parametro::where('id', $avancexx[3])->first();
                $pcategor = Parametro::where('id', $acategor[$encatego + 1])->first();
                $respuest = [
                    'nivelxxx' => [['valuexxx' => $parametr->id, 'optionxx' => $parametr->nombre]],
                    'categori' => ($ajaxxxxx) ? [['valuexxx' => $pcategor->id, 'optionxx' => $pcategor->nombre]] :
                        [$pcategor->id => $pcategor->nombre]
                ];
                break;
            case 559: // no avanza
                $parametr = Parametro::where('id', $avancexx[3])->first();
                $pcategor = Parametro::where('id', $acategor[$encatego])->first();
                $respuest = [
                    'nivelxxx' => [['valuexxx' => $parametr->id, 'optionxx' => $parametr->nombre]],
                    'categori' => ($ajaxxxxx) ? [['valuexxx' => $pcategor->id, 'optionxx' => $pcategor->nombre]] :
                        [$pcategor->id => $pcategor->nombre]
                ];

                break;
            case 1688: // retrocede
                $categori = [];
                $i = 0;
                foreach (Tema::combo(295, false, false) as $key => $value) {

                    if ($i < $encatego) {
                        if ($ajaxxxxx) {
                            $categori[] = ['valuexxx' => $key, 'optionxx' => $value];
                        } else {
                            $categori[$key] = $value;
                        }
                    }
                    $i++;
                }
                $parametr = Parametro::where('id', $avancexx[3])->first();
                $respuest = [
                    'nivelxxx' => [['valuexxx' => $parametr->id, 'optionxx' => $parametr->nombre]],
                    'categori' => $categori
                ];
                break;
        }
        return $respuest;
    }


    private function getCombo($dataxxxx, $ajaxxxxx)
    {
        $nivelxxx = [938 => [246, 247, 248], 939 => [300, 301, 302], 940 => [840, 518, 841]];
        $comboxxx = [];
        foreach (Parametro::whereIn('id', $nivelxxx[$dataxxxx])->get() as $categori) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $categori->id, 'optionxx' => $categori->nombre];
            } else {
                $comboxxx[$categori->id] = $categori->nombre;
            }
        }
        return $comboxxx;
    }
    /**
     * permite identificar si línea base tiene las 9 categorías
     */
    public function getPuede($dataxxxx)
    {
        $puedexxx = false;
        $valoraci = InValoracion::where('in_lineabase_nnaj_id', $dataxxxx['libannaj'])
            ->where('created_at', 'LIKE', date('Y-m-d', time()) . '%')->first();
        $existexx = isset($valoraci->id)==true ? false : true;
        if ((auth()->user()->can($this->opciones['permisox'] . '-crear') ? true : false)==true && $existexx==true) {
            $categori = Tema::where('id', 295)->first()->parametros;
            foreach ($categori as $registro) {
                $valoraci = InValoracion::where('in_lineabase_nnaj_id', $dataxxxx['libannaj'])
                    ->where('i_prm_cactual_id', $registro->id)->first();
                if (!isset($valoraci->id)) {
                    $puedexxx = true;
                    break;
                }
            }
        }
        return $puedexxx;
    }

    public function getGuardado($dataxxxx){
$categori=Parametro::find($dataxxxx['categori']);
        switch ($dataxxxx['avancexx']) {
            case 512: //avanza  
                // 1 - 3
                
                // 4 - 6




                break;
            case 514: // avance parcial                    
                
                break;
            case 559: // no avanza
               

                break;
            case 1688: // retrocede
               
                break;
        }
    }
}
