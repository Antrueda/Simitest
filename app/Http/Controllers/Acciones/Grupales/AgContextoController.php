<?php

namespace App\Http\Controllers\Acciones\Grupales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acciones\Grupales\AgContextoCrearRequest;
use App\Http\Requests\Acciones\Grupales\AgContextoEditarRequest;
use App\Models\Acciones\Grupales\AgContexto;
use App\Models\Sistema\SisEsta;
use App\Models\Usuario\Estusuario;
use Illuminate\Http\Request;

class AgContextoController extends Controller
{
    private $opciones;
    public function __construct()
    {
        $this->opciones['permisox']='agcontexto';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
        $this->opciones = [
            'tituloxx' => 'CONTEXTO',
            'rutaxxxx' => 'agcontexto',

            'accionxx' => '',
            'rutacarp'=>'Acciones.Grupales.Agcontexto.',
            'volverax' => 'VOLVER A CONTEXTO',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Agcontexto',
            'modeloxx' => '',
            'permisox' => 'agcontexto',
            'routxxxx' => 'agcontexto',
            'routinde' => 'agcontexto',
            'parametr' => [],
            'urlxxxxx' => 'api/ag/contextos',
            'routnuev' => 'agcontexto',
            'nuevoxxx' => 'Nuevo Registro'
        ];
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'CONTEXTO'],
            ['td' => 'DESCRIPCIÓN'],

            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns','name' => 'btns'],
            ['data' => 'id','name' => 'id'],
            ['data' => 's_contexto','name' => 's_contexto'],
            ['data' => 's_descripcion','name' => 's_descripcion'],
            ['data' => 'sis_esta_id','name' => 'sis_esta_id'],

        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->opciones['rutacarp'] .'index', ['todoxxxx' => $this->opciones]);
    }


    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
    {

        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => true, 'esajaxxx' => false]);
        // indica si se esta actualizando o viendo
        $estadoid = 0;
        if ($nombobje != '') {
           // $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
            $this->opciones[$nombobje] = $objetoxx;
            $estadoid= $objetoxx->sis_esta_id;
        }
        $this->opciones['motivoxx'] = Estusuario::combo([
            'cabecera' => true,
            'esajaxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2499
        ]);

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['tituloxx'];
        return view($this->opciones['rutacarp'].$vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('', '', 'Crear', 'crear');
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {

        return redirect()
            ->route('agcontexto.editar', [AgContexto::transaccion($dataxxxx, $objectx)->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgContextoCrearRequest $request)
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
    public function show(AgContexto $objetoxx)
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
    public function edit(AgContexto $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', 'editar');
    }

    public function update(AgContextoEditarRequest $request, AgContexto $objetoxx)
    {
        $dataxxxx = $request->all();
        return $this->grabar($dataxxxx, $objetoxx, 'Indicador actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgContexto $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('li')->with('info', 'Registro ' . $activado . ' con éxito');
    }
}
