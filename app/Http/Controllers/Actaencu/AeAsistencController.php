<?php

namespace App\Http\Controllers\Actaencu;

use App\Models\Actaencu\AeAsistencia;
use App\Http\Controllers\Controller;
use App\Http\Requests\Actaencu\AeAsistencCrearRequest;
use App\Http\Requests\Actaencu\AeAsistencEditarRequest;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Sistema\SisEntidad;
use App\Models\Temacombo;
use App\Models\User;
use App\Traits\Actaencu\ActaencuCrudTrait;
use App\Traits\Actaencu\ActaencuDataTablesTrait;
use App\Traits\Actaencu\ActaencuListadosTrait;
use App\Traits\Actaencu\ActaencuPestaniasTrait;
use App\Traits\Actaencu\Asistenc\AsistencParametrizarTrait;
use App\Traits\Actaencu\Asistenc\AsistencVistasTrait;
use App\Traits\Combos\CombosTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AeAsistencController extends Controller
{
    use AsistencParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use ActaencuPestaniasTrait; // trait que construye las pestañas que va a tener el modulo con respectiva logica
    use ActaencuListadosTrait; // trait que arma las consultas para las datatables
    use ActaencuCrudTrait; // trait donde se hace el crud de localidades
    use CombosTrait;
    use ActaencuDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use AsistencVistasTrait; // trait que arma la logica para lo metodos: crud

    public function __construct()
    {
        $this->opciones['permisox'] = 'asistenc';
        $this->opciones['routxxxx'] = 'asistenc';
        $this->pestania[1][4]=true;
        $this->pestania[2][5]='active';
        $this->pestania[2][4]=true;
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index(AeEncuentro $padrexxx)
    {
        $this->pestania[1][2]=[$padrexxx->id];
        $this->getPestanias([]);
        $this->getTablasAsistenciaADTT($padrexxx->id);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function create(AeEncuentro $padrexxx)
    {
        $this->opciones['parametr'][]=$padrexxx->id;
        $this->opciones['tpviapal'] = Temacombo::find(62)->parametros->pluck('nombre', 'id');
        $this->opciones['alfabeto'] = Temacombo::find(39)->parametros->pluck('nombre', 'id');
        $this->opciones['dircondi'] = Temacombo::find(23)->parametros->pluck('nombre', 'id');
        $this->opciones['cuadrant'] = Temacombo::find(38)->parametros->pluck('nombre', 'id');
        $this->opciones['funccont'] = User::whereIn('prm_tvinculacion_id', [1673, 1674])->pluck('name', 'id')->toArray();
        $this->opciones['responsa'] = User::select('users.name', 'users.id')
        ->join('sis_depen_user', 'sis_depen_user.user_id', 'users.id')
        ->where('sis_depen_user.sis_depen_id', $padrexxx->sis_depen_id)
        ->where('sis_depen_user.i_prm_responsable_id', 227)->pluck('name', 'id')->toArray();
        if (!$padrexxx->getVerCrearAttribute()) {
            return redirect()->route($this->opciones['routxxxx'], $padrexxx->id)->with(['infoxxxx' => 'Ha llegado al limite de contactos registrados (10)']);
        }
        $this->getBotones(['crearxxx', [$padrexxx->id], 1, 'GUARDAR CONTACTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $padrexxx]);
    }

    public function store(AeAsistencCrearRequest $request, AeEncuentro $padrexxx)
    {
        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['ae_encuentro_id' => $padrexxx->id]);

        return $this->setAeAsistencia([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Recurso creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);

        return redirect()->route($this->opciones['routxxxx'] . '.editarxx')->with(['infoxxxx' => 'Acta de encuentro creada con éxito']);
    }


    public function show(AeAsistencia $modeloxx)
    {
        $this->opciones['entidades'] = SisEntidad::pluck('nombre', 'id')->toArray();
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx'=>$modeloxx->actasEncuentro]);
    }


    public function edit(AeAsistencia $modeloxx)
    {
        $this->opciones['parametr'][]=$modeloxx->id;
        $this->opciones['tpviapal'] = Temacombo::find(62)->parametros->pluck('nombre', 'id');
        $this->opciones['alfabeto'] = Temacombo::find(39)->parametros->pluck('nombre', 'id');
        $this->opciones['dircondi'] = Temacombo::find(23)->parametros->pluck('nombre', 'id');
        $this->opciones['cuadrant'] = Temacombo::find(38)->parametros->pluck('nombre', 'id');
        $this->opciones['funccont'] = User::whereIn('prm_tvinculacion_id', [1673, 1674])->pluck('name', 'id')->toArray();
        $this->getBotones(['editarxx', [], 1, 'EDITAR CONTACTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'todoxxxx' => $this->opciones, 'padrexxx' => $modeloxx->actasEncuentro]);
    }


    public function update(AeAsistencEditarRequest $request,  AeAsistencia $modeloxx)
    {
        return $this->setAeAsistencia([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Recurso editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(AeAsistencia $modeloxx)
    {
        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR CONTACTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'],'padrexxx'=>$modeloxx->actasEncuentro]);
    }


    public function destroy(Request $request, AeAsistencia $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Acta de encuentro inactivada correctamente');
    }

    public function activate(AeAsistencia $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR CONTACTO', 'btn btn-sm btn-primary']);
        return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx'=>$modeloxx->actasEncuentro]);

    }

    public function activar(Request $request, AeAsistencia $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->ae_encuentro_id])
            ->with('info', 'Acta de encuentro activada correctamente');
    }
}
