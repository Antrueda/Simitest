<?php

namespace App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Individuales\Salud\Labrrd\Labrrd;
use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdSeg;
use App\Models\Acciones\Individuales\Salud\Labrrd\LabrrdAsoComponente;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait LabrrdListadosTrait
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
            $dataxxxx =  Labrrd::select([
                'labrrds.id',
                'labrrds.fechdili',
                'labrrds.sis_esta_id',
                'origen.nombre as origen',
                'atencion.nombre as atencion',
                'users.name',
                'sis_estas.s_estado',
            ])
                ->join('sis_depens as origen', 'labrrds.sis_origen_id', '=', 'origen.id')
                ->join('sis_depens as atencion', 'labrrds.sis_atenc_id', '=', 'atencion.id')
                ->join('users', 'labrrds.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'labrrds.sis_esta_id', '=', 'sis_estas.id')
                ->where('labrrds.sis_nnaj_id', $padrexxx->id);

            //mostrar regsitros inactivos a solo administradores
            $rol = Auth::user()->roles->first()->id;
            if (!($rol == 1 || $rol == 2)) {
                $dataxxxx = $dataxxxx->where('labrrds.sis_esta_id', 1);
            }

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function getListaSeguimientos(Request $request, Labrrd $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  LabrrdSeg::select([
                'labrrd_segs.id',
                'labrrd_segs.fechdili',
                'labrrd_segs.sis_esta_id',
                'labrrd_segs.num_sesion',
                'origen.nombre as origen',
                'atencion.nombre as atencion',
                'users.name',
                'sis_estas.s_estado',
            ])
                ->join('sis_depens as origen', 'labrrd_segs.sis_origen_id', '=', 'origen.id')
                ->join('sis_depens as atencion', 'labrrd_segs.sis_atenc_id', '=', 'atencion.id')
                ->join('users', 'labrrd_segs.user_fun_id', '=', 'users.id')
                ->join('sis_estas', 'labrrd_segs.sis_esta_id', '=', 'sis_estas.id')
                ->where('labrrd_segs.labrrd_id', $padrexxx->id);

            //mostrar regsitros inactivos a solo administradores
            $rol = Auth::user()->roles->first()->id;
            if (!($rol == 1 || $rol == 2)) {
                $dataxxxx = $dataxxxx->where('labrrd_segs.sis_esta_id', 1);
            }
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getComponentesValoracionI()
    {
        $data = LabrrdAsoComponente::select(
            'labrrd_aso_componentes.id',
            'labrrd_aso_componentes.tipo_valoracion',
            'labrrd_aso_componentes.tipo_componente',
            'labrrd_aso_componentes.componente_id',
            'labrrd_componentes.nombre',
        )
            ->where('labrrd_aso_componentes.tipo_valoracion', 'INICIAL')
            ->join('labrrd_componentes', 'labrrd_aso_componentes.componente_id', '=', 'labrrd_componentes.id')
            ->get();

        return $data;
    }

    public function getComponentesValoracionSegui()
    {
        $data = LabrrdAsoComponente::select(
            'labrrd_aso_componentes.id',
            'labrrd_aso_componentes.tipo_valoracion',
            'labrrd_aso_componentes.tipo_componente',
            'labrrd_aso_componentes.componente_id',
            'labrrd_componentes.nombre',
        )
            ->where('labrrd_aso_componentes.tipo_valoracion', 'SEGUIMIENTO')
            ->join('labrrd_componentes', 'labrrd_aso_componentes.componente_id', '=', 'labrrd_componentes.id')
            ->get();

        return $data;
    }
}
