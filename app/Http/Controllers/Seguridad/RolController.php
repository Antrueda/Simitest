<?php

namespace App\Http\Controllers\Seguridad;


use App\Http\Controllers\Controller;
use App\Http\Requests\RolCrearRequest;

use App\Http\Requests\RolUpdateRequests;
use App\Models\Permissionext;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class RolController extends Controller
{
  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:rol-leer'], ['only' => ['index, show']]);
    $this->middleware(['permission:rol-crear'], ['only' => ['index, show, create, store']]);
    $this->middleware(['permission:rol-editar'], ['only' => ['index, show, edit, update']]);
    $this->middleware(['permission:rol-borrar'], ['only' => ['index, show, destroy']]);
    $this->opciones = ['tituloxx' => '', 'rutaxxxx' => 'rol', 'vistaxxx' => 'rol', 'accionxx' => '', 'volverax' => 'Roles'];
  }
  protected function datos(array $request)
  {
    return Role::select('id', 'name', 'activo')
      ->when(request('buscar'), function ($q, $buscar) {
        return $q->where('name', 'like', '%' . $buscar . '%');
      })
      ->orderBy('name')->paginate(10);
  }
  public function index(Request $request)
  {
    $rolesxxx = $this->datos($request->all());
    $buscar = ($request->buscar) ? $request->buscar : '';
    $cabecera = [
      ['td' => 'Id'],
      ['td' => 'Nombre Rol'],
      ['td' => 'Estado'],
    ];
    foreach ($rolesxxx as $rolexxxx) {
      $regitabl[] =
        [
          'body' => [['td' => $rolexxxx->id], ['td' => $rolexxxx->name], ['td' => $rolexxxx->estado = 1 ? 'ACTIVO' : 'INACTIVO']],
          'id' => $rolexxxx->id,
          'estadoxx' => $rolexxxx->activo,
        ];
    }
    return view($this->opciones['rutaxxxx'] . '.index', [
      'buscarxx' => $buscar,
      'regitabl' => $regitabl, 'registro' => $rolesxxx,
      'cabecera' => $cabecera, 'opciones' => $this->opciones
    ]);
  }
  /*Es metodo sen encarga de armar la estructura para los metos create, edit y show*/
  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $objetoxx->estado = 1 ? 'ACTIVO' : 'INACTIVO';
      $this->opciones[$nombobje] = $objetoxx;
    }
    $this->opciones['apermiso'] = Permissionext::get();

    // Se arma el titulo de acuerdo al array opciones
    $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . ucfirst($this->opciones['rutaxxxx']);

    return view($this->opciones['rutaxxxx'] . '.' . strtolower($this->opciones['accionxx']), $this->opciones);
  }
  public function create()
  {
    return $this->view(true, '', 'Crear');
  }

  public function store(RolCrearRequest $request)
  {


    $role = Role::create([
      'name' => $request->all()['name'], 'guard_name' => 'web',
      'user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id, 'activo' => 1
    ])
      ->givePermissionTo($request->all()['permissions']);
    return redirect()->route($this->opciones['rutaxxxx'] . '.editar', $role->id)
      ->with('info', 'Rol guardado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Model\Roleext $role
   * @return \Illuminate\Http\Response
   */
  public function show(Role $role)
  {

    return $this->view($role, 'role', 'Ver');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Roleext  $role
   * @return \Illuminate\Http\Response
   */
  public function edit(Role $role)
  {
    return $this->view($role, 'role', 'Editar');
  }

 
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Roleext  $role
   * @return \Illuminate\Http\Response
   */
  public function update(RolUpdateRequests $request, Role $role)
  {
    //dd($request->all()['permissions']);
    // Actualizar el rol 
    $role->update(['name' => $request->all()['name']]);
    //$role->revokePermissionTo($permission);
    $role->syncPermissions($request->all()['permissions']);
    return redirect()->route($this->opciones['rutaxxxx'] . '.editar', $role->id)
      ->with('info', 'Rol actualizado con exito');
  }

  public function destroy($id)
  {
    echo $id;
  }
}
