<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiGeneracionIngresoCrearRequest;
use App\Http\Requests\FichaIngreso\FiGeneracionIngresoUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiGeneracionIngreso;
use App\Models\Tema;

class FiGeneracionIngresoController extends Controller
{
  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:fiingresos-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fiingresos-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fiingresos-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fiingresos-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Generación de Ingresos',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'readhora' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'slotxxxx' => 'ingresos',
      'carpetax' => 'ingresos',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['acgening'] = Tema::combo(114,true,false);
    $this->opciones['trabinfo'] = Tema::combo(115,true,false);
    $this->opciones['otractiv'] = Tema::combo(116,true,false);
    $this->opciones['tiporela'] = Tema::combo(117,true,false);
    $this->opciones['raznogen'] = Tema::combo(122,true,false);
    $this->opciones['jorgener'] = Tema::combo(123,true,false);
    $this->opciones['diaseman'] = Tema::combo(124,false,false);
    $this->opciones['frecugen'] = Tema::combo(125,true,false);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if($this->opciones['datobasi']->prm_poblacion_id == 650){
      $this->opciones['acgening'] = Tema::combo(296,true,false);
    }else{
      $this->opciones['acgening'] = Tema::combo(114,true,false);
    }

    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->activo = 1 ? 'ACTIVO' : 'INACTIVO';
      if($objetoxx->i_prm_jornada_genera_ingreso_id!=467){
        $this->opciones['readhora'] ='readonly';
      }
      
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
    $this->opciones['geneingr'] = FiGeneracionIngreso::generacion($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiGeneracionIngreso::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.ingresos.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view(true, '', 'Crear');
  }

  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
    return redirect()
      ->route('fi.ingresos.editar', [$dataxxxx['sis_nnaj_id'], FiGeneracionIngreso::transaccion($dataxxxx,  $objetoxx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiGeneracionIngresoCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Generación de ingresos creado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiGeneracionIngreso  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiGeneracionIngreso $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiGeneracionIngreso  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiGeneracionIngreso $objetoxx)
  {
    $this->opciones['geneingr'] = FiGeneracionIngreso::generacion($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiGeneracionIngreso  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiGeneracionIngresoUpdateRequest $request, $db, $id)
  {

    return $this->grabar($request->all(), FiGeneracionIngreso::where('id',$id)->first(), 'Generación de ingresos actualizado con exito');
  }
  

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiGeneracionIngreso  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiGeneracionIngreso $objetoxx)
  {
    //
  }
}
