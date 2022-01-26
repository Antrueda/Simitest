<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use App\Models\Roleext;
use Illuminate\Http\Request;
use App\Traits\Administracion\RolesTrait;

class RolpermisoController extends Controller
{
    use RolesTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 2, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'permirol',
            'parametr' => [],
            'rutacarp' => 'administracion.Roles.',
            'tituloxx' => 'PERMISOS ROL',
            'carpetax' => 'Permiso',
            'slotxxxx' => 'permirol',
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
            'conperfi' => '', // indica si la vista va a tener perfil
            'usuariox' => [],

            'rutaxxxx' => 'permirol',
            'routnuev' => 'permirol',
            'routxxxx' => 'permirol',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);



        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['permisox'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A ROLES', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }
    public function agregar(Request $request, Roleext $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->padrexxx = $padrexxx->id;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.agregar';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getPermisos($request);
        }
    }
    public function quitar(Request $request, Roleext $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->padrexxx = $padrexxx->id;
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.botones.quitar';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            return $this->getPermisosRol($request);
        }
    }
    public function index(Roleext $padrexxx)
    {
        $this->opciones['tituhead'] = 'ROL';
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['padrexxx'] = '';
        $this->opciones['indecrea'] = false;
        $this->opciones['esindexx'] = true;
        $this->opciones['rowscols'] = 'rowspancolspan';
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'CREAR ROL',
            'titulist' => 'LISTA DE PERMISOS ASIGNADOS',
            'dataxxxx' => [],
            'accitabl' => true,
            'vercrear' => FALSE,
            'urlxxxxx' => route($this->opciones['permisox'] . '.quitar', $this->opciones['parametr']),
            'cabecera' => [
                [
                    ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PERMISO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'MENU', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PESTAÑA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'DESCRIPCIÓN', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'permissions.id'],
                ['data' => 'name', 'name' => 'permissions.name'],
                ['data' => 's_menu', 'name' => 'sis_menus.s_menu'],
                ['data' => 'nombre', 'name' => 'sis_docfuens.nombre'],
                ['data' => 'titupest', 'name' => 'sis_pestanias.titupest'],
                ['data' => 'descripcion', 'name' => 'permissions.descripcion'],
            ],
            'tablaxxx' => 'datatable',
            'permisox' => 'permirol',
            'routxxxx' => 'permirol',
            'parametr' => $this->opciones['parametr'],
        ];
        $this->opciones['tablasxx'][] = [
            'titunuev' => 'CREAR ROL',
            'titulist' => 'LISTA DE PERMISOS PARA ASIGNAR',
            'dataxxxx' => [],
            'accitabl' => true,
            'vercrear' => FALSE,
            'urlxxxxx' => route($this->opciones['permisox'] . '.agregar', $this->opciones['parametr']),
            'cabecera' => [
                [
                    ['td' => 'ACCIONES', 'widthxxx' => 50, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'ID', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'PERMISO', 'widthxxx' => 0, 'rowspanx' => 1, 'colspanx' => 1],
                    // ['td' => 'MENU', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    // ['td' => 'DOCUMENTO', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    // ['td' => 'PESTAÑA', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                    ['td' => 'DESCRIPCIÓN', 'widthxxx' => '', 'rowspanx' => 1, 'colspanx' => 1],
                ],
            ],
            'columnsx' => [
                ['data' => 'botonexx', 'name' => 'botonexx'],
                ['data' => 'id', 'name' => 'permissions.id'],
                ['data' => 'name', 'name' => 'permissions.name'],
                // ['data' => 's_menu', 'name' => 'sis_menus.s_menu'],
                // ['data' => 'nombre', 'name' => 'sis_documento_fuentes.nombre'],
                // ['data' => 'titupest', 'name' => 'sis_pestanias.titupest'],
                ['data' => 'descripcion', 'name' => 'permissions.descripcion'],
            ],
            'tablaxxx' => 'datatable3',
            'permisox' => 'permirol',
            'routxxxx' => 'permirol',
            'parametr' => $this->opciones['parametr'],
        ];

        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Roleext $objetoxx)
    {
        if ($request->ajax()) {

            if ($request->checkedx == 1) {
                $objetoxx->givePermissionTo($request->valuexxx);
            } else {
                $objetoxx->revokePermissionTo($request->valuexxx);
            }

            return response()->json();
        }
    }
}
