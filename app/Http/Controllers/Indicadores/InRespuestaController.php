<?php

namespace App\Http\Controllers\Indicadores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InPreguntaCrearRequest;
use App\Http\Requests\Indicadores\InPreguntaEditarRequest;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InPregunta;


class InRespuestaController extends Controller
{
  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:inrespuesta-leer'], ['only' => ['index, show']]);
    $this->middleware(['permission:inrespuesta-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
    $this->middleware(['permission:inrespuesta-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
    $this->middleware(['permission:inrespuesta-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
    $this->opciones = [
      'tituloxx' => 'Respuestas Pregunta',
      'rutaxxxx' => 're.respuesta',
      'rutacarp' => 'Indicadores.Admin.Respuesta.',
      'accionxx' => '',
      'volverax' => 'Volver a Respuestas Pregunta',
      'readonly' => '', // esta opcion es para cundo está por la parte de ver
      'carpetax' => 'Respuesta',
      'modeloxx' => '',
      'permisox' => 'inrespuesta',
      'routxxxx' => 're.respuesta',
      'routinde' => 're',
      'parametr' => [],
      'urlxxxxx' => 'api/indicadores/respuestas',
      'routnuev' => 're.respuesta',
      'nuevoxxx' => 'Nuevo Registro'
    ];
    $this->opciones['cabecera'] = [
      ['td' => 'ID'],
      ['td' => 'INDICADOR'],
      ['td' => 'LÍNEA BASE'],
      ['td' => 'DOCUMENTO'],
      ['td' => 'PREGUNTA'],
      
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns', 'name' => 'btns'],
      ['data' => 'id', 'name' => 'in_preguntas.id'],      
      ['data' => 's_indicador', 'name' => 'in_indicadors.s_indicador'],
       ['data' => 's_linea_base', 'name' => 'in_linea_bases.s_linea_base'],
      ['data' => 'nombre', 'name' => 'sis_documento_fuentes.nombre'],
      ['data' => 's_pregunta', 'name' => 'in_preguntas.s_pregunta'],
     
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
   
    $this->opciones['respuest'] = InDocPregunta::getRespuesta($objetoxx,false); 
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
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
      ->route('re.respuesta.editar', [InPregunta::transaccion($dataxxxx, $objectx)->id])
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
  public function edit(InDocPregunta $objetoxx)
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
    $objetoxx->activo = ($objetoxx->activo == 0) ? 1 : 0;
    $objetoxx->save();
    $activado = $objetoxx->activo == 0 ? 'inactivado' : 'activado';
    return redirect()->route('re')->with('info', 'Registro ' . $activado . ' con éxito');
  }
}
