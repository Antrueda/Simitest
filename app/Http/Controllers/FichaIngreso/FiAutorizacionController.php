<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiAutorizacionCrearRequest;
use App\Http\Requests\FichaIngreso\FiAutorizacionUpdateRequest;
use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Tema;
use Carbon\Carbon;

class FiAutorizacionController extends Controller
{

  private $opciones;

  public function __construct()
  {
    $this->middleware(['permission:fiautorizacion-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fiautorizacion-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fiautorizacion-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fiautorizacion-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Autorizacion',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'slotxxxx' => 'autorizacion',
      'carpetax' => 'autorizacion',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro'
    ];

    $this->opciones['docrepre'] = Tema::combo(64,true,false);
    $this->opciones['modalupi'] = Tema::combo(65,false,false);
    $this->opciones['docmened'] = Tema::combo(150,true,false);
    $this->opciones['condicio'] = Tema::combo(23,false,false);
    $this->opciones['tipodili'] = Tema::combo(302,true,false);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $edad = Carbon::parse($this->opciones['datobasi']->d_nacimiento)->age;
    $this->opciones['readnomn'] = '';
    $this->opciones['readedad'] = '';
    $this->opciones['readdocu'] = '';
    $this->opciones['readconc'] = '';
    $this->opciones['readnomr'] = '';
    $this->opciones['readcedr'] = '';
    $this->opciones['readluga'] = '';
    //Esconder campos según la edad
    if($edad >= 18){ // mayor de edad
      $this->opciones['docrepre'] = [1 => 'NO APLICA'];
      $this->opciones['docmened'] = [1 => 'NO APLICA'];
      $this->opciones['readnomn'] = 'disabled';
      $this->opciones['readedad'] = 'disabled';
      $this->opciones['readdocu'] = 'disabled';
      $this->opciones['readconc'] = 'disabled';
    } else { // menor de edad
      $this->opciones['condicio'] = [1 => 'NO APLICA'];
      $this->opciones['readnomr'] = 'disabled';
      $this->opciones['readcedr'] = 'disabled';
      $this->opciones['readluga'] = 'disabled';
    }

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
    }

    $this->opciones['modaling'] = FiAutorizacion::getModalidad($objetoxx);

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
    $this->opciones['autorizx'] = FiAutorizacion::autorizacion($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiAutorizacion::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.autorizacion.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }

  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
    return redirect()
      ->route('fi.autorizacion.editar', [$dataxxxx['sis_nnaj_id'], FiAutorizacion::transaccion($dataxxxx,  $objetoxx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiAutorizacionCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Autorización creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiAutorizacion  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiAutorizacion $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiAutorizacion  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiAutorizacion $objetoxx)
  {
    $this->opciones['autorizx'] = FiAutorizacion::autorizacion($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiAutorizacion  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiAutorizacionUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiAutorizacion::where('id',$id)->first(), 'Autorización actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiAutorizacion  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiAutorizacion $objetoxx)
  {
    //
  }
}
