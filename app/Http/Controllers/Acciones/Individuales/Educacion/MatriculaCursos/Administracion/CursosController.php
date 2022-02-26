<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\MatriculaCursos\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\CursosCrearRequest;
use App\Http\Requests\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\CursosEditarRequest;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\Curso\CrudTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\Curso\DataTablesTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\Curso\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\Curso\VistasTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\ListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\Administracion\PestaniasTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * FOS Tipo de seguimiento
 */
class CursosController extends Controller
{

    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    public function __construct()
    {
        $this->opciones['permisox'] = 'cursos';
        $this->opciones['routxxxx'] = 'cursos';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }


    public function create()
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR CURSO', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario']]
        );
    }
    public function store(CursosCrearRequest $request)
    {
        
        return $this->setCurso([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' =>       'Curso creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }


    public function show(Curso $modeloxx)
    {
        
         $this->opciones['pestania'] = $this->getPestanias($this->opciones);
         $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER CURSO', 'btn btn-sm btn-primary']);
         $this->getBotones(['editar', [], 1, 'EDITAR DOCUMENTO', 'btn btn-sm btn-primary']);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR CURSO', 'btn btn-sm btn-primary']);

        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>'']
        );
    }


    public function edit(Curso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A CURSO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'EDITAR TIPO SEGUMIENTO', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'CREAR CURSO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function update(CursosEditarRequest $request,  Curso $modeloxx)
    {
        return $this->setCurso([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Curso editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(Curso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR CURSO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function destroy(Request $request, Curso $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        $seguimix=CursoModulo::where('cursos_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Curso inactivado correctamente');
    }

    public function activate(Curso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR CURSO', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activar', 'activar'],'padrexxx'=>$modeloxx->id]
        );

    }
    public function activar(Request $request, Curso $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        $seguimix=CursoModulo::where('cursos_id',$modeloxx->id);
        $seguimix->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->id])
            ->with('info', 'Curso activado correctamente');
    }
}
