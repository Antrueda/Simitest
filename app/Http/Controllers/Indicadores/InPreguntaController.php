<?php

namespace App\Http\Controllers\Indicadores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InPreguntaCrearRequest;
use App\Http\Requests\Indicadores\InPreguntaEditarRequest;
use App\Models\Indicadores\InPregunta;
use App\Models\Sistema\SisTabla;

class InPreguntaController extends Controller
{
  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:inpreguntas-leer'], ['only' => ['index, show']]);
    $this->middleware(['permission:inpreguntas-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
    $this->middleware(['permission:inpreguntas-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
    $this->middleware(['permission:inpreguntas-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
    $this->opciones = [
      'tituloxx' => 'Pregunta Indicador',
      'rutaxxxx' => 'pr.preguntas',
      'rutacarp' => 'Indicadores.Admin.Preguntas.',
      'accionxx' => '',
      'volverax' => 'Preguntas Indicador',
      'readonly' => '', // esta opcion es para cundo está por la parte de ver
      'carpetax' => 'Preguntas',
      'modeloxx' => '',
      'permisox' => 'inpreguntas',
      'routxxxx' => 'pr.preguntas',
      'routinde' => 'pr',
      'parametr' => [],
      'urlxxxxx' => 'api/indicadores/preguntas',
      'routnuev' => 'pr.preguntas',
      'nuevoxxx' => 'Nuevo Registro'
    ];
    $this->opciones['cabecera'] = [
      ['td' => 'ID'],
      ['td' => 'PREGUNTA'],
      ['td' => 'ESTADO'],
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns', 'name' => 'btns'],
      ['data' => 'id', 'name' => 'id'],
      ['data' => 's_pregunta', 'name' => 's_pregunta'],
      ['data' => 'sis_esta_id', 'name' => 'sis_esta_id'],
    ];
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    return view($this->opciones['rutacarp'].'index', ['todoxxxx' => $this->opciones]);
  }
  private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
  {
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo
   
    $this->opciones['stablaxx'] = SisTabla::combo('', true, false);
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
  public function create()
  { 
    return $this->view(true, '', 'Crear', $this->opciones['rutacarp'].'crear');
  }


  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {

    return redirect()
      ->route('pr.preguntas.editar', [InPregunta::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(InPreguntaCrearRequest $request)
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
  public function show(InPregunta $objetoxx)
  {
    $this->opciones['readonly'] = 'readonly';
    return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'].'ver');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(InPregunta $objetoxx)
  {
    return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'].'editar');
  }

  public function update(InPreguntaEditarRequest $request, InPregunta $objetoxx)
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
  public function destroy(InPregunta $objetoxx)
  {
    $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
    $objetoxx->save();
    $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
    return redirect()->route('pr')->with('info', 'Registro ' . $activado . ' con éxito');
  }
}
