<?php

namespace App\Traits\Administracion\Dependencia;

use App\Models\Simianti\Ge\GeUpi;
use App\Models\Sistema\SisDepen;
use App\Models\User;
use App\Traits\Datatable\DatatableConfigTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait DependenciaConsultasTrait
{
    use DatatableConfigTrait;
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

    public function getDtTotal($queryxxx, $requestx, $totalxxx)
    {
        return DataTables()
            ->of($queryxxx)

            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    $queryxxx['nuevanti']=false;
                    $queryxxx = (object)$queryxxx;
                    if (!isset( $queryxxx->sis_esta_id)) {
                        $queryxxx->nuevanti=true;
                    }
                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {

                    if (!isset($queryxxx->sis_esta_id)) {
                        $queryxxx['sis_esta_id'] = 1;
                        $queryxxx['s_estado'] = 'ACTIVO';
                    }
                    $queryxxx = (object)$queryxxx;
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            // ->setTotalRecords($totalxxx)
            ->rawColumns(['botonexx', 's_estado'])
            ->make(true);
    }

    public function getListadoActual(Request $request)
    {
        // print_r($request->all());
        if ($request->ajax()) {
            $orderby = $this->getOrderBy($request, 'sis_depens.id');
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.estadosx';
            // $products = GeUpi::skip(0)->take(15)->get();
            $notinxxx = [];
            $upisxxxx = SisDepen::select(['simianti_id'])->where('simianti_id', '!=', '0')->get();
            $upisnomb = SisDepen::select(['nombre'])->get();
            foreach ($upisxxxx as $key => $value) {
                $notinxxx[] = $value->simianti_id;
            }
            // $dataxxxy = GeUpi::select([
            //     'ge_upi.id_upi as id',
            //     'ge_upi.nombre',
            //     'ge_upi.sexo',
            //     'localidad.nombre as sis_localidad_id',
            //     'barrio.nombre as sis_barrio_id',
            //     'ge_upi.direccion as s_direccion',
            //     'ge_upi.estado',
            //     'ge_upi.correo_electronico as s_correo',
            //     'ge_upi.telefonos as s_telefono',

            // ])
            //     ->join('ba_territorios as localidad', 'ge_upi.id_localidad', '=', 'localidad.id')
            //     ->join('ba_territorios as barrio', 'ge_upi.id_barrio', '=', 'barrio.id')
            //     ->where('ge_upi.estado', 'A')
            //     ->where('ge_upi.sexo','<>' ,null)
            //     ->whereNotIn('id_upi',$notinxxx)
            //     ->whereNotIn('ge_upi.nombre',$upisnomb)
            //     ->get();
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
                ->join('sis_estas', 'sis_depens.sis_esta_id', '=', 'sis_estas.id')
                ->orderBy($orderby, $request->order[0]['dir'])

                ->get();

            $totalxxx = $dataxxxx->count();
            // $totalxxx += $dataxxxy->count();
            // $totalxxx += $dataxxxy->count();
            $dataxxxx = array_merge($dataxxxx->toArray()
            //, $dataxxxy->toArray()
        );
            $collecti = new Collection((object)$dataxxxx);

            $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at'])->get();

        // return DataTables::of( $dataxxxx)->make(true);

            return $this->getDtTotal($collecti, $request, $totalxxx);
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
                'ge_upi.id_upi as id',
                'ge_upi.nombre',
                'ge_upi.sexo',
                'ge_upi.direccion',
                'ge_upi.estado',
            ])
                ->where('ge_upi.estado', 'A');
            return $this->getDt($dataxxxx, $request);
        }
    }
}
