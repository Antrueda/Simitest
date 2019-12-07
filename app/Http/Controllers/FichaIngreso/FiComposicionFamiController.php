<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiComposicionFamiCrearRequest;
use App\Http\Requests\FichaIngreso\FiComposicionFamiUpdateRequest;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Tema;
use Illuminate\Support\Carbon;

class FiComposicionFamiController extends Controller
{
  private $opciones;

  public function __construct()
  {
    $this->middleware(['permission:ficomposicion-leer'], ['only' => ['show']]);
    $this->middleware(['permission:ficomposicion-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:ficomposicion-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:ficomposicion-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Composición familiar',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'permisox' => 'ficomposicion',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'composicion',
      'carpetax' => 'composicion',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'modeloxx' => '',
      'urlxxxxx' => 'api/fi/ficomposicionfamiliar',
      'nuevoxxx' => 'o Registro',
      
    ];
    $this->opciones['sexoxxxx'] = Tema::combo(11, true, false);
    $this->opciones['parentes'] = Tema::combo(66, true, false);
    $this->opciones['tipotele'] = Tema::combo(44, true, false);
    $this->opciones['vinculad'] = Tema::combo(287, true, false);
    $this->opciones['convivex'] = Tema::combo(23, true, false);
    $this->opciones['ocupacio'] = Tema::combo(156, true, false);
    $this->opciones['tipodocu'] = Tema::combo(3, true, false);
    $this->opciones['nacicomp'] = '';
    $this->opciones['cabecera'] = [
      ['td' => 'Id'],
      ['td' => 'PRIMER NOMBRE'],
      ['td' => 'SEGUNDO NOMBRE'],
      ['td' => 'PRIMER APELLIDO'],
      ['td' => 'SEGUNDO APELLIDO'],
      ['td' => 'DOCUMENTO'],
      ['td' => 'ESTADO'],
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns','name' => 'btns'],
      ['data' => 'id','name' => 'id'],
      ['data' => 's_primer_nombre','name' => 's_primer_nombre'],
      ['data' => 's_segundo_nombre','name' => 's_segundo_nombre'],
      ['data' => 's_primer_apellido','name' => 's_primer_apellido'],
      ['data' => 's_segundo_apellido','name' => 's_segundo_apellido'],
      ['data' => 's_documento','name' => 's_documento'],
      ['data' => 'activo','name' => 'activo'],

    ];
  }
  public function index($datobasi)
  {
    $this->opciones['esindexx']='';
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $this->opciones['nnajregi'] = $datobasi;
    $this->opciones['parametr'] = [$this->opciones['nnajregi']];
    return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
  }
  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    $this->opciones['aniosxxx'] = '';
    // indica si se esta actualizando o viendo
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
      $fechaxxx = explode('-', $objetoxx->d_nacimiento);
      $this->opciones['aniosxxx'] = Carbon::createFromDate($fechaxxx[0], $fechaxxx[1], $fechaxxx[2])->age ;
    }

    $this->opciones['parametr'] = [$this->opciones['nnajregi']];

    // Se arma el titulo de acuerdo al array opciones
    $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];

    return view('FichaIngreso.pestanias', ['todoxxxx' => $this->opciones]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create($datobasi)
  {
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.composicion.editar', [$dataxxxx['sis_nnaj_id'], FiComposicionFami::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiComposicionFamiCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Composicion familiar creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiComposicionFami  $residencia
   * @return \Illuminate\Http\Response
   */
  public function show(FiComposicionFami $reisidencia)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiComposicionFami $objetoxx)
  {
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiComposicionFamiUpdateRequest $request,  $db,  $id)
  {
    return $this->grabar($request->all(), FiComposicionFami::where('id',$id)->first(), 'Composicion familiar actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiComposicionFami  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiComposicionFami $objetoxx)
  {
    //
  }
}
