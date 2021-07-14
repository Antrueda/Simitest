<?php

namespace App\Traits\Administracion\Dependencia;

use App\Models\Simianti\Ge\GeUpi;
use App\Models\Sistema\SisDepen;
use Illuminate\Http\Request;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait DependenciaConsultasTrait
{
    public function getDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
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
    public function getListadoActual(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = SisDepen::select([
                'sis_depens.id',
                'sis_depens.nombre',
                'parametros.nombre as sexo',
                'sis_depens.s_direccion',
                'sis_depens.sis_esta_id',
                'sis_localidads.s_localidad as sis_localidad_id',
                'sis_barrios.s_barrio as sis_barrio_id',
                'sis_depens.s_telefono',
                'sis_estas.s_estado',
                'sis_depens.s_correo',
            ])
                ->join('parametros', 'sis_depens.i_prm_sexo_id', '=', 'parametros.id')
                ->join('sis_upzbarris', 'sis_depens.sis_upzbarri_id', '=', 'sis_upzbarris.id')
                ->join('sis_localupzs', 'sis_upzbarris.sis_localupz_id', '=', 'sis_localupzs.id')
                ->join('sis_localidads', 'sis_localupzs.sis_localidad_id', '=', 'sis_localidads.id')
                ->join('sis_barrios', 'sis_upzbarris.sis_barrio_id', '=', 'sis_barrios.id')
                ->join('sis_estas', 'sis_depens.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListadoAntiguo(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.antiguo';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = GeUpi::select([
                'ge_upi.id_upi',
                'ge_upi.nombre',
                'ge_upi.sexo',
                'ge_upi.direccion',
                'ge_upi.estado',

                // 'parametros.nombre as sexo',
                // 'sis_depens.s_direccion',
                // 'sis_depens.sis_esta_id',
                // 'sis_localidads.s_localidad as sis_localidad_id',
                // 'sis_barrios.s_barrio as sis_barrio_id',
                // 'sis_depens.s_telefono',
                // 'sis_estas.s_estado',
                // 'sis_depens.s_correo',
            ])
            ->where('ge_upi.estado','A')
            ;
                // ->join('parametros', 'sis_depens.i_prm_sexo_id', '=', 'parametros.id')
                // ->join('sis_upzbarris', 'sis_depens.sis_upzbarri_id', '=', 'sis_upzbarris.id')
                // ->join('sis_localupzs', 'sis_upzbarris.sis_localupz_id', '=', 'sis_localupzs.id')
                // ->join('sis_localidads', 'sis_localupzs.sis_localidad_id', '=', 'sis_localidads.id')
                // ->join('sis_barrios', 'sis_upzbarris.sis_barrio_id', '=', 'sis_barrios.id')
                // ->join('sis_estas', 'sis_depens.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }
}
