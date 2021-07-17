<?php

namespace App\Traits\Actaencu;

use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActaencuAjaxTrait
{
    public function getUPZ(Request $request)
    {
        $respuest = $this->getUpzsComboCT([
            'localidx' => $request->sis_localidad_id,
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true
        ]);
        return response()->json($respuest);
    }

    public function getBarrio(Request $request)
    {
        return response()->json($this->getBarriosComboCT([
            'localidx' => $request->sis_localidad_id,
            'selected' => $request->selected,
            'upzidxxx' => $request->sis_upz_id,
            'cabecera' => true,
            'ajaxxxxx' => true
        ]));
    }

    /**
     * combo para el responsable de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getResponsableUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => false,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx
        ];
        $respuest = response()->json($this->getResponsableUpiCT($dataxxxx));
        return $respuest;
    }
    /**
     * combo para los servicios de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getServiciosUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx
        ];
        $respuest = response()->json($this->getServiciosUpiComboCT($dataxxxx));
        return $respuest;
    }

    public function getActividades($dataxxxx)
    {
        $parametros = [];
        switch ($dataxxxx['accionxx']) {
            case 2641:
                $dataxxxx['temaxxxx'] = 394;
                break;
            case 2642:
                $dataxxxx['temaxxxx'] = 395;
                break;
            case 2643:
                $dataxxxx['temaxxxx'] = 396;
                break;
            case 2644:
                $dataxxxx['temaxxxx'] = 397;
                break;
            case 2645:
                $dataxxxx['temaxxxx'] = 398;
                break;
        }
        if ($dataxxxx['accionxx'] != 0)
            $parametros = $this->getTemacomboCT($dataxxxx)['comboxxx'];
        return $parametros;
    }
    public function getActividadesAjax(Request $request)
    {
        $parametros = [];
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'orederby' => 'asc',
            'campoxxx' => 'nombre',
            'selected' => $request->selected,
            'accionxx' => $request->padrexxx
        ];
        $parametros = $this->getActividades($dataxxxx);
        return response()->json($parametros);
    }
}
