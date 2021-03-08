<?php

namespace App\Traits\Interfaz;

use App\Exceptions\Interfaz\Simiantiguo\ParametroInvalido;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Models\Temacombo;
use Illuminate\Support\Facades\Auth;


/**
 * realizar migagraciones del simi anterior al nuevo desarrollo
 */
trait HomologacionesSimiAtiguoTrait
{
    /********************** METOSO PARA HOMOLOGACION DE PARAMETROS ********************** */

    public function getDataMultivalor($dataxxxx)
    {
        $datasimi = [
            'tabla' => $dataxxxx['tablaxxx'],
            'codigo' => $dataxxxx['idparame'],
            'descripcion' => $dataxxxx['idparame']->nombre,
            'fecha_insercion_1' => date('Y-m-d'),
            'usuario_insercion' => Auth::user()->s_documento,
            'fecha_modificacion_2' => date('Y-m-d'),
            'usuario_modificacion' => Auth::user()->s_documento,
            'estado' => 'A',
            'fecha_insercion' => date('Y-m-d'),
            'fecha_modificacion' => date('Y-m-d'),
        ];
        return $datasimi;
    }

    public function setParametroTemaHSAT($dataxxxx)
    {
        $temaxxxx = $dataxxxx['temaxxxx']->parametros();
        $temaxxxx->updateExistingPivot($dataxxxx['idparame'], ['simianti_id' => $dataxxxx['multival']], false);
    }

    public function getErrorHSAT($dataxxxx)
    {

        $nnajxxxx = $dataxxxx['nnajxxxx'];
        $dataxxxy = [
            'vistaxxx' => 'errors.parainva',
            'dataxxxx' => [
                'tituloxx' => 'PARAMETRO NO ENCONTRADO!',
                'nnajxxxx' =>
                $nnajxxxx->s_primer_nombre . ' ' .
                    $nnajxxxx->s_segundo_nombre . ' ' .
                    $nnajxxxx->s_primer_apellido . ' ' .
                    $nnajxxxx->s_segundo_apellido . ' (Documento: ' . $nnajxxxx->nnaj_docu->s_documento . ')',
                'tablaxxx' => $dataxxxx['tablaxxx'],
                'parametr' => $dataxxxx['idparame']->nombre . ' (' . $dataxxxx['idparame']->id . ')',
                'temaxxxx' => $dataxxxx['temaxxxx']->nombre . ' (' . $dataxxxx['temaxxxx']->id . ')',
                'antiguox' => SisMultivalore::select(['tabla', 'codigo', 'descripcion'])->where('tabla', $dataxxxx['tablaxxx'])->get(),
                'nuevoxxx' => $dataxxxx['temaxxxx'],
                'nuevrows' => count($dataxxxx['temaxxxx']->parametros->toArray())
            ]
        ];
        $dataxxxy['dataxxxx']['antirows'] = count($dataxxxy['dataxxxx']['antiguox']->toArray());
        throw new ParametroInvalido($dataxxxy);
    }
    /**
     * homolagar el parametro en la tabla multivalor
     *
     * @param array $dataxxxx
     * @return $multival
     */
    public function setMultivalorHSAT($dataxxxx)
    {
        if ($dataxxxx['multival'] == null) {
            $this->getErrorHSAT($dataxxxx);
        }

        return $dataxxxx['multival'];
    }
    public function setParametrosHSAT($dataxxxx)
    {
        if ($dataxxxx['testerxx']) {
            // echo $dataxxxx['temaxxxx'].'<br>';
            ddd($dataxxxx['idparame']);
        }


        $dataxxxx['temaxxxx'] = Temacombo::find($dataxxxx['temaxxxx']);
        $dataxxxx['idparame'] = $dataxxxx['temaxxxx']->parametros->where('id', $dataxxxx['idparame'])->first();
        if ($dataxxxx['testerxx']) {
            // echo $dataxxxx['temaxxxx'].'<br>';
            ddd($dataxxxx['idparame']);
        }
        try {
            $dataxxxx['multival'] = $dataxxxx['idparame']->pivot->simianti_id;
            switch ($dataxxxx['tipoxxxx']) {
                case 'multival': // homologarlo en la tabla sis_multivalores
                    return $this->setMultivalorHSAT($dataxxxx);
                    break;

                default:
                    # code...
                    break;
            }
        } catch (\Throwable $th) {
            $this->getErrorHSAT($dataxxxx);
        }
    }

    /********************** FIN METOSO PARA HOMOLOGACION DE PARAMETROS ********************** */
}
