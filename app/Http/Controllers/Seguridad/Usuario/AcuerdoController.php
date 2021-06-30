<?php

namespace App\Http\Controllers\Seguridad\Usuario;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordEditarRequest;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisMunicipio;
use App\Models\User;
use App\Models\Usuario\RolUsuario;
use Illuminate\Support\Facades\Auth;

class AcuerdoController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => false, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'acuerdo',
            'parametr' => [],
            'rutacarp' => 'administracion.Usuario.',
            'tituloxx' => 'ACUERDO DE CONFIDENCIALIDAD',
            'carpetax' => 'Acuerdo',
            'slotxxxx' => 'acuerdo',
            'tablaxxx' => 'datatable',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
            'conperfi' => '', // indica si la vista va a tener perfil
            'usuariox' => [],

            'confirmx' => 'Desea inactivar el rol: ',
            'reconfir' => 'Realmente desea inactivar el rol: ',
            'msnxxxxx' => 'No se puedo inactivar el rol',
            'rutaxxxx' => 'acuerdo',
            'routnuev' => 'acuerdo',
            'routxxxx' => 'acuerdo',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
    }

    private function view($dataxxxx)
    {
        $this->opciones['fechfirm']=explode('-',date('Y-m-d'));
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $objetoxx)
    {

        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'ACEPTO ACUERDO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {

        User::polidato($dataxxxx['dataxxxx'], $dataxxxx['modeloxx'])->id;
        return  redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChangePasswordEditarRequest $request, User $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }
}
