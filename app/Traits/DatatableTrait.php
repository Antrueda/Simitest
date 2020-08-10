<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait DatatableTrait
{

    public  function getDtAcciones($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */
                    $requestx->puedever=auth()->user()->can($requestx->routexxx[0].'-leer');
                    $requestx->pueditar=auth()->user()->can($requestx->routexxx[0].'-editar');
                    $requestx->puedinac=auth()->user()->can($requestx->routexxx[0].'-borrar');

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
    public  function getDtAsistencias($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */
                    $requestx->puedever=auth()->user()->can($requestx->routexxx[0].'-leer');
                    $requestx->pueditar=auth()->user()->can($requestx->routexxx[0].'-editar');
                    $requestx->puedinac=auth()->user()->can($requestx->routexxx[0].'-borrar');

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

    public  function getDtDatosVincula($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */
                    $requestx->puedever=auth()->user()->can($requestx->routexxx[0].'-leer');
                    $requestx->pueditar=auth()->user()->can($requestx->routexxx[0].'-editar');
                    $requestx->puedinac=auth()->user()->can($requestx->routexxx[0].'-borrar');

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

            ->addColumn(
                'situacio',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->situacio, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->addColumn(
                'emosione',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->emosione, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }




    //**revisar estos */

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

    public  function getDtGeneral($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */
                    $requestx->puedever=auth()->user()->can($requestx->routexxx[0].'-leer');
                    $requestx->pueditar=auth()->user()->can($requestx->routexxx[0].'-editar');
                    $requestx->puedinac=auth()->user()->can($requestx->routexxx[0].'-borrar');

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

}
