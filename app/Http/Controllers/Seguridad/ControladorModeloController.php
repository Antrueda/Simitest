<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\RolCrearRequest;
use App\Http\Requests\RolUpdateRequest;

class ControladorModeloController extends Controller
{

  private $opciones;

  public function __construct()
  {
    $this->middleware(['permission:permiso-leer'], ['only' => ['index, show']]);
    $this->middleware(['permission:permiso-crear'], ['only' => ['index, show, create, store']]);
    $this->middleware(['permission:permiso-editar'], ['only' => ['index, show, edit, update']]);
    $this->middleware(['permission:permiso-borrar'], ['only' => ['index, show, destroy']]);
    $this->opciones = [
      'tituloxx' => '',
      'rutaxxxx' => 'rol',
      'vistaxxx' => 'rol',
      'accionxx' => '',
      'volverax' => 'Roles',
      'readonly' => ''
    ];
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
          'body' => [
            ['td' => $rolexxxx->id],
            ['td' => $rolexxxx->name],
          ],
          'id' => $rolexxxx->id,
          'estadoxx' => $rolexxxx->estado
        ];
    }

    return view($this->opciones['rutaxxxx'] . '.index', ['buscarxx'=>$buscar,'regitabl' => $regitabl, 'registro' => $rolesxxx, 'cabecera' => $cabecera, 'opciones' => $this->opciones]);
  }

  /**
   * Es metodo sen encarga de armar la estructura para los metos create, edit y show
   * 
   */
  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones['estadoxx'] = $objetoxx->estado = 1 ? 'ACTIVO' : 'INACTIVO';
      //SABER QUIEN FUE EL QUE CREO
      $objetoxx->user_crea_id = SisUsuarioBitacora::usregisro($objetoxx->creador);
      //SABER QUIEN FUE EL QUE EDITO
      $objetoxx->user_edita_id = SisUsuarioBitacora::usregisro($objetoxx->editor);
      $this->opciones[$nombobje] = $objetoxx;
    }

    $this->opciones['apermiso'] = Permission::get();
    // Se arma el titulo de acuerdo al array opciones
    $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . ucfirst($this->opciones['rutaxxxx']);

    return view($this->opciones['vistaxxx'] . '.' . strtolower($this->opciones['accionxx']), $this->opciones);
  }

  public function create()
  {

    return $this->view(true, '', 'Crear');
  }

  public function store(RolCrearRequest $request)
  {

    $role = Role::create(['name' => $request->all()['name']])->givePermissionTo($request->all()['permissions']);

    return redirect()->route($this->opciones['rutaxxxx'] . '.editar', $role->id)
      ->with('info', 'Rol guardado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Model\Role $role
   * @return \Illuminate\Http\Response
   */
  public function show(Role $role)
  {
    $this->opciones['readonly'] = 'readonly';
    return $this->view($role, 'role', 'Ver');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Role  $role
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
   * @param  \App\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function update(RolUpdateRequest $request, Role $role)
  {

    // Actualizar el rol    
    $role->update($request->all());
    $role->givePermissionTo($request->all()['permissions']);

    return redirect()->route($this->opciones['rutaxxxx'] . '.editar', $role->id)
      ->with('info', 'Rol actualizado con exito');
  }

  public function destroy($id)
  {
    echo $id;
  }

  protected function datos(array $request)
  {
    return Role::select('id', 'name', 'activo')
      ->when(request('buscar'), function ($q, $buscar) {
        return $q->where('name', 'like', '%' . $buscar . '%');
      })
      ->orderBy('name')->paginate(10);
  }
}
