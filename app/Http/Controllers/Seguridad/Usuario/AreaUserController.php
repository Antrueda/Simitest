<?php

namespace App\Http\Controllers\Seguridad\Usuario;

use App\Http\Controllers\Controller;
use App\Http\Requests\AreaUserCrearRequest;
use App\Http\Requests\AreaUserEditarRequest;
use App\Models\Indicadores\Area;
use App\Models\Sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\SisAreaUsua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaUserController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => false, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'areausua',
            'parametr' => [],
            'rutacarp' => 'administracion.Usuario.',
            'tituloxx' => 'ÁREAS',
            'carpetax' => 'AreaUser',
            'slotxxxx' => 'areausua',
            'tablaxxx' => 'areasusuario',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
            'conperfi' => '', // indica si la vista va a tener perfil
            'usuariox' => [],

            'confirmx' => 'Desea inactivar el área: ',
            'reconfir' => 'Realmente desea inactivar el área: ',
            'msnxxxxx' => 'No se puedo inactivar el área',

        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'areausua';
        $this->opciones['routnuev'] = 'areausua';
        $this->opciones['routxxxx'] = 'areausua';

        $this->opciones['botoform'] = [
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
                'formhref' => 2, 'tituloxx' => 'VOLVER A AREAS', 'clasexxx' => 'btn btn-sm btn-primary'
            ],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $padrexxx)
    {
        $this->opciones['usuariox'] = $padrexxx;
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['tituhead'] = $padrexxx->nombre;
        $this->opciones['botoform'][0]['routingx'][1] = [$padrexxx->id];
        $this->opciones['padrexxx'] = '';
        $this->opciones['esindexx'] = true;
        $this->opciones['tablasxx'] = [
            [
                'titunuev' => 'ÁREA',
                'titulist' => 'LISTA DE ÁREAS',
                'dataxxxx' => [
                    ['campoxxx' => 'botonesx', 'dataxxxx' =>
                    $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.botones.botonesapi'],
                    ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components.botones.estadosx'],
                    ['campoxxx' => 'padrexxx', 'dataxxxx' => $padrexxx->id],
                    ['campoxxx' => 'pueditar', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-editar')],
                    ['campoxxx' => 'puedever', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-leer')],
                    ['campoxxx' => 'puedinac', 'dataxxxx' => auth()->user()->can($this->opciones['permisox'] . '-borrar')],
                    ['campoxxx' => 'routexxx', 'dataxxxx' => $this->opciones['routxxxx']],
                ],

                'accitabl' => true,
                'vercrear' => true,
                'urlxxxxx' => 'api/sis/areauser',
                'cabecera' => [
                    ['td' => 'ID'],
                    ['td' => 'ÁREA'],
                    ['td' => 'ESTADO'],
                ],
                'columnsx' => [
                    ['data' => 'botonexx', 'name' => 'botonexx'],
                    ['data' => 'id', 'name' => 'area_user.id'],
                    ['data' => 'nombre', 'name' => 'area.nombre'],
                    ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
                ],
                'tablaxxx' => $this->opciones['tablaxxx'],
                'permisox' => 'areausua',
                'routxxxx' => 'areausua',
                'parametr' => $this->opciones['botoform'][0]['routingx'][1],
            ]

        ];
        $this->opciones['accionxx'] = 'index';
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }

    private function view($dataxxxx)
    {
        $this->opciones['usuariox'] = $dataxxxx['padrexxx'];
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->name;
        $selectxx = 0;
        $this->opciones['userxxxx'] = [$dataxxxx['padrexxx']->id => $dataxxxx['padrexxx']->name];
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['botoform'][0]['routingx'][1] = [$dataxxxx['padrexxx']->id];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $selectxx = $dataxxxx['modeloxx']->sis_servicio_id;
            if (auth()->user()->can($this->opciones['permisox'] . '-crear')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'] . '.nuevo', [$dataxxxx['padrexxx']->id]],
                        'formhref' => 2, 'tituloxx' => 'IR A CREAR NUEVO REGISTRO', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
            }

            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }
        $this->opciones['areaxxxx'] = Area::getUsuarioAreas([
            'padrexxx' => $dataxxxx['padrexxx']->id,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'selectxx' => $selectxx
        ]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $padrexxx)
    {

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$padrexxx]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaUserCrearRequest $request)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => '',
            'menssage' => 'Registro creado con éxito'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SisAreaUsua $objetoxx)
    {
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Ver', 'padrexxx' => $objetoxx->user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SisAreaUsua $objetoxx)
    {
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];
        if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => 'EDITAR REGISTRO', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                    'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx->user]);
    }

    private function grabar($dataxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [SisAreaUsua::transaccion($dataxxxx['dataxxxx'], $dataxxxx['modeloxx'])->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaUserEditarRequest $request, SisAreaUsua $objetoxx)
    {
        return $this->grabar([
            'dataxxxx' => $request->all(),
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $flight = SisAreaUsua::where('id', $request->padrexxx)->first();
            $flight->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
            return response()->json(['messagex' => 'Se ha inactivado el área: ' . $flight->id]);
        }
    }
}
