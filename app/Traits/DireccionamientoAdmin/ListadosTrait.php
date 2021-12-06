<?php

namespace App\Traits\DireccionamientoAdmin;

use App\Models\Direccionamiento\EntidadServicio;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosStsesTest;
use App\Models\fichaobservacion\FosTse;
use App\Models\sistema\SisEntidad;
use app\Models\sistema\SisServicio;
use App\Models\Usuario\Estusuario;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function listaEntidad(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'direcasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = SisEntidad::select(
				[
					'sis_entidads.id',
					'sis_entidads.nombre',
                    'sis_entidads.created_at',
					'sis_entidads.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'sis_entidads.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaEntidadAsignar(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'direcasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = EntidadServicio::select(
				[
					'sis_entidad_sis_servicio.id',
                    'sis_entidads.nombre as entidad',
                    'sis_servicios.s_servicio as servicio',
                    'sis_entidad_sis_servicio.created_at',
					'sis_entidad_sis_servicio.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('sis_entidads', 'sis_entidad_sis_servicio.sis_entidad_id', '=', 'sis_entidads.id')
                ->join('sis_servicios', 'sis_entidad_sis_servicio.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_estas', 'sis_entidad_sis_servicio.sis_esta_id', '=', 'sis_estas.id');
                

            return $this->getDt($dataxxxx, $request);
        }
    }
    




    public function listaServicio(Request $request,SisServicio $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = SisServicio::select(
				[
                    'sis_servicios.id',
                    'sis_servicios.s_servicio',
                    'sis_esta_id',
                    'sis_estas.s_estado'
				]
			)
			->join('sis_estas', 'sis_servicios.sis_esta_id', '=', 'sis_estas.id')
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getMotivosts(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2482
                ])
            );
        }
    }
    public function getMotivos(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2483
                ])
            );
        }
    }
}
