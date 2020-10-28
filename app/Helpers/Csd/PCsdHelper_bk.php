<?php

namespace App\Helpers\Csd;

use App\Models\consulta\Csd;

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
        $respuest = ['rutaxxxx' => '', 'classxxx' => 'fas fa-check text-success'];
        if ($dataxxxx['modeloxx'] == '') {
            $respuest['classxxx'] = 'fas fa-times text-danger';
            $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.nuevo', $dataxxxx['padrexxx']->id);
        } else if (auth()->user()->can($dataxxxx['permisox']  . '-editar')) {
            $respuest['rutaxxxx'] = route($dataxxxx['permisox']  . '.editar', [$dataxxxx['padrexxx']->id, $dataxxxx['modeloxx']->id]);
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
        if ($dataxxxx['padrexxx']->csd->CsdViolencia != null) { // debe ser así
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdViolencia;
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
        if (count($dataxxxx['padrexxx']->csd->especiales) >0) {
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
        // ddd($dataxxxx['padrexxx']->csd->fi_csdvsi);
        if ($dataxxxx['padrexxx']->csd->CsdResidencia != null) {
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdResidencia;
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
        if ($dataxxxx['padrexxx']->csd->CsdDinFamiliar != null) {
        $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdDinFamiliar;
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
        if ($dataxxxx['padrexxx']->csd->CsdComFamiliarObservaciones !=null) {
            $dataxxxx['modeloxx'] = $dataxxxx['padrexxx']->csd->CsdComFamiliarObservaciones;
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
        $respuest = ['rutaxxxx' =>route('csdredesapoyo' , $dataxxxx['padrexxx']->csd_id), 'classxxx' => 'fas fa-times text-danger'];
        if (count($dataxxxx['padrexxx']->csd->CsdRedsocPasado)>0 || count($dataxxxx['padrexxx']->csd->CsdRedsocActual)>0) {
            $respuest['classxxx'] = 'fas fa-check text-success';
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
