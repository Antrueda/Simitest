<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiContactoCrearRequest;
use App\Http\Requests\FichaIngreso\FiContactoUpdateRequest;
use App\Models\fichaIngreso\FiContacto;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Tema;

class FiContactoController extends Controller
{
 private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:ficontacto-leer'], ['only' => ['show']]);
    $this->middleware(['permission:ficontacto-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:ficontacto-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:ficontacto-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Contacto',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'contacto',
      'carpetax' => 'contacto',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['tipocont'] = Tema::combo(146,true,false);
    $this->opciones['contopci'] = Tema::combo(147,true,false);
    $this->opciones['contprot'] = Tema::combo(149,true,false);
    $this->opciones['condnoap'] = Tema::combo(25,true,false);
    
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
    }
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
    $this->opciones['contacto'] = FiContacto::contacto($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiContacto::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.contacto.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }
  
  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
      return redirect()
      ->route('fi.contacto.editar', [$dataxxxx['sis_nnaj_id'], FiContacto::transaccion($dataxxxx,  $objetoxx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiContactoCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Contacto y tratamiento de datos creado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiContacto  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiContacto $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiContacto  $residencia
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiContacto $objetoxx)
  {
    $this->opciones['contacto'] = FiContacto::contacto($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiContacto  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiContactoUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiContacto::where('id',$id)->first(), 'Contacto y tratamiento de dato actualizado con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiContacto  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiContacto $objetoxx)
  {
    //
  }
}
