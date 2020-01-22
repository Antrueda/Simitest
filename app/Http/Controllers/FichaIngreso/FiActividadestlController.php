<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiActividadestlCrearRequest;
use App\Http\Requests\FichaIngreso\FiActividadestlUpdateRequest;
use App\Models\fichaIngreso\FiActividadestl;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Tema;

class FiActividadestlController extends Controller
{
  private $opciones;

  public function __construct()
  {
    $this->middleware(['permission:fiactividades-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fiactividades-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fiactividades-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fiactividades-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Actividades de Tiempo Libre',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'readnomb' => '',
      'slotxxxx' => 'actividades',
      'carpetax' => 'actividades',
      'modeloxx' => '',
      'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['condicio'] = Tema::combo(23, true, false);
    $this->opciones['activlib'] = Tema::combo(77, false, false);
    $this->opciones['reliprac'] = ['' => 'Seleccione'];
    $this->opciones['reliprac'] = Tema::combo(78, true, false);
    $this->opciones['sacramen'] = Tema::combo(79, false, false);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo
    if ($nombobje != '') {
      if ($objetoxx->i_prm_pertenece_parche_id == 228) {
        $this->opciones['readnomb'] = 'readonly';
      }

      if ($objetoxx->i_prm_religion_practica_id != 494) {
        $this->opciones['sacramen'] = [1 => 'NO APLICA'];
        $this->opciones['reliprac'] = [1 => 'NO APLICA'];
      } else {
        $this->opciones['reliprac'] = Tema::combo(78, true, false);
      }

      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
    }

    $this->opciones['activitl'] = FiActividadestl::getActividadtl($objetoxx);
    $this->opciones['sacramex'] = FiActividadestl::getSacramento($objetoxx);

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
    $this->opciones['activida'] = FiActividadestl::actividad($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiActividadestl::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.actividades.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {
    return redirect()
      ->route('fi.actividades.editar', [$dataxxxx['sis_nnaj_id'], FiActividadestl::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiActividadestlCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Actividades de tiempo libre creadas con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiActividadestl  $residencia
   * @return \Illuminate\Http\Response
   */
  public function show(FiActividadestl $reisidencia)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiActividadestl  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiActividadestl $objetoxx)
  {
    $this->opciones['activida'] = FiActividadestl::actividad($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);

    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiActividadestl  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiActividadestlUpdateRequest $request, FiActividadestl $db, $id)
  {
    return $this->grabar($request->all(), FiActividadestl::where('id', $id)->first(), 'Actividades de tiempo libre actualizadas con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiActividadestl  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiActividadestl $objetoxx)
  {
    //
  }
}
