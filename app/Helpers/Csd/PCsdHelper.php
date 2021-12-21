<?php

namespace App\Helpers\Csd;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\CsdViolencia;
use App\Models\consulta\pivotes\CsdRescomparte;
use App\Models\consulta\pivotes\CsdReshogar;
use App\Models\consulta\pivotes\CsdResservi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Helper para gestionar las rutas y el estado de cada una de las pestañas de csd
 */
class PCsdHelper
{
    /**
     * ruta para la pestaña de datos basicos
     *
     * @param [type] $request
     * @return void
     */
    public static function getRoute($dataxxxx)
    {
        $respuest = ['rutaxxxx' => '', 'classxxx' => 'fas fa-check text-success', 'verxxxxx' => true];
        $value = Session::get('csdver_' . Auth::id());
        if (!$value && $dataxxxx['modeloxx'] == '') {
            $respuest['verxxxxx'] = false;
        }
        if ($dataxxxx['modeloxx'] == '') {
            $respuest['classxxx'] = 'fas fa-times text-danger';
            $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.nuevo', $dataxxxx['padrexxx']->id);
        } else if (auth()->user()->can($dataxxxx['permisox']  . '-editar')) {
            $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.editar', [$dataxxxx['padrexxx']->id, $dataxxxx['modeloxx']->id]);
            if (!$value) {
                $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.ver', [$dataxxxx['padrexxx']->id, $dataxxxx['modeloxx']->id]);
            }
        } else {
            $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.ver', [$dataxxxx['padrexxx']->id, $dataxxxx['modeloxx']->id]);
        }
        return $respuest;
    }


    /**
     * ruta para la pestaña de datos basicos
     *
     * @param [type] $request
     * @return void
     */
    public static function getDaBa($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';
        if ($dataxxxx['padrexxx']->csd->CsdDatosBasico != null) { // debe ser así
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdDatosBasico;
        }
        $dataxxxx['permisox'] = 'csdatbas';
        return PCsdHelper::getRoute($dataxxxx);
    }
    /**
     * ruta para la pestaña de violencias y condicion especial
     *
     * @param [type] $request
     * @return void
     */
    public static function getViolecia($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';

        $vestuari = CsdViolencia::where('csd_id', $dataxxxx['padrexxx']->id)->first();

        if ($dataxxxx['padrexxx']->csd->CsdViolencia != null) { // debe ser así
            $dataxxxx['modeloxx'] =  $dataxxxx['padrexxx']->csd->CsdViolencia;
        }
        $dataxxxx['permisox'] = 'csdviolencia';
        return PCsdHelper::getRoute($dataxxxx);
    }
    /**
     * ruta para la pestaña de situaciones especiales
     *
     * @param [type] $request
     * @return void
     */
    public static function getSituaciones($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';
        if (count($dataxxxx['padrexxx']->csd->especiales) > 0) {
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx'];
        }
        $dataxxxx['permisox'] = 'csdsituacionespecial';
        return PCsdHelper::getRoute($dataxxxx);
    }

    /**
     * ruta para la pestaña de justicias restaurativa
     *
     * @param [type] $request
     * @return void
     */
    public static function getJusticia($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';

        if ($dataxxxx['padrexxx']->csd->CsdJusticia != null) { // debe ser así
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdJusticia;
        }
        $dataxxxx['permisox'] = 'csdjusticia';
        return PCsdHelper::getRoute($dataxxxx);
    }
    /**
     * ruta para la pestaña de resicencia
     *
     * @param [type] $request
     * @return void
     */
    public static function getResidencia($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';
        $hogarxxx = [];
        $servicio = [];
        $comparte = [];
        $residenc =  $dataxxxx['padrexxx']->csd->CsdResidencia;
        if ($residenc != null) {
            $hogarxxx = CsdReshogar::where('csd_residencia_id', $residenc->id)->get();
            $servicio = CsdResservi::where('csd_residencia_id', $residenc->id)->get();
            $comparte = CsdRescomparte::where('csd_residencia_id', $residenc->id)->get();
        }
        if ($residenc != null && count($hogarxxx) > 0 || count($servicio) > 0 || count($comparte) > 0) {
            $dataxxxx['modeloxx'] =  $residenc;
        }
        $dataxxxx['permisox'] = 'csdresidencia';
        return PCsdHelper::getRoute($dataxxxx);
    }

    /**
     * ruta para la pestaña de dinamica familiar
     *
     * @param [type] $request
     * @return void
     */
    public static function getDinamica($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';
        if (!is_null($dataxxxx['padrexxx']->csd->CsdDatosBasico)) {
            $datosbasicos = $dataxxxx['padrexxx']->Csd->CsdDatosBasico->s_documento;
            $nnaj = $dataxxxx['padrexxx']->sis_nnaj->fi_datos_basico->nnaj_docu->s_documento;
            if ($datosbasicos == $nnaj) {
                if ($dataxxxx['padrexxx']->csd->CsdDinFamiliar != null || count($dataxxxx['padrexxx']->csd->CsdDinfamMadre) > 0 || count($dataxxxx['padrexxx']->csd->CsdDinfamPadre) > 0) {
                    $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdDinFamiliar;
                }
            } else {
                if ($dataxxxx['padrexxx']->csd->CsdDinFamiliar != null) {
                    $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdDinFamiliar;
                }
            }
        }

        $dataxxxx['permisox'] = 'csddinfamiliar';
        return PCsdHelper::getRoute($dataxxxx);
    }

