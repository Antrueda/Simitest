<?php

namespace App\Http\Controllers\Acciones\Grupales\GestMatrAcademia;

use Illuminate\Http\Request;
use App\Traits\Combos\CombosTrait;
use Illuminate\Support\Facades\DB;
use App\Models\Ejemplo\AeEncuentro;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Grupales\Educacion\IEstadoMs;
use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Traits\Acciones\Grupales\GestMatrAcademica\AjaxTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\CrudTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\ListadosTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\PestaniasTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\DataTablesTrait;
use App\Traits\Acciones\Grupales\GestMatrAcademica\GestMatrAcademica\VistasTrait;
use App\Http\Requests\Acciones\Grupales\GestMatrAcademia\IEstadoMatriculaCrearRequest;
use App\Traits\Acciones\Grupales\GestMatrAcademica\GestMatrAcademica\ParametrizarTrait;

class GestMatrAcademiaController extends Controller
{
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades

    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use AjaxTrait;
    use CombosTrait;

    public function __construct()
    {
        $this->opciones['permisox'] = 'gestmaca';
        $this->opciones['routxxxx'] = 'gestmaca';
        $this->pestania[0][5]='active';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        // $this->getPestanias([]);
        // $this->getTablas();
        // $this->opciones['ruarchjs'][] = 
        //     ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js'];
        // return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);

        $dataxxxx = IMatriculaNnaj::select([
            // 'i_matricula_nnajs.id',
            // 'fi_datos_basicos.s_primer_nombre',
            // 'fi_datos_basicos.s_segundo_nombre',
            // 'fi_datos_basicos.s_primer_apellido',
            // 'fi_datos_basicos.s_segundo_apellido',
            // 'i_matriculas.fecha', 
            // 'sis_depens.nombre as upi', 
            // 'i_estado_ms.id as idesta',
            // 'asisema_matriculas.id as asistencia'
            DB::raw('(SELECT COUNT(*) FROM asissema_asistens WHERE asissema_asistens.asissema_matri_id = asisema_matriculas.id AND asissema_asistens.valor_asis = 0) AS inasistencia')
        ])

            ->leftJoin('asisema_matriculas', 'i_matricula_nnajs.id', '=', 'asisema_matriculas.matric_acade_id')
            ->join('sis_nnajs', 'i_matricula_nnajs.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->leftJoin('i_estado_ms', 'i_matricula_nnajs.id', '=', 'i_estado_ms.id')
            ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
            ->join('i_matriculas', 'i_matricula_nnajs.imatricula_id', '=', 'i_matriculas.id')
            ->join('sis_depens', 'i_matriculas.prm_upi_id', '=', 'sis_depens.id')
            ->join('sis_estas', 'i_matriculas.sis_esta_id', '=', 'sis_estas.id')
            ->where('i_matricula_nnajs.sis_esta_id', 1)
            ->get();
        dd( $dataxxxx);
    }


    public function create($modeloxx)
    {
        $this->getBotones(['crearxxx', [], 1, 'GUARDAR GESTIÓN MATRÍCULA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $modeloxx]);
    }
    public function store(IEstadoMatriculaCrearRequest $request,IMatricula $padrexx)
    {
        $request->request->add(['id' => $padrexx->id]);
        return $this->setImatriculaEstado([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Estado de matrícula creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }


    public function show(IEstadoMs $modeloxx)
    {
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'ver'],'padrexxx' => $modeloxx->id]);
    }


    public function edit(IEstadoMs $modeloxx)
    {
        $this->getBotones(['editarxx', [], 1, 'EDITAR ESTADO MATRÍCULA', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'],'padrexxx' => $modeloxx->id]);
    }


    public function update(IEstadoMatriculaCrearRequest $request,IEstadoMs $modeloxx)
    {
        return $this->setImatriculaEstado([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Estado de matrícula editada con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

}
