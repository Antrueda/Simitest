<?php

namespace App\Traits\Acciones\Grupales\Sena\Administracion;

use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Grupales\InscripcionConvenios\Convenio;
use App\Models\Acciones\Grupales\InscripcionConvenios\Modalidad;
use App\Models\Acciones\Grupales\InscripcionConvenios\Programa;
use App\Models\Acciones\Grupales\InscripcionConvenios\ProgramaAsocia;
use App\Models\Acciones\Grupales\InscripcionConvenios\SedeCentro;
use App\Models\Acciones\Grupales\InscripcionConvenios\Tipoprograma;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\fichaobservacion\FosTse;
use App\Models\Temacombo;
use App\Models\Usuario\Estusuario;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
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
     * encontrar listar paises
     */

    public function listaprograma(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Programa::select(
                [
                    'programas.id',
                    'programas.nombre',
                    'programas.created_at',
                    'programas.sis_esta_id',
                    'sis_estas.s_estado'
                ]
            )
                ->join('sis_estas', 'programas.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function ListaModalidad(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Modalidad::select([
                'modalidads.id',
                'modalidads.nombre',
                'modalidads.created_at',
                'modalidads.sis_esta_id',
                'sis_estas.s_estado'
                ])
            ->join('sis_estas', 'modalidads.sis_esta_id', '=', 'sis_estas.id');
 
            

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function ListaTipoPrograma(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Tipoprograma::select([
                'tipoprogramas.id',
                'tipoprogramas.nombre',
                'tipoprogramas.created_at',
                'tipoprogramas.sis_esta_id',
                'sis_estas.s_estado'
                ])
            ->join('sis_estas', 'tipoprogramas.sis_esta_id', '=', 'sis_estas.id');
 
            

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function ListaConvenio(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Convenio::select([
                'convenios.id',
                'convenios.nombre',
                'convenios.created_at',
                'convenios.sis_esta_id',
                'sis_estas.s_estado'
                ])
            ->join('sis_estas', 'convenios.sis_esta_id', '=', 'sis_estas.id');
            
            

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function ListaSedeCentro(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = SedeCentro::select([
                'sede_centros.id',
                'sede_centros.nombre',
                'sede_centros.created_at',
                'sede_centros.sis_esta_id',
                'sis_estas.s_estado'
                ])
            ->join('sis_estas', 'sede_centros.sis_esta_id', '=', 'sis_estas.id');
            

            return $this->getDt($dataxxxx, $request);
        }
    }


    /*
    Temacombo::select(['parametros.id', 'parametros.nombre'])
            ->join('parametro_temacombo', 'temacombos.id', '=', 'parametro_temacombo.temacombo_id')
            ->join('parametros', 'parametro_temacombo.parametro_id', '=', 'parametros.id')
            ->where('temacombos.id', $temaxxxx)
            ->where('parametros.sis_esta_id', 1)
            ->orderBy('parametros.nombre', 'desc')
            ->get();
    */


    public function listaAsignarPrograma(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'asignaprograma'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = ProgramaAsocia::select(
				[
                    'programa_asocias.id',
                    'programas.nombre as progra',
                    'tipoprogramas.nombre as tipopro',
                    'modalidads.nombre as modal',
                    'sede_centros.nombre as sede',
                    'convenios.nombre as conve',
                    'programa_asocias.created_at',
					'programa_asocias.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('programas', 'programa_asocias.progra_id', '=', 'programas.id')
                ->join('tipoprogramas', 'programa_asocias.tipop_id', '=', 'tipoprogramas.id')
                ->join('modalidads', 'programa_asocias.modal_id', '=', 'modalidads.id')
                ->join('sede_centros', 'programa_asocias.sede_id', '=', 'sede_centros.id')
                ->join('convenios', 'programa_asocias.conve_id', '=', 'convenios.id')
                ->join('sis_estas', 'programa_asocias.sis_esta_id', '=', 'sis_estas.id');
                

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
                    'formular' => 3029
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
                    'formular' => 3029
                ])
            );
        }
    }
}

