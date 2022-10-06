<?php

namespace App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\AdmiValoracionSicorrd;

use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntorFactor;
use Illuminate\Http\Request;

use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntorno;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdFactore;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiVsrrdListadosTrait
{
    public  function getDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */

                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    /**
     * lista administraccion entornos volaracion rdd
     */
    public function getListaEntornos(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  VsrrdEntorno::select([
                'vsrrd_entornos.id',
                'vsrrd_entornos.nombre',
                'vsrrd_entornos.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'vsrrd_entornos.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    //lista administraccion factores volaracion rdd
    public function getListaFactores(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VsrrdFactore::select([
                'vsrrd_factores.id',
                'vsrrd_factores.nombre',
                'vsrrd_factores.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'vsrrd_factores.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }

    //lista administraccion asociacion entornos factores volaracion rdd
    public function getListaEntornoFactor(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VsrrdEntorFactor::select([
                'vsrrd_entor_factors.id',
                'vsrrd_entornos.nombre as entorno',
                'vsrrd_factores.nombre as factor',
                'vsrrd_entor_factors.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'vsrrd_entor_factors.sis_esta_id', '=', 'sis_estas.id')
                ->join('vsrrd_entornos', 'vsrrd_entor_factors.vsrrd_entorno_id', '=', 'vsrrd_entornos.id')
                ->join('vsrrd_factores', 'vsrrd_entor_factors.vsrrd_factor_id', '=', 'vsrrd_factores.id');

            return $this->getDt($dataxxxx, $request);
        }
    }
}
