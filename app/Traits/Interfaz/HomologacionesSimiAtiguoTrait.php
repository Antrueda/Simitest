<?php

namespace App\Traits\Interfaz;

use App\Exceptions\Interfaz\Simiantiguo\ParametroInvalido;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;
use Throwable;

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

    public function getMultivalorHSAT($dataxxxx)
    {

        $multival = SisMultivalore::where('tabla', $dataxxxx['tablaxxx'])
            ->where('descripcion', $dataxxxx['idparame']->nombre)
            ->first();
            if ($dataxxxx['testerxx']) {
                ddd($multival);
            }
        try {
            $multival = $multival->codigo;
            return $multival;
        } catch (Throwable $e) {
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
            $dataxxxy['dataxxxx']['antirows']=count($dataxxxy['dataxxxx']['antiguox']->toArray());
            throw new ParametroInvalido($dataxxxy);
        }
    }
    /**
     * homolagar el parametro en la tabla multivalor
     *
     * @param array $dataxxxx
     * @return $multival
     */
    public function setMultivalorHSAT($dataxxxx)
    {

        /**
         * crear y asociar el multivalor con parametro tema
         */


        if ($dataxxxx['multival'] == null) {
            if ($dataxxxx['testerxx']) {

                ddd($dataxxxx['temaxxxx']);
            }

            $dataxxxx['multival'] = $this->getMultivalorHSAT($dataxxxx);
            /**
             * se crea el  multivalor
             */

            if ($dataxxxx['multival'] == null) { // se crea el multivalor
                $dataxxxx['multival'] = SisMultivalore::create($this->getDataMultivalor($dataxxxx))->codigo;
                $this->setParametroTemaHSAT($dataxxxx);
            }
            /**
             * se asigna el multivalor al parametro tema
             */
            else { // verificar si ya tiene el codigo antiguo asignado

                $this->setParametroTemaHSAT($dataxxxx);
            }
        }

        return $dataxxxx['multival'];
    }
    public function setParametrosHSAT($dataxxxx)
    {

        if ($dataxxxx['testerxx']) {
            //    echo $dataxxxx['idparame'];
        }

        $dataxxxx['temaxxxx'] = Tema::find($dataxxxx['temaxxxx']);
        $dataxxxx['idparame'] = $dataxxxx['temaxxxx']->parametros->where('id', $dataxxxx['idparame'])->first();
        $dataxxxx['multival'] = $dataxxxx['idparame']->pivot->simianti_id;
        switch ($dataxxxx['tipoxxxx']) {
            case 'multival': // homologarlo en la tabla sis_multivalores
                return $this->setMultivalorHSAT($dataxxxx);
                break;

            default:
                # code...
                break;
        }
    }

    /********************** FIN METOSO PARA HOMOLOGACION DE PARAMETROS ********************** */
}
