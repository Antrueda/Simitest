<?php

namespace App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion;

use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Denomina;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Modulo;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\ModuloUnidad;
use App\Models\fichaobservacion\FosSeguimiento;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosStsesTest;
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

    public function listaCursos(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Curso::select(
				[
					'cursos.id',
					'cursos.s_cursos',
                    'parametros.nombre as tipocurso',
                    'cursos.created_at',
					'cursos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('parametros', 'cursos.tipo_curso_id', '=', 'parametros.id')
				->join('sis_estas', 'cursos.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function listaModuloAsignar(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = CursoModulo::select(
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




    public function listaModulos(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Modulo::select(
				[
					'modulos.id',
                    'modulos.s_modulo',
                    'modulos.num_unidades',
                    'modulos.created_at',
					'modulos.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'modulos.sis_esta_id', '=', 'sis_estas.id')
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }

    
    public function listaUnidades(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'],'fosasignar'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = Denomina::select(
				[
					'denominas.id',
                    'denominas.s_denominas',
                    'denominas.created_at',
					'denominas.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'denominas.sis_esta_id', '=', 'sis_estas.id')
                ;

            return $this->getDt($dataxxxx, $request);
        }
    }


    public function listaUniAsignar(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = ModuloUnidad::select(
				[
					'modulo_unidads.id',
                    'denominas.s_denominas as denominas',
                    'modulos.s_modulo as modulo',
                    'modulo_unidads.created_at',
					'modulo_unidads.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
                ->join('denominas', 'modulo_unidads.denomina_id', '=', 'denominas.id')
                ->join('modulos', 'modulo_unidads.modulo_id', '=', 'modulos.id')
                ->join('sis_estas', 'modulo_unidads.sis_esta_id', '=', 'sis_estas.id');
                

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

    public function getCursoModulo($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = CursoModulo::select(['modulos.id as valuexxx', 'modulos.s_modulo as optionxx'])
                    ->join('modulos', 'curso_modulos.modulo_id', '=', 'modulos.id')
                    ->join('cursos', 'curso_modulos.cursos_id', '=', 'cursos.id')
                    ->where('curso_modulos.cursos_id', $dataxxxx['dependen'])
                    ->where('curso_modulos.sis_esta_id', 1)
                    ->orderBy('curso_modulos.id', 'asc')
                    ->get();
                    $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
                    return    $respuest;
    }
    

    public function getModulo(Request $request,CursoModulo $padrexxx)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx,
            'nnajxxxx' => $request->nnajxxxx
        ];
        $respuest = response()->json($this->getCursoModulo($dataxxxx));
        return $respuest;
    }

   


    public function getMotcurso(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2760
                ])
            );
        }
    }


    public function getMotModulo(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2761
                ])
            );
        }
    }

    public function getMotUnidad(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2604
                ])
            );
        }
    }
}
