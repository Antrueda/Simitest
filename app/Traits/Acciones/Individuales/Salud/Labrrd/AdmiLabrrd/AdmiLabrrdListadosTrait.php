<?php

namespace App\Traits\Acciones\Individuales\Salud\Labrrd\AdmiLabrrd;

use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdAsoComponente;
use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdComponente;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiLabrrdListadosTrait
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
     * encontrar la lista de actividades Diarias
     */
    public function getListaAsocomponentes(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  LabrrdAsoComponente::select([
                'labrrd_aso_componentes.id',
                'labrrd_aso_componentes.tipo_valoracion',
                'labrrd_aso_componentes.tipo_componente',
                'labrrd_aso_componentes.sis_esta_id',
                'labrrd_componentes.nombre AS componente',
                'sis_estas.s_estado'
            ])
                ->join('labrrd_componentes', 'labrrd_aso_componentes.componente_id', '=', 'labrrd_componentes.id')
                ->join('sis_estas', 'labrrd_aso_componentes.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaComponentes(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  LabrrdComponente::select([
                'labrrd_componentes.id',
                'labrrd_componentes.nombre',
                'labrrd_componentes.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'labrrd_componentes.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }
}
