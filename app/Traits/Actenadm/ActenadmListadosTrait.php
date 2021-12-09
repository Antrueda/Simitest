<?php

namespace App\Traits\Actenadm;

use App\Models\Actaencu\AeRecuadmi;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActenadmListadosTrait
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

    public function getLRecursosAdmin(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AeRecuadmi::select([
                'ae_recuadmis.id',
                'ae_recuadmis.s_recurso',
                'umedida.nombre as umedida',
                'trecurso.nombre as trecurso',
                'ae_recuadmis.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('parametros as umedida', 'ae_recuadmis.prm_umedida_id', '=', 'umedida.id')
                ->join('parametros as trecurso', 'ae_recuadmis.prm_trecurso_id', '=', 'trecurso.id')
                ->join('sis_estas', 'ae_recuadmis.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }

}
