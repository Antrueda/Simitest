<?php

namespace App\Traits\Acciones\Individuales\Salud\Administracion;

use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;

use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Modulo;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\AsignaEnfermedad;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Enfermedad;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiasigna;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiespecial;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;
use App\Models\fichaobservacion\FosTse;
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

    public function listaDiagnostico(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Diagnostico::select(
				[
					'diagnosticos.id',
					'diagnosticos.nombre',
                    'diagnosticos.codigo',
                    'diagnosticos.created_at',
					'diagnosticos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('sis_estas', 'diagnosticos.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaEnfermedadAsignar(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = AsignaEnfermedad::select(
				[
					'curso_modulos.id',
                    'cursos.s_cursos as curso',
                    'modulos.s_modulo as modulo',
                    'curso_modulos.created_at',
					'curso_modulos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('cursos', 'curso_modulos.cursos_id', '=', 'cursos.id')
                ->join('modulos', 'curso_modulos.modulo_id', '=', 'modulos.id')
                ->join('sis_estas', 'curso_modulos.sis_esta_id', '=', 'sis_estas.id');
                

            return $this->getDt($dataxxxx, $request);
        }
    }




    public function listaEnfermedad(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Enfermedad::select(
				[
					'enfermedads.id',
                    'enfermedads.nombre',
                    'enfermedads.created_at',
					'enfermedads.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'enfermedads.sis_esta_id', '=', 'sis_estas.id')
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaRemision(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Remision::select(
				[
					'remisions.id',
                    'remisions.nombre',
                    'remisions.created_at',
					'remisions.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'remisions.sis_esta_id', '=', 'sis_estas.id')
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function listaEspecial(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Remiespecial::select(
				[
					'remiespecials.id',
                    'remiespecials.nombre',
                    'remiespecials.created_at',
					'remiespecials.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'remiespecials.sis_esta_id', '=', 'sis_estas.id')
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaRemisionAsignar(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Remiasigna::select(
				[
					'remiasignas.id',
                    'remisions.nombre as remisions',
                    'remiespecials.nombre as especial',
                    'remiasignas.created_at',
					'remiasignas.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('remisions', 'remiasignas.remi_id', '=', 'remisions.id')
                ->join('remiespecials', 'remiasignas.reesp_id', '=', 'remiespecials.id')
                ->join('sis_estas', 'remiasignas.sis_esta_id', '=', 'sis_estas.id');
                

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
