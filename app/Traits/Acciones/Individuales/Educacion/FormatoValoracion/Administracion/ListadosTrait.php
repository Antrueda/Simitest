<?php

namespace App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion;

use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use App\Models\Acciones\Grupales\Traslado\MotivoEgresoSecu;
use App\Models\Acciones\Grupales\Traslado\MotivoEgreu;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Modulo;
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

    
    public function listaUnidades(Request $request,FosTse $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = MotivoEgresoSecu::select(
				[
					'motivo_egreso_secus.id',
                    'motivo_egreso_secus.nombre',
                    'motivo_egreso_secus.created_at',
					'motivo_egreso_secus.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('sis_estas', 'motivo_egreso_secus.sis_esta_id', '=', 'sis_estas.id')
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
