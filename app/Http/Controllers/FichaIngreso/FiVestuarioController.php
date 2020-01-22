<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiVestuarioCrearRequest;
use App\Http\Requests\FichaIngreso\FiVestuarioUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiVestuarioNnaj;
use App\Models\Tema;


class FiVestuarioController extends Controller
{
  private $opciones;

  public function __construct()
  {
    $this->middleware(['permission:fivestuario-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fivestuario-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fivestuario-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fivestuario-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Vestuario',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'vestuario',
      'carpetax' => 'vestuario',
      'modeloxx' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'nuevoxxx' => 'o Registro'
    ];
    $this->opciones['sexoetar'] = Tema::combo(139,true,false);

    $this->opciones['tallzapa'] = Tema::combo(138,true,false);
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
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
    $this->opciones['vestuari'] = FiVestuarioNnaj::vestuario($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiVestuarioNnaj::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.vestuario.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    $this->opciones['tallasxx'] = $this->casos('');
    return $this->view(true, '', 'Crear');
  }

  private function grabar($dataxxxx, $objetoxx, $infoxxxx)
  {
    return redirect()
      ->route('fi.vestuario.editar', [$dataxxxx['sis_nnaj_id'], FiVestuarioNnaj::transaccion($dataxxxx,  $objetoxx)->id])
      ->with('info', $infoxxxx);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiVestuarioCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Vestuario creado con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Vestuario  $ve
   * @return \Illuminate\Http\ve
   */
  public function show(FiVestuarioNnaj $ve)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Vestuario  $ve
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiVestuarioNnaj $ve)
  {
    $this->opciones['vestuari'] = FiVestuarioNnaj::vestuario($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    $this->opciones['tallasxx'] = $this->casos($ve->prm_sexo_etario_id);
    return $this->view($ve,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Vestuario  $vestuario
   * @return \Illuminate\Http\Response
   */
  public function update(FiVestuarioUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiVestuarioNnaj::where('id',$id)->first(), 'Vestuario actualizado con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Vestuario  $vestuario
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiVestuarioNnaj $ve)
  {
    //
  }
  private function casos($sexoxxxx)
  {
    $respuest = ['tallpant' => '', 'tallcami' => ''];
    switch ($sexoxxxx) {
      case 496: //HOMBRE NIÑO
        $respuest = [
          'tallpant' => Tema::combo(132,true,false),
          'tallcami' => Tema::combo(132,true,false),
        ];
        break;
      case 505: //HOMBRE ADULTO
        $respuest = [
          'tallpant' => Tema::combo(134,true,false),
          'tallcami' => Tema::combo(136,true,false),
        ];
        break;
      case 707: //MUJER NIÑA
        $respuest = [
          'tallpant' => Tema::combo(132,true,false),
          'tallcami' => Tema::combo(132,true,false),
        ];
        break;
      case 705: //MUJER ADULTA
        $respuest = [
          'tallpant' => Tema::combo(135,true,false),
          'tallcami' => Tema::combo(137,true,false),
        ];
        break;
      default:
        $respuest = ['tallpant' => ['' => 'Seleccione'], 'tallcami' => ['' => 'Seleccione']];
    }
    return $respuest;
  }
  public function tallasajax(\Illuminate\Http\Request $request)
  {
    if ($request->ajax()) {
      return response()->json($this->casos($request->all()['sexoxxxx']));
    }
  }
}
