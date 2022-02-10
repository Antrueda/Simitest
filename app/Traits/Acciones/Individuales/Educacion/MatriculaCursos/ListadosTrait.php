<?php

namespace App\Traits\Acciones\Individuales\Educacion\MatriculaCursos;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgCarguedoc;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Grupales\Traslado\Traslado;
use App\Models\Acciones\Grupales\Traslado\TrasladoNnaj;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Pivotes\SalidaJovene;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\Parametro;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeUpiNnaj;
use App\Models\Simianti\Inf\IfAsistenciaDiaria;
use App\Models\Simianti\Inf\IfDetalleAsistenciaDiaria;
use App\Models\Simianti\Inf\IfPlanillaAsistencia;
use App\Models\Simianti\Ped\PedEstadoM;
use App\Models\Simianti\Ped\PedMatricula;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisServicio;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Combos\CombosTrait;
use App\Traits\DatatableTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function getDttb($queryxxx, $requestx)
    {
        return datatables()
            ->eloquent($queryxxx)
            ->addColumn('btns', 'Acciones/Grupales/Agtema/botones/botonesapi', 2)
            ->addColumn('s_estado', $requestx->estadoxx)
            ->rawColumns(['btns', 's_estado'])
            ->toJson();
    }

    public function getAgTema(Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = AgTema::select(['ag_temas.id', 'ag_temas.s_tema',  'ag_temas.sis_esta_id', 'areas.nombre', 'sis_estas.s_estado'])
                ->join('areas', 'ag_temas.area_id', '=', 'areas.id')
                ->join('sis_estas', 'ag_temas.sis_esta_id', '=', 'sis_estas.id')
                // ->where('ag_temas.sis_esta_id', 1)
                ->where(function ($queryxxx) {
                    $usuariox = Auth::user();
                    if (!$usuariox->hasRole([Role::find(1)->name])) {
                        $queryxxx->where('ag_temas.sis_esta_id', 1);
                    }
                });
            return $this->getDttb($dataxxxx, $request);
        }
    }
    public function listaMatriculaCursos(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  MatriculaCurso::select([
                'matricula_cursos.id',
                'matricula_cursos.fecha',
                'sis_estas.s_estado',
                'cargue.name as cargue',
                'matricula_cursos.sis_esta_id',
                'tipocurso.nombre as tipocurso',
                'cursos.s_cursos as curso',

            ])
                ->join('parametros as tipocurso', 'matricula_cursos.prm_curso', '=', 'tipocurso.id')
                ->join('sis_estas', 'matricula_cursos.sis_esta_id', '=', 'sis_estas.id')
                ->join('cursos', 'matricula_cursos.curso_id', '=', 'cursos.id')
                ->join('users as cargue', 'matricula_cursos.user_id', '=', 'cargue.id')
                ->where('matricula_cursos.sis_esta_id', 1);


            return $this->getDt($dataxxxx, $request);
        }
    }



    public function getTodoComFami($request)
    {
        $dataxxxx =  SisNnaj::select([
            'sis_nnajs.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_compfamis.s_telefono',
            'sis_nnajs.sis_esta_id',
            'nnaj_nacimis.d_nacimiento',
            'sis_nnajs.created_at',
            'sis_estas.s_estado',

        ])
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
            ->join('fi_compfamis', 'sis_nnajs.id', '=', 'fi_compfamis.sis_nnaj_id')
            ->where('fi_compfamis.prm_reprlega_id', 227)
            ->wherein('sis_nnajs.id', FiCompfami::select('sis_nnaj_id')->where('sis_nnajnnaj_id', $request->padrexxx)->get())->groupBy(
                'sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_compfamis.s_telefono',
                'sis_nnajs.sis_esta_id',
                'nnaj_nacimis.d_nacimiento',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',
            );

        return $this->getDtAcciones($dataxxxx, $request);
    }
    public function getNnajsele(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'tipodocu' => ['prm_doc_id', ''],
                'parentes' => ['prm_parentezco_id', ''],
                'edadxxxx' => '',

            ];
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first()->nnaj_docu;
            if (isset($document->id)) {
                $dataxxxx['tipodocu'][1] = $document->prm_tipodocu_id;
                $dataxxxx['parentes'][1] = FiCompfami::where('sis_nnaj_id', $request->padrexxx)->first()->Parentesco;
            }

            return response()->json($dataxxxx);
        }
    }
}

/*

