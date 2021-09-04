<?php

namespace App\Traits\Interfaz;

use App\Models\Parametro;
use App\Models\Temacombo;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisMunicipio;
use Illuminate\Support\Facades\Auth;
use App\Models\Simianti\Sis\Municipio;
use App\Models\Simianti\Sis\SisMultivalore;
use App\Exceptions\Interfaz\Simiantiguo\ParametroInvalido;
use App\Exceptions\Interfaz\Simiantiguo\MunicipioSAException;


/**
 * realizar migagraciones del simi anterior al nuevo desarrollo
 */
trait HomologacionesSimiAtiguoTrait
{
    /********************** METODOS PARA HOMOLOGACION DE PARAMETROS ********************** */

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
        if (!is_null($dataxxxx['idparame'])) {
            $parametr = Parametro::find($dataxxxx['idparame']->id);
            $error_parametr = $parametr->nombre . ' (' . $parametr->id . ')';
        } else {

            $error_parametr = $dataxxxx['idparame'] . ' ( null )';
        }
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
                'parametr' => $error_parametr,
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

        $dataxxxx['temaxxxx'] = Temacombo::find($dataxxxx['temaxxxx']);
        $dataxxxx['idparame'] = $dataxxxx['temaxxxx']->parametros->where('id', $dataxxxx['idparame'])->first();
        $dataxxxx['multival'] = $dataxxxx['idparame']->pivot->simianti_id;
        switch ($dataxxxx['tipoxxxx']) {
            case 'multival': // homologarlo en la tabla sis_multivalores
                return $this->setMultivalorHSAT($dataxxxx);
                break;
        }
    }

    /********************** FIN METODOS PARA HOMOLOGACION DE PARAMETROS ********************** */

    /********************** METODOS PARA LA HOMOLOGACION DE MUNICIPIOS ********************** */
    public function getMunicipiosHSAT($dataxxxx)
    {

        $municipi = $dataxxxx['padrexxx']->nnaj_docu->sis_municipio;
        $departam = SisDepartam::find($municipi->sis_departam_id);
        $municipy = $departam->sis_municipios->find($municipi->id)->simianti_id;
        $nnajxxxx = $dataxxxx['padrexxx'];
        $dataxxxy = [
            'vistaxxx' => 'errors.interfaz.simianti.munianti',
            'dataxxxx' => [
                'tituloxx' => 'MUNICIPIO NO ENCONTRADO!',
                'nnajxxxx' =>
                $nnajxxxx->s_primer_nombre . ' ' .
                    $nnajxxxx->s_segundo_nombre . ' ' .
                    $nnajxxxx->s_primer_apellido . ' ' .
                    $nnajxxxx->s_segundo_apellido . ' (Documento: ' . $nnajxxxx->nnaj_docu->s_documento . ')',
                'antiguox' => $municipi,

            ]
        ];

        if ($municipy == null) {
            throw new MunicipioSAException($dataxxxy);
        }
        return $departam->sis_pai->simianti_id;
    }
    /********************** FIN METODOS PARA LA HOMOLOGACION DE MUNICIPIOS ********************** */
}
