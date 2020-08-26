<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiAutorizacionCrearRequest;
use App\Http\Requests\FichaIngreso\FiAutorizacionUpdateRequest;
use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Parametro;
use App\Models\Tema;
use Carbon\Carbon;
use Illuminate\Http\Request;
class FiAutorizacionController extends Controller
{

  private $opciones;

  public function __construct()
  {

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


    $this->middleware(['permission:'
        . $this->opciones['permisox'] . '-leer|'
        . $this->opciones['permisox'] . '-crear|'
        . $this->opciones['permisox'] . '-editar|'
        . $this->opciones['permisox'] . '-borrar']);

    $this->opciones['docrepre'] = Tema::combo(64, true, false);
    $this->opciones['modalupi'] = Tema::combo(65, false, false);
    $this->opciones['docmened'] = Tema::combo(150, true, false);
    $this->opciones['condicio'] = Tema::combo(23, false, false);
    $this->opciones['tipodili'] = Tema::combo(302, true, false);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {
    $this->opciones['parentes'] = Tema::combo(66, true, false);
    $edad = Carbon::parse($this->opciones['datobasi']->d_nacimiento)->age;
    $compofami=FiComposicionFami::getComboResponsable($this->opciones['datobasi'],true,false,$edad);
    if ($compofami[0]) {
      return redirect()
        ->route('fi.composicion', [$this->opciones['datobasi']->sis_nnaj_id])
        ->with('info', 'No hay un componente familiar mayor de edad, por favor créelo');
    }

    $this->opciones['edadxxxx'] = $edad;

    //Esconder campos según la edad


    $this->opciones['autoriza'] = $compofami[1];
    $this->opciones['sdocumen'] = '';
    $this->opciones['expedici'] = '';
    $this->opciones['encalida'] = '';
    $this->opciones['expedici'] = '';


    if ($edad >= 18) { // mayor de edad
      $this->opciones['encalida'] = Parametro::where('id', 805)->first()->nombre;
      $this->opciones['expedici'] = $this->opciones['datobasi']->sis_pai->s_pais . ' ' . $this->opciones['datobasi']->sis_departamento->s_departamento . ' ' . $this->opciones['datobasi']->sis_municipio->s_municipio;
      $this->opciones['sdocumen'] = $this->opciones['datobasi']->s_documento;
    } else { // menor de edad
      //$this->opciones['condicio'] = [1 => 'NO APLICA'];
    }

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
    return $this->grabar($request->all(), FiAutorizacion::where('id', $id)->first(), 'Autorización actualizada con exito');
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
  public function autoriza(Request $request,$nnajregi)
  {
    if ($request->ajax()) {
      $dataxxxx = $request->all();
      $respuest=['sdocumen'=>' ','expedici'=>' '];
      if($dataxxxx['padrexxx']!=''){
        $compofam=FiComposicionFami::where('id',$dataxxxx['padrexxx'])->first();
        $respuest=['sdocumen'=>$compofam->s_documento,'expedici'=>$compofam->sis_municipio->s_municipio.' ('.$compofam->sis_departamento->s_departamento.')'];
      }
      return response()->json($respuest);
    }
  }
}
