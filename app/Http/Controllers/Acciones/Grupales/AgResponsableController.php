<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Helpers\Traductor\Traductor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgResponsableCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgResponsableEditarRequest;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Sistema\SisObse;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgResponsableController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'agactividad',
            'parametr' => [],
            'rutacarp' => 'Acciones.Grupales.Agactividad.Responsable.',
            'tituloxx' => Traductor::getTitulo(36, 1),
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'respo';
        $this->opciones['routnuev'] = 'respo';
        $this->opciones['routxxxx'] = 'respo';
    }



    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['observac'] = SisObse::combo(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['condicio'] = Tema::combo(338, true, false);
        $this->opciones['responsa'] = User::comboResponsables([
            'cabecera' => true,
            'ajaxxxxx' => false, 'objetoxx' => $objetoxx, 'activida' => $this->opciones['parametr'][0]
        ]);

        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
        }
        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($activida)
    {
        $this->opciones['iformula'] = 1;
        $responsa = AgResponsable::where('ag_actividad_id', $activida)->get();
        if (count($responsa) == 3) {
            return redirect()
                ->route('ag.acti.actividad.editar', [$activida])
                ->with('info', 'La actividad ya tiene 3 responsables o acompañantes');
        }

        $this->opciones['parametr'] = [$activida];
        $this->botones(['activida'=>$activida,'nuevoxxx'=>false]);


        return $this->view(true, '', 'CREAR', $this->opciones['rutacarp'] . 'crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($activida, AgResponsableCrearRequest $request)
    {
        $this->opciones['parametr'] = [$activida];
        $dataxxxx = $request->all();
        $dataxxxx['ag_actividad_id'] = $activida;
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($activida, AgResponsable $objetoxx)
    {
        $this->opciones['iformula'] = 1;
        $this->opciones['parametr'] = [$activida, $objetoxx->id];
        $this->botones(['activida'=>$activida,'nuevoxxx'=>true]);
        return $this->view($objetoxx,  'modeloxx', 'EDITAR', $this->opciones['rutacarp'] . 'editar');
    }
    private function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = AgResponsable::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['ag_actividad_id'], $this->transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($activida, AgResponsableEditarRequest $request, AgResponsable $objetoxx)
    {
        $this->opciones['parametr'] = [$activida, $objetoxx->id];
        $dataxxxx = $request->all();
        $dataxxxx['ag_actividad_id'] = $activida;
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }
    private function botones($dataxxxx)
    {
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$dataxxxx['activida']]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $responsa = AgResponsable::where('ag_actividad_id', $dataxxxx['activida'])->get();
        if (count($responsa) < 3 && $dataxxxx['nuevoxxx']) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => '', 'routingx' => ['respo.nuevo', [$dataxxxx['activida']]],
                    'formhref' => 2, 'tituloxx' => Traductor::getTitulo(38, 1), 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['ag.acti.actividad.editar', [$dataxxxx['activida']]],
                'formhref' => 2, 'tituloxx' => 'VOLVER A ' . Traductor::getTitulo(37, 1), 'clasexxx' => 'btn btn-sm btn-primary'
            ];
    }
    public function editInactivar($activida, AgResponsable $objetoxx)
    {
        $this->opciones['iformula'] = 2;
        $this->opciones['parametr'] = [$activida, $objetoxx->id];
        $this->botones(['activida'=>$activida,'nuevoxxx'=>true]);
        return $this->view($objetoxx,  'modeloxx', 'INACTIVAR', $this->opciones['rutacarp'] . 'inactivar');
    }

    public function updateInctivar($activida, AgResponsableEditarRequest $request, AgResponsable $objetoxx)
    {
        $this->opciones['parametr'] = [$activida, $objetoxx->id];
        $dataxxxx = $request->all();
        $dataxxxx['ag_actividad_id'] = $activida;
        return $this->grabar($dataxxxx, $objetoxx, 'Registro actualizado con éxito');
    }

    public function show($activida, AgResponsable $objetoxx)
    {
        $this->opciones['iformula'] = 1;
        $this->opciones['parametr'] = [$activida, $objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'EDITAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$activida]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        $responsa = AgResponsable::where('ag_actividad_id', $activida)->get();
        if (count($responsa) < 3) {
            $this->opciones['botoform'][] =
                [
                    'mostrars' => true, 'accionxx' => '', 'routingx' => ['respo.nuevo', [$activida]],
                    'formhref' => 2, 'tituloxx' => Traductor::getTitulo(38, 1), 'clasexxx' => 'btn btn-sm btn-primary'
                ];
        }
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => '', 'routingx' => ['ag.acti.actividad.editar', [$activida]],
                'formhref' => 2, 'tituloxx' => 'VOLVER A ' . Traductor::getTitulo(37, 1), 'clasexxx' => 'btn btn-sm btn-primary'
            ];

        return $this->view($objetoxx,  'modeloxx', 'VER', 'ver');
    }
}
