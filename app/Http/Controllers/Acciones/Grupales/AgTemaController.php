<?php

namespace App\Http\Controllers\Acciones\Grupales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgTemaCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgTemaEditarRequest;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Indicadores\Administ\Area;
use App\Models\Sistema\SisEsta;
use App\Models\Usuario\Estusuario;
use App\Traits\Acciones\Grupales\ListadosTrait;

class AgTemaController extends Controller
{
    use ListadosTrait;
    private $opciones;
    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'TEMA',
            'rutacarp' => 'Acciones.Grupales.Agtema.',
            'rutaxxxx' => 'ag.tema.tema',
            'accionxx' => '',
            'volverax' => 'VOLVER A TEMAS',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agtema',
            'modeloxx' => '',
            'permisox' => 'agtema',
            'routxxxx' => 'ag.tema.tema',
            'routinde' => 'ag.tema',
            'parametr' => [],
            'urlxxxxx' => route('agtemasx.agtemasx'),
            'routnuev' => 'ag.tema.tema',
            'nuevoxxx' => 'NUEVO TEMA'
        ];
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'ÁREA'],
            ['td' => 'NOMBRE'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['dataxxxx'] = [
            ['campoxxx' => 'estadoxx', 'dataxxxx' => 'layouts.components/botones/estadoxx'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'ag_temas.id'],
            ['data' => 'nombre', 'name' => 'areas.nombre'],
            ['data' => 's_tema', 'name' => 'ag_temas.s_tema'],
            ['data' => 's_estado', 'name' => 'sis_estas.s_estado'],

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }


    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {
        
        $this->opciones['areasxxx'] = Area::combo_tema('', true, false);
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $accionxx;
        $this->opciones['motivoxx']= ['' => 'Seleccione'];
      
        // indica si se esta actualizando o viendo
        $estadoid = 0;
        if ($nombobje != '') {

            $this->opciones['indicado'] = Area::combo_tema($objetoxx->area_id, true, false);
          //  $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
             $estadoid= $objetoxx->sis_esta_id;
            $this->opciones[$nombobje] = $objetoxx;
        }
        $this->opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2504
        ]);

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'] . $vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('', '', 'GUARDAR', 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('ag.tema.tema.editar', [AgTema::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgTemaCrearRequest $request)
    {

        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AgTema $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', 'ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AgTema $objetoxx)
    {
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
        return $this->view($objetoxx,  'modeloxx', 'EDITAR', 'editar');
    }

    public function update(AgTemaEditarRequest $request, AgTema $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Tema actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgTema $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }

    public function getMotivos(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                Estusuario::combo([
                    'cabecera' => true,
                    'esajaxxx' => true,
                    'estadoid' => $request->estadoid,
                    'formular' => 2504])
            );
        }
    }
}
