<?php

namespace App\Http\Controllers\Seguridad;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

use App\Http\Requests\Seguridad\UsuarioIdipronCrearRequest as UsuarioIdipronc;
use App\Http\Requests\Seguridad\UsuarioIdipronEditarRequest as UsuarioIdiprone;
use App\Http\Requests\Seguridad\UsuarioPasswordEditarRequest as UsuarioPassword;
use App\Models\Roleext;
use App\Models\sistema\SisCargo;
use App\Models\sistema\SisDepartamento;
use App\Models\sistema\SisDependencia;
use App\Models\sistema\SisMunicipio;
use App\Models\Tema;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Realiaza el crud para las tablas users, sis_usuario_bitacoras y sis_documento_usrs
 */
class UsuarioController extends Controller
{
    private $_usuario;
    private $opciones;
    public function __construct()
    {
        $this->middleware(['permission:usuario-leer'], ['only' => ['index, show']]);
        $this->middleware(['permission:usuario-crear'], ['only' => ['index, show, create, store']]);
        $this->middleware(['permission:usuario-editar'], ['only' => ['index, show, edit, update']]);
        $this->middleware(['permission:usuario-borrar'], ['only' => ['index, show, destroy']]);
        $this->opciones = [
            'tituloxx' => '',
            'rutaxxxx' => 'usuario',
            'vistaxxx' => 'administracion.usuario',
            'rutacarp' => 'administracion.usuario.',
            'accionxx' => '',
            'nuevoreg' => 'Nuevo Usuario',
            'urlxxxxx' => 'api/usu/usuarios',
            'routxxxx' => 'usuario',
            'permisox' => 'usuario',
            'volverax' => 'Volver a Usuarios',
            'readonly' => '',
            'activida' => '1'
        ];
        $this->_usuario = new User();
    }

