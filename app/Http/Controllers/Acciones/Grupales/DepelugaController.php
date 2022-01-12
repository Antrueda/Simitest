<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Helpers\Traductor\Traductor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\DepelugaCrearRequest;
use App\Http\Requests\Sistema\DepelugaEditarRequest;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEslug;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepelugaController extends Controller
{
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'depeluga',
            'parametr' => [],
            'rutacarp' => 'administracion.Depelugas.',
            'tituloxx' => Traductor::getTitulo(34,1),
        ];

        $this->middleware(['permission:'
        . $this->opciones['permisox'] . '-leer|'
        . $this->opciones['permisox'] . '-crear|'
        . $this->opciones['permisox'] . '-editar|'
        . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'depeluga';
        $this->opciones['routnuev'] = 'depeluga';
        $this->opciones['routxxxx'] = 'depeluga';

        $this->opciones['botoform'] = [
            ['mostrars' => true, 'accionxx' => '', 'routingx' => [$this->opciones['routxxxx'], []],
            'formhref' => 2, 'tituloxx' => Traductor::getTitulo(30,1).' '.Traductor::getTitulo(32,1), 'clasexxx' => 'btn btn-sm btn-primary'],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['vercrear']='';
        $this->opciones['titulist'] = Traductor::getTitulo(32,1);
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'administracion/Depelugas/botones/botonesapi'],
            ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts/components/botones/estadoxx'],
        ];

        $this->opciones['urlxxxxx'] = 'api/agr/dependencias';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'DEPENDENCIA'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'sis_depens.id'],
            ['data' => 'nombre', 'name' => 'sis_depens.nombre'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],
        ];
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }


    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        $this->opciones['lugaresx'] = SisEslug::get();

        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        if ($nombobje != '') {
            $this->opciones[$nombobje] = $objetoxx;
        }

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($depeluga)
    {

        if(isset(SisDepen::where('id',$depeluga)->first()->id)){
            return redirect()
            ->route($this->opciones['routxxxx'] . '.editar',
            [$depeluga,$depeluga]);
        }



        $this->opciones['parametr'] = [$depeluga];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(true, '', 'CREAR', $this->opciones['rutacarp'] . 'crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($depeluga,DepelugaCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['depeluga']=$depeluga;
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SisDepen $objetoxx)
    {
        $this->opciones['parametr'] = [$objetoxx->id];

        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => $objetoxx->sis_esta_id == 1 ? 'INACTIVAR' : 'ACTIVAR', 'routingx' => [$this->opciones['routxxxx'], []], 'formhref' => 1,
                'tituloxx' => '', 'clasexxx' => $objetoxx->sis_esta_id == 1 ? 'btn btn-sm btn-danger' : 'btn btn-sm btn-success'
            ];
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'ver');
    }
private function getSeleccionados($objetoxx){
    $selected=[];
    foreach($objetoxx->sis_eslugs as $espaluga){
        $selected[]=$espaluga->id;
    }
    return $selected;
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($depeluga,SisDepen $objetoxx)
    {
        $objetoxx->lugaresx= $this->getSeleccionados($objetoxx);

        $this->opciones['parametr'] = [$depeluga,$objetoxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$depeluga]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view($objetoxx,  'modeloxx', 'EDITAR', $this->opciones['rutacarp'] . 'editar');
    }
    private function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $syncxxxx=[];
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx == '') {
                $objetoxx=SisDepen::where('id',$dataxxxx['depeluga'])->first();
            }

            foreach($dataxxxx['lugaresx'] as $lugaresx){
                $syncxxxx[]=[
                    'sis_eslug_id'=>(int)$lugaresx,'sis_esta_id'=>1,
                    'user_crea_id' => Auth::user()->id,
                    'user_edita_id' => Auth::user()->id];

            }
            $objetoxx->sis_eslugs()->detach();
            $objetoxx->sis_eslugs()->attach($syncxxxx);

            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar',
            [$dataxxxx['depeluga'],$this->transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($depeluga,DepelugaEditarRequest $request, SisDepen $objetoxx)
    {
        $dataxxxx = $request->all();
        $dataxxxx['depeluga']=$depeluga;
        return $this->grabar($dataxxxx, $objetoxx, 'Se guardo el lisado de Lugares con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SisDepen $objetoxx)
    {

        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';

        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
