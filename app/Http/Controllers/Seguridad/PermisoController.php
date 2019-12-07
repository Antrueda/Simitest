<?php

namespace App\Http\Controllers\Seguridad;


use App\Http\Controllers\Controller;
use App\Models\Permissionext;
use App\Http\Requests\Seguridad\PermisoCrearRequest;
use App\Http\Requests\Seguridad\PermisoUpdateRequest;
use Illuminate\Http\Request;
class PermisoController extends Controller
{

  private $opciones;

  public function __construct()
  {
    $this->middleware(['permission:permiso-leer'], ['only' => ['index, show']]);
    $this->middleware(['permission:permiso-crear'], ['only' => ['index, show, create, store']]);
    $this->middleware(['permission:permiso-editar'], ['only' => ['index, show, edit, update']]);
    $this->middleware(['permission:permiso-borrar'], ['only' => ['index, show, destroy']]);
    $this->opciones = ['tituloxx' => '', 'rutaxxxx' => 'permiso', 'vistaxxx' => 'permiso', 'accionxx' => '', 'volverax' => 'Permisos'];
  }
  protected function datos(array $request)
  {
    return Permissionext::select('id', 'name', 'activo')
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
      ['td' => 'Nombre Permiso'],
      ['td' => 'Estado'],
    ];
    $regitabl=[];
    foreach ($rolesxxx as $rolexxxx) {
      $regitabl[] = [
        'body' => [
          ['td' => $rolexxxx->id],
          ['td' => $rolexxxx->name],
          ['td' => $rolexxxx->estado = 1 ? 'ACTIVO' : 'INACTIVO']
        ],
        'id' => $rolexxxx->id,
        'estadoxx' => $rolexxxx->activo,
      ];
    }

    return view(
      $this->opciones['rutaxxxx'] . '.index',
      [
        'buscarxx' => $buscar,
        'regitabl' => $regitabl,
        'registro' => $rolesxxx,
        'cabecera' => $cabecera,
        'opciones' => $this->opciones
      ]
    );
  }

  /**
   * 
   * Es metodo sen encarga de armar la estructura para los metos create, edit y show
   * 
   */
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

  public function store(PermisoCrearRequest $request)
  {

    $permisox = Permissionext::create(['name' => $request->all()['name']]);

    return redirect()->route($this->opciones['rutaxxxx'] . '.editar', $permisox->id)
      ->with('info', 'Rol guardado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Model\Permissionext $role
   * @return \Illuminate\Http\Response
   */
  public function show(Permissionext $permiso)
  {

    return $this->view($permiso, 'role', 'Ver');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Permissionext  $role
   * @return \Illuminate\Http\Response
   */
  public function edit(Permissionext $permiso)
  {

    return $this->view($permiso, 'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Permissionext  $permiso
   * @return \Illuminate\Http\Response
   */
  public function update(PermisoUpdateRequest $request, Permissionext $permiso)
  {
    // Actualizar el rol    
    $permiso->update($request->all());

    return redirect()->route($this->opciones['rutaxxxx'] . '.editar', $permiso->id)
      ->with('info', 'Permiso actualizado con exito');
  }

  public function destroy($id)
  {

    echo $id;
  }
}