    /**
     * ruta para la pestaña de composicion familiar
     *
     * @param [type] $request
     * @return void
     */
    public static function getComposicion($dataxxxx)
    {

        $dataxxxx['modeloxx'] = '';
        if ($dataxxxx['padrexxx']->csd->CsdComfamob != null || count($dataxxxx['padrexxx']->csd->CsdComFamiliar) > 0) {
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdComfamob;
        }
        $dataxxxx['permisox'] = 'csdcomfamirobserva';
        return PCsdHelper::getRoute($dataxxxx);
    }

    /**
     * ruta para la pestaña de motivos de vinculacion y bienvenida
     *
     * @param [type] $request
     * @return void
     */
    public static function getBienvenida($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';
        if ($dataxxxx['padrexxx']->csd->CsdBienvenida != null) {
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdBienvenida;
        }
        $dataxxxx['permisox'] = 'csdbienvenida';
        return PCsdHelper::getRoute($dataxxxx);
    }

    /**
     * ruta para la pestaña de alimentacion familiar
     *
     * @param [type] $request
     * @return void
     */
    public static function getAlimentacion($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';
        if ($dataxxxx['padrexxx']->csd->CsdAlimentacion != null) {
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdAlimentacion;
        }
        $dataxxxx['permisox'] = 'csdalimentacion';
        return PCsdHelper::getRoute($dataxxxx);
    }

    /**
     * ruta para la pestaña de generacion de ingresos
     *
     * @param [type] $request
     * @return void
     */
    public static function getIngresos($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';
        if ($dataxxxx['padrexxx']->csd->CsdGenIngreso != null) {
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdGenIngreso;
        }
        $dataxxxx['permisox'] = 'csdgeningresos';
        return PCsdHelper::getRoute($dataxxxx);
    }

    /**
     * ruta para la pestaña de redes sociales de apoyo
     *
     * @param [type] $request
     * @return void
     */
    public static function getRedes($dataxxxx)
    {

        //$dataxxxx['modeloxx'] = '';
        $respuest = [
            'rutaxxxx' => route('csdredesapoyo', $dataxxxx['padrexxx']->id),
            'classxxx' => 'fas fa-times text-danger', 'verxxxxx' => true
        ];

        if (count($dataxxxx['padrexxx']->csd->CsdRedsocPasado) > 0 || count($dataxxxx['padrexxx']->csd->CsdRedsocActual) > 0) {
            $respuest['classxxx'] = 'fas fa-check text-success';
        } else {
            $respuest['verxxxxx'] = false;
        }
        return  $respuest;
    }

    /**
     * ruta para la pestaña de conclusiones
     *
     * @param [type] $request
     * @return void
     */
    public static function getConclusiones($dataxxxx)
    {
        $dataxxxx['modeloxx'] = '';
        if ($dataxxxx['padrexxx']->csd->CsdConclusiones != null) {
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdConclusiones;
        }
        $dataxxxx['permisox'] = 'csdconclusiones';
        return PCsdHelper::getRoute($dataxxxx);
    }
    /**
     * Undocumented function
     *
     * @param [type] $dataxxxx
     * @return void
     */
    public static function getRDb($dataxxxx)
    {

        switch ($dataxxxx['pestania']) {
            case 1: // datos basicos
                return PCsdHelper::getDaBa($dataxxxx);
                break;
            case 2: // violencias y condicion especial
                return PCsdHelper::getViolecia($dataxxxx);
                break;
            case 3: // situaciones especiales
                return PCsdHelper::getSituaciones($dataxxxx);
                break;
            case 4: // justicias restaurativa
                return PCsdHelper::getJusticia($dataxxxx);
                break;
            case 5: // residencia
                return PCsdHelper::getResidencia($dataxxxx);
                break;
            case 6: // dianamica familiar
                return PCsdHelper::getDinamica($dataxxxx);
                break;
            case 7: // composicion familiar
                return PCsdHelper::getComposicion($dataxxxx);
                break;
            case 8: // motivos de vincualcion y bienvenida
                return PCsdHelper::getBienvenida($dataxxxx);
                break;
            case 9: // alimentacion de la familia
                return PCsdHelper::getAlimentacion($dataxxxx);
                break;
            case 10: // generacion de ingresos
                return PCsdHelper::getIngresos($dataxxxx);
                break;
            case 11: // redes sociales de apoyo
                return PCsdHelper::getRedes($dataxxxx);
                break;
            case 12: // conclusiones
                return PCsdHelper::getConclusiones($dataxxxx);
                break;
        }
    }
}
