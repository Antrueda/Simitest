<?php

namespace App\Http\Controllers\Acciones\Individuales\Educacion\MatriculaCursos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\TrasladoRequest;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\sistema\SisNnaj;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCursos\CrudTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCursos\ParametrizarTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCursos\VistasTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\ListadosTrait;
use App\Traits\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCursos\PestaniasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MatriculaCursosController extends Controller
{
    use ListadosTrait; // trait que arma las consultas para las datatables
    use CrudTrait; // trait donde se hace el crud de localidades
    use ParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use VistasTrait; // trait que arma la logica para lo metodos: crud
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use CombosTrait; //

    private $padrexxx = null;
 

    public function __construct()
    {
        $this->opciones['permisox'] = 'matricurso';
        $this->opciones['routxxxx'] = 'matricurso';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SisNnaj $padrexxx)
    {
 
        $this->opciones['tablinde']=true;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getPrametros([$padrexxx->id]);
        
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas(['opciones'=>$this->opciones,'padrexxx' => $this->opciones['usuariox']->id])]);
    }

    public function getPrametros($dataxxxx)
    {
        $this->pestania['ai'][1]=$dataxxxx[0];
        $this->pestania['pruediag'][1]=$dataxxxx[0];
    }
    public function create(SisNnaj $padrexxx)
    {
        
        $this->padrexxx = $padrexxx;
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->opciones['padrexxx'] = $padrexxx;
        $this->opciones['tablinde']=false;
        $this->opciones['parametr']=$padrexxx;
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['crear', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']),
            ['modeloxx' => '', 'accionxx' => ['crear', 'formulario'],'padrexxx'=>$this->padrexxx->id]
        );
    }
    public function store(TrasladoRequest $request)
    {//

        $request->request->add(['sis_esta_id'=> 1]);
        return $this->setAgTraslado([
            'requestx' => $request,//
            'modeloxx' => '',
            'padrexxx' => $request,
            'infoxxxx' =>       'Traslado creado con éxito, por favor asignar NNAJ',
            'routxxxx' => 'traslannaj.nuevo'
        ]);
    }


    public function show(MatriculaCurso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $do=$this->getBotones(['crear', [$this->opciones['routxxxx'], [$modeloxx]], 2, 'CREAR NUEVO TRASLADO', 'btn btn-sm btn-primary']);
        return $this->view($do,
            ['modeloxx' => $modeloxx, 'accionxx' => ['ver', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function edit(MatriculaCurso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        $this->getBotones(['leer', [$this->opciones['routxxxx'], [$modeloxx->id]], 2, 'VOLVER A TRASLADO', 'btn btn-sm btn-primary']);
        $this->getBotones(['editar', [], 1, 'GUARDAR', 'btn btn-sm btn-primary']);
        return $this->view($this->getBotones(['crear', [$this->opciones['routxxxx'] . '.nuevo', [$modeloxx->id]], 2, 'CREAR NUEVO TRASLADO', 'btn btn-sm btn-primary'])
            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['editar', 'formulario'],'padrexxx'=>$modeloxx->id]
        );
    }


    public function update(TrasladoRequest $request,  MatriculaCurso $modeloxx)
    {

        return $this->setAgTraslado([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'padrexxx' => $modeloxx,
            'infoxxxx' => 'Traslado editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editar'
        ]);
    }

    public function inactivate(MatriculaCurso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['borrar', [], 1, 'INACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['destroy', 'destroy'],'padrexxx'=>$modeloxx->sis_nnaj]
        );
    }


    public function destroy(Request $request, MatriculaCurso $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado inactivado correctamente');
    }

    public function activate(MatriculaCurso $modeloxx)
    {
        $this->opciones['pestania'] = $this->getPestanias($this->opciones);
        return $this->view(
            $this->getBotones(['activarx', [], 1, 'ACTIVAR', 'btn btn-sm btn-primary'])            ,
            ['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'],'padrexxx'=>$modeloxx->sis_nnaj]
        );

    }

    public function activar(Request $request, MatriculaCurso $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->sis_nnaj_id])
            ->with('info', 'Traslado activado correctamente');
    }
}
