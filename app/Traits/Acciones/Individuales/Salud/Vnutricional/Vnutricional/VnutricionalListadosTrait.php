<?php

namespace App\Traits\Acciones\Individuales\Salud\Vnutricional\Vnutricional;

use App\Models\Acciones\Individuales\Salud\Vnutricional\Vnutricion;
use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VnutricionalListadosTrait
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

    public  function getDtConsumo($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->toJson();
    }

    /**
     * encontrar la lisa de actas de encuentro
     */
    public function getListaxxx(Request $request, SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Vnutricion::select([
                'vnutricions.id',
                'vnutricions.fechdili',
                'vnutricions.sis_esta_id',
                'sis_depens.nombre',
                'diagnostico.nombre as diagnostico',
                'users.name',
                'sis_estas.s_estado',
            ])
                ->join('sis_depens', 'vnutricions.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'vnutricions.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'vnutricions.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as diagnostico', 'vnutricions.prm_diagnostico', '=', 'diagnostico.id')
                ->where('vnutricions.sis_nnaj_id', $padrexxx->id)
                ->where('vnutricions.is_seguimiento', 0)
                ->orderBy('vnutricions.created_at', 'desc');
            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getListaSeguimientos(Request $request, Vnutricion $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Vnutricion::select([
                'vnutricions.id',
                'vnutricions.fechdili',
                'vnutricions.sis_esta_id',
                'sis_depens.nombre',
                'diagnostico.nombre as diagnostico',
                'users.name',
                'sis_estas.s_estado',
            ])
                ->join('sis_depens', 'vnutricions.sis_depen_id', '=', 'sis_depens.id')
                ->join('users', 'vnutricions.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'vnutricions.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as diagnostico', 'vnutricions.prm_diagnostico', '=', 'diagnostico.id')
                ->where('vnutricions.sis_nnaj_id', $padrexxx->sis_nnaj_id)
                ->where('vnutricions.is_seguimiento', 1)
                ->where('vnutricions.vnutricion_id', $padrexxx->id)
                ->orderBy('vnutricions.created_at', 'desc');
            return $this->getDt($dataxxxx, $request);
        }
    }
}