    public function index(Request $request)
    {

        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'PRIMER NOMBRE'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'PRIMER APELLIDO'],
            ['td' => 'SEGUNDO APELLIDO'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'id'],
            ['data' => 's_primer_nombre', 'name' => 's_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 's_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 's_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 's_segundo_apellido'],
            ['data' => 'i_prm_estado_id', 'name' => 'i_prm_estado_id'],

        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }
    /*Es metodo sen encarga de armar la estructura para los metos create, edit y show*/
    private function view($objetoxx, $nombobje, $accionxx)
    {
        $this->opciones['accionxx'] = $accionxx;

        //
        $this->opciones['i_prm_estado_id'] = Tema::combo(303, true, false);
        $this->opciones['sis_cargo_id'] = SisCargo::combo();
        $this->opciones['prm_documento_id'] = Tema::combo(3, true, false);
        $this->opciones['prm_tvinculacion_id'] = Tema::combo(310, true, false);
        $this->opciones['prm_tdependencia_id'] = Tema::combo(3, true, false);
        $this->opciones['sis_dependencia_id'] = SisDependencia::combo('', true, false);
        $this->opciones['sis_departamento_id'] = SisDepartamento::combo(2, false);
        // indica si se esta actualizando o viendo
        $this->opciones['registro'] = [];
        $this->opciones['sis_municipio_id'] = ['' => 'Seleccione'];
        if ($nombobje != '') {
            $objetoxx->d_carga=explode(' ',Carbon::now()->subDays($objetoxx->i_tiempo))[0] ;
            $this->opciones['sis_municipio_id'] = SisMunicipio::combo($objetoxx->sis_departamentoexp_id, false);
            $objetoxx->sis_departamento_id = $objetoxx->sis_municipio->sis_departamento_id;
            $this->opciones[$nombobje] = $objetoxx;
        }
        $this->opciones['totalxxx'] = Roleext::paginate(5);
        $this->opciones['caberolx'] = [
            ['td' => 'Id'],
            ['td' => 'Nombre Rol'],
            ['td' => 'Estado'],
        ];
        $regitabl = [];
        foreach ($this->opciones['totalxxx'] as $rolexxxx) {
            $regitabl[] =
                [
                    'body' => [['td' => $rolexxxx->id], ['td' => $rolexxxx->name], ['td' => $rolexxxx->activo = 1 ? 'ACTIVO' : 'INACTIVO']],
                    'id' => $rolexxxx->id
                ];
        }
        $this->opciones['detarolx'] = $regitabl;
        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . ucfirst($this->opciones['rutaxxxx']);
        return view($this->opciones['rutacarp']  . strtolower($this->opciones['accionxx']), ['todoxxxx' => $this->opciones]);
    }
    public function create()
    {
        $this->opciones['estadoxx'] = 'ACTIVO';
        return $this->view('', '', 'Crear');
    }
    private function transaccion($dataxxxx, $editcrea, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $editcrea, $objetoxx) {
            $usuariox = $this->_usuario->grabar($dataxxxx, $objetoxx);
            return $usuariox;
        }, 5);
        return $usuariox;
    }
    public function store(UsuarioIdipronc $request)
    {
        $dataxxxx = $request->all();
        $usuariox = $this->transaccion($dataxxxx, false, '');
        return redirect()->route($this->opciones['rutaxxxx'] . '.editar', $usuariox->id)
            ->with('info', 'Usuario guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\User $role
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        $this->opciones['rolesxxx'] = Role::get();
        $this->opciones['readonly'] = 'readonly';
        return $this->view($usuario, 'modeloxx', 'Ver');
    }
    private function roles($usuariox)
    {
        $rolesxxx = [];
        $permissions = $usuariox->getRoleNames();
        foreach ($permissions as $rolexxxx) {
            $rolesxxx[] = $rolexxxx;
        }
        return Role::whereNotIn('name', $rolesxxx)->get();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        // dd($usuario);
        $this->opciones['rolesxxx'] = $this->roles($usuario);
        $this->opciones['dependen'] = User::dependencia($usuario->id);
        $this->opciones['estadoxx'] = $usuario->activo = 1 ? 'ACTIVO' : 'INACTIVO';
        return $this->view($usuario, 'modeloxx', 'Editar');
    }

    public function editpassword(User $usuario)
    {
        $this->opciones['password'] = '';

        return $this->view($usuario, 'modeloxx', 'Editar');
    }

    public function updatepassword(UsuarioPassword $request, User $usuario)
    {
        $dataxxxx = $request->all();
        $this->opciones['password'] = '';
        $usuariox = User::transaccion($dataxxxx, $usuario);

        return redirect()->route($this->opciones['rutaxxxx'] . '.password', $usuariox->id)
            ->with('info', 'Contraseña actualizada con exito');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioIdiprone $request, User $usuario)
    {
        $dataxxxx = $request->all();
        $dataxxxx['usuariox'] = $usuario;
        $usuariox = $this->transaccion($dataxxxx, true, $usuario);

        return redirect()->route($this->opciones['rutaxxxx'] . '.editar', $usuariox->id)
            ->with('info', 'Rol actualizado con exito');
    }

    public function destroy($id)
    {
        echo $id;
    }

    public function municipioajax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            return response()->json(SisMunicipio::combo($request->all()['departam'], true));
        }
    }
    public function rolesajax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $objetoxx = User::where('id', $dataxxxx['usuariox'])->first();
            $rolesxxx = [];
            $permissions = $objetoxx->getRoleNames();
            foreach ($permissions as $rolexxxx) {
                $rolesxxx[] = $rolexxxx;
            }
            return datatables()
                ->eloquent(Role::query()->whereIn('name', $rolesxxx))
                ->addColumn('btn', 'actions')
                ->rawColumns(['btn'])
                ->toJson();
        }
    }

    public function asignaRolesAjax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            // se asigna el rol
            $rolusuar = $this->rolesUsuario($dataxxxx);
            $rolusuar['usuariox']->assignRole([$rolusuar['rolexxxx']->id]);
            return response()->json($this->roles($rolusuar['usuariox']));
        }
    }
    private function rolesUsuario($dataxxxx)
    {
        return  [
            'usuariox' => User::where('id', $dataxxxx['usuariox'])->first(),
            'rolexxxx' => Role::where('id', $dataxxxx['rolexxxx'])->first()
        ];
    }
    public function elinarRolAjax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $dataxxxx['rolexxxx'] = explode('_', $dataxxxx['rolexxxx'])[1];
            $rolusuar = $this->rolesUsuario($dataxxxx);
            $rolusuar['usuariox']->removeRole($rolusuar['rolexxxx']->name);
            return response()->json($this->roles($rolusuar['usuariox']));
        }
    }

    public function asignadasAjax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();

            return datatables()
                ->collection(User::where('id', $dataxxxx['usuariox'])->first()->sis_dependencias)
                ->addColumn('btn', 'actions')
                ->rawColumns(['btn'])
                ->toJson();
        }
    }
    public function asignaDependenciaAjax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            // se asigna el rol
            $dato = User::findOrFail($dataxxxx['usuariox']);
            $dato->sis_dependencias()->attach([$dataxxxx['dependen'] => ['activo' => 1, 'user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]]);
            return response()->json(User::dependencia($dato->id));
        }
    }
    public function elinarDependenciaAjax(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            $dataxxxx = $request->all();
            $dato = User::findOrFail($dataxxxx['usuariox']);
            $dato->sis_dependencias()->detach(explode('_', $dataxxxx['dependen'])[1]);
            return response()->json(User::dependencia($dato->id));
        }
    }
    protected function datos(array $request)
    {
        return User::select('id', 'name', 'activo')
            ->when(request('buscar'), function ($q, $buscar) {
                return $q->where('name', 'like', '%' . $buscar . '%');
            })
            ->orderBy('name')->paginate(10);
    }

    public function tiempocarga(\Illuminate\Http\Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                ['tiemcarg' => IndicadorHelper::getDiasEntreFecha($request->all()['fechaxxx'], date('Y-m-d', time()))]
            );
        }
    }
}
