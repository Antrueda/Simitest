<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Http\Controllers\Controller;
use App\Http\Requests\FichaIngreso\FiSaludCrearRequest;
use App\Http\Requests\FichaIngreso\FiSaludUpdateRequest;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiSalud;
use App\Models\sistema\SisEntidadSalud;
use App\Models\Tema;

class FiSaludController extends Controller
{
  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:fisalud-leer'], ['only' => ['show']]);
    $this->middleware(['permission:fisalud-crear'], ['only' => ['show, create, store']]);
    $this->middleware(['permission:fisalud-editar'], ['only' => ['show, edit, update']]);
    $this->middleware(['permission:fisalud-borrar'], ['only' => ['show, destroy']]);
    $this->opciones = [
      'tituloxx' => 'Salud',
      'rutaxxxx' => 'FichaIngreso',
      'accionxx' => '',
      'volverax' => 'lista de NNAJ',
      'readonly' => '',
      'slotxxxx' => 'salud',
      'carpetax' => 'salud',
      'modeloxx' => '',
      'routxxxx' => 'fi.datobasico',
      'routinde' => 'fi',
      'routnuev' => 'fi.datobasico',
      'nuevoxxx' => 'o Registro',
      'permisox' => 'fisaludenfermedad',
      'urlxxxxx' => 'api/fi/fisaludenfermedad',
    ];
    $this->opciones['estafili'] = Tema::combo(21,true,false);
    $this->opciones['condicio'] = Tema::combo(23,true,false);
    $this->opciones['tipodisc'] = Tema::combo(24,true,false);
    $this->opciones['condnoap'] = Tema::combo(25,true,false);
    $this->opciones['noapdisc'] = Tema::combo(25,true,false);
    $this->opciones['noapanti'] = Tema::combo(25,true,false);
    $this->opciones['apsisben'] = Tema::combo(26,true,false);
    $this->opciones['metantic'] = Tema::combo(27,true,false);
    $this->opciones['motcomdi'] = Tema::combo(29,true,false);
    $this->opciones['puntsisb'] = Tema::combo(50,true,false);
    $this->opciones['metoanti'] = Tema::combo(52,true,false);
    $this->opciones['evmedico'] = Tema::combo(43,false,false);
    $this->opciones['probsalu'] = Tema::combo(87,true,false);
    $this->opciones['entid_id'] = [''=>'Seleccione'];
    $this->opciones['tablname'] ='enfersal';

    $this->opciones['cabecera'] = [
      ['td' => 'FAMILIAR'],
        ['td' => 'TIPO ENFERMEDAD'],
        ['td' => 'RECIBE MEDICAMENTO'],
        ['td' => 'CUAL MEDICAMENTO'],
        ['td' => 'RECIBIÓ TRATAMIENTO'],
        ['td' => 'ACTIVO'],
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns','name'=>'btns'],
        ['data' => 's_primer_nombre','name'=>'fi_composicion_famis.s_primer_nombre'],
        ['data' => 's_tipo_enfermedad','name'=>'fi_proceso_familias.s_tipo_enfermedad'],
        ['data' => 'medicina','name'=>'parametros.nombre as medicina'],
        ['data' => 's_medicamento','name'=>'fi_proceso_familias.s_medicamento'],
        ['data' => 'tratamiento','name'=>'parametros.nombre as tratamiento'],
        ['data' => 'sis_esta_id','name'=>'fi_proceso_familias.sis_esta_id'],
    ];
  }

  private function view($objetoxx, $nombobje, $accionxx)
  {

    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo
    $this->opciones['readgest'] = '';
    $this->opciones['readlact'] = '';
    $this->opciones['readhijo'] = '';
    $this->opciones['cualmedi'] = '';
    if ($nombobje != '') {
        $this->opciones['entid_id'] = SisEntidadSalud::combo($objetoxx->i_prm_tentidad_id,true,false);
      $this->opciones['puedexxx'] = '';
      if ($objetoxx->tiendisc_id == 228) {
        $this->opciones['noapdisc'] = [1 => 'NO APLICA'];
        $this->opciones['tipodisc'] = [1 => 'NO APLICA'];
      }
      if ($objetoxx->conometo_id == 228 || $objetoxx->conometo_id == 235) {
        $this->opciones['noapdisc'] = [1 => 'NO APLICA'];
        $this->opciones['metantic'] = [1 => 'NO APLICA'];
      }
      if ($objetoxx->regisalu_id == 168) {
        $this->opciones['entid_id'] = [1 => 'NO APLICA'];
      }
      if ($objetoxx->i_comidas_diarias > 4) {
        $this->opciones['motcomdi'] = [1 => 'NO APLICA'];
      }
      if ($objetoxx->estagest_id == 228 || $objetoxx->estagest_id == 235) {
        $this->opciones['readgest'] = 'readonly';
      }
      if ($objetoxx->estalact_id == 228 || $objetoxx->estalact_id == 235) {
        $this->opciones['readlact'] = 'readonly';
      }
      if ($objetoxx->tienhijo_id == 228) {
        $this->opciones['readhijo'] = 'readonly';
      }
      if ($objetoxx->probsalu_id == 228) {
        $this->opciones['probsalu'] = [1 => 'NO APLICA'];
      }
      if ($objetoxx->consmedi_id == 228) {
        $this->opciones['cualmedi'] = 'readonly';
      }
      if ($objetoxx->d_puntaje_sisben != '') {
        $this->opciones['apsisben'] = [1 => 'NO APLICA'];
      }

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
    $this->opciones['tablread'] = 'display:none';
    $this->opciones['saludxxx'] = FiSalud::salud($datobasi);
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($datobasi);
    $vestuari = FiSalud::where('sis_nnaj_id', $this->opciones['datobasi']->sis_nnaj_id)->first();
    if ($vestuari != null) {
      return redirect()
        ->route('fi.salud.editar', [$datobasi, $vestuari->id]);
    }
    $this->opciones['nnajregi'] = $datobasi;
    return $this->view('', '', 'Crear');
  }
  private function grabar($dataxxxx, $objectx, $infoxxxx)
  {

    return redirect()
      ->route('fi.salud.editar', [$dataxxxx['sis_nnaj_id'],FiSalud::transaccion($dataxxxx, $objectx)->id])
      ->with('info', $infoxxxx);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(FiSaludCrearRequest $request)
  {
    return $this->grabar($request->all(), '', 'Salud creada con exito');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\FiSalud  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function show(FiSalud $objetoxx)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FiSalud  $residencia
   * @return \Illuminate\Http\Response
   */
  public function edit($nnajregi,  FiSalud $objetoxx)
  {
    $this->opciones['tablread'] = '';
    $this->opciones['saludxxx'] = FiSalud::salud($nnajregi);
    $this->opciones['nnajregi'] = $nnajregi;
    $this->opciones['datobasi'] = FiDatosBasico::usarioNnaj($this->opciones['nnajregi']);
    return $this->view($objetoxx,  'modeloxx', 'Editar');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FiSalud  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function update(FiSaludUpdateRequest $request, $db, $id)
  {
    return $this->grabar($request->all(), FiSalud::where('id',$id)->first(), 'Salud actualizada con exito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FiSalud  $objetoxx
   * @return \Illuminate\Http\Response
   */
  public function destroy(FiSalud $objetoxx)
  {
    //
  }
}
