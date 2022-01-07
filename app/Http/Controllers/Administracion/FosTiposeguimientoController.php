<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaObservacion\FosTseCrearRequest;
use App\Http\Requests\FichaObservacion\FosTseEditarRequest;
use App\Models\fichaobservacion\FosTse;
use App\Models\Indicadores\Administ\Area;
use App\Models\Usuario\Estusuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FosTiposeguimientoController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones = [
            'permisox' => 'fostipo',
            'parametr' => [],
            'rutacarp' => 'FichaObservacion.Admin.TipoSeguimiento.',
            'tituloxx' => 'Tipo Seguimiento',
        ];



        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['readonly'] = '';
        $this->opciones['rutaxxxx'] = 'fostipo';
        $this->opciones['routnuev'] = 'fostipo';
        $this->opciones['routxxxx'] = 'fostipo';
        $this->opciones['fechcrea'] =  '';
        $this->opciones['fechedit'] =  '';
        $this->opciones['usercrea'] =  '';
        $this->opciones['useredit'] =  '';

        $this->opciones['botoform'] = [
            ['mostrars' => true, 'accionxx' => 'Editar', 'routingx' => [$this->opciones['routxxxx'], []], 'formhref' => 2, 'tituloxx' => 'Volver a Tipo Seguimiento','clasexxx'=>'btn btn-sm btn-primary'],
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->opciones['titunuev'] = 'Nuevo Tipo de Seguimiento';
        $this->opciones['titulist'] = 'Lista de Tipos de Seguimiento';
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'botonesx', 'dataxxxx' => 'FichaObservacion/Admin/TipoSeguimiento/botones/botonesapi'],

        ];

        $this->opciones['urlxxxxx'] = 'api/fos/tiposeg';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'NOMBRE'],
            ['td' => 'ÁREA'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'fos_tses.id'],
            ['data' => 'nombre', 'name' => 'fos_tses.nombre'],
            ['data' => 's_area', 'name' => 'areas.nombre as s_area'],
            ['data' => 'sis_esta_id', 'name' => 'fos_tses.sis_esta_id as activo'],
        ];
        return view($this->opciones['rutacarp'].'index', ['todoxxxx' => $this->opciones]);
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['fosareas'] = $areas = Area::orderBy('nombre')->where('sis_esta_id', '1')->pluck('nombre', 'id');
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        $this->opciones['modeloxz'] ='';
        $estadoid=0;
        
        // indica si se esta actualizando o viendo
        $this->opciones['nivelxxx'] = '';
        if ($nombobje != '') {
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['modeloxz'] = $nombobje;
            
        }
        $this->opciones['motivozx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $this->opciones['estadoxx'] == 'ACTIVO' ? $this->opciones['estadoxx'] == 'ACTIVO' : $estadoid,
            'formular' => 2480
        ]);

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->opciones['botoform'][] =
            ['mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'].'.editar', []],
            'formhref' => 1, 'tituloxx' => '','clasexxx'=>'btn btn-sm btn-primary'];
        return $this->view(true, '', 'Crear',$this->opciones['rutacarp'] . 'crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FosTseCrearRequest $request)
    {
        $dataxxxx = $request->all();
        $dataxxxx['sis_esta_id'] = 1;
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FosTse $objetoxx)
    {

        $this->opciones['botoform'][] =
            ['mostrars' => true, 'accionxx' => $objetoxx->sis_esta_id == 1 ? 'INACTIVAR' : 'ACTIVAR', 'routingx' => [$this->opciones['routxxxx'], []], 'formhref' => 1,
            'tituloxx' => '','clasexxx'=>$objetoxx->sis_esta_id == 1 ? 'btn btn-sm btn-danger' : 'btn btn-sm btn-success'];
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FosTse $objetoxx)
    {
        $this->opciones['botoform'][] =
            ['mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'].'.editar', []],
            'formhref' => 1, 'tituloxx' => '','clasexxx'=>'btn btn-sm btn-primary'];
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar');
    }
    private function transaccion($dataxxxx,  $objetoxx)
    {
      $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        $dataxxxx['sis_esta_id'] = 1;
        if ($objetoxx != '') {
          $objetoxx->update($dataxxxx);
        } else {
          $dataxxxx['user_crea_id'] = Auth::user()->id;
          $objetoxx = FosTse::create($dataxxxx);
        }
        return $objetoxx;
      }, 5);
      return $usuariox;
    }
    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        return redirect()
            ->route($this->opciones['routxxxx'].'.editar', [$this->transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FosTseEditarRequest $request, FosTse $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Linea base del NNAJ actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FosTse $objetoxx)
    {

        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';

        return redirect()->route($this->opciones['routxxxx'])->with('info', 'Registro '.$activado. ' con éxito');
    }

}
