<?php

namespace App\Traits\Seguridad;

use App\Models\Simianti\Ge\GePersonalIdipron;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;


/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait SeguridadConsultasTrait
{

    public function getDtTotal($queryxxx, $requestx, $totalxxx)
    {
        return DataTables()
            ->of($queryxxx)

            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    $queryxxx['nuevanti'] = false;
                    $queryxxx = (object)$queryxxx;
                    if (!isset($queryxxx->sis_esta_id)) {
                        $queryxxx->nuevanti = true;
                    }
                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_documento',
                function ($queryxxx) {
                    $queryxxx = (object)$queryxxx;
                    if (!isset($queryxxx->s_documento)) {
                        $queryxxx->s_documento = $queryxxx->id;
                    }
                    return $queryxxx->s_documento;
                }
            )
            ->addColumn(
                'nombre',
                function ($queryxxx) {
                    $queryxxx = (object)$queryxxx;
                    if (!isset($queryxxx->nombre)) {
                        $queryxxx->nombre = 'SIN DATO';
                    }
                    return $queryxxx->nombre;
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



    public function getUsuario(Request $request)
    {

        if ($request->ajax()) {

            $notinxxx = User::pluck('s_documento');
            $dataxxxy = GePersonalIdipron::where([['ge_personal_idipron.estado', '=', "A"]])
                ->whereNotIn('ge_personal_idipron.id_documento', $notinxxx)
                ->where('ge_personal_idipron.id_documento', '>', 0)
                ->join('ge_cargo','ge_personal_idipron.cargo','=','ge_cargo.id_cargo')
                ->get([
                    'id_documento as id',
                    'primer_nombre as s_primer_nombre',
                    'primer_apellido as s_primer_apellido',
                    'correo_electronico as email',
                    'segundo_nombre as s_segundo_nombre',
                    'segundo_apellido as s_segundo_apellido',
                    'ge_cargo.nombre_cargo as name',
                ]);
            $request->routexxx = [$this->opciones['routxxxx'], 'contrase'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  User::select([

                'users.id',
                'users.s_documento',
                'users.s_primer_nombre',
                'users.s_segundo_nombre',
                'users.s_primer_apellido',
                'users.s_segundo_apellido',
                'users.sis_esta_id',
                'users.email',
                'roles.name',
                'parametros.nombre',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'users.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros', 'users.prm_tvinculacion_id', '=', 'parametros.id')
                ->join('model_has_roles', function ($join) {
                    $join->on('users.id', '=', 'model_has_roles.model_id')
                        ->where('model_has_roles.model_type', User::class)
                        ->where('model_has_roles.sis_esta_id', 1);
                })
                ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')->get();

            $totalxxx = $dataxxxx->count();
            $totalxxx += $dataxxxy->count();
            $dataxxxx = array_merge($dataxxxx->toArray(), $dataxxxy->toArray());
            $collecti = new Collection((object)$dataxxxx);
            return $this->getDtTotal($collecti, $request, $totalxxx);

            // return $this->getDt($dataxxxx, $request);
        }
    }
}
