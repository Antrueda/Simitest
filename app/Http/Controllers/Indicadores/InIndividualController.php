<?php

namespace App\Http\Controllers\Indicadores;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Http\Controllers\Controller;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisTabla;
use Illuminate\Http\Request;

class InIndividualController extends Controller
{
  private $opciones;
  public function __construct()
  {
    $this->middleware(['permission:ininindividual-leer'], ['only' => ['index, show']]);
    $this->middleware(['permission:ininindividual-crear'], ['only' => ['index, show, create, store', 'updateParametro']]);
    $this->middleware(['permission:ininindividual-editar'], ['only' => ['index, show, edit, update', 'updateParametro']]);
    $this->middleware(['permission:ininindividual-borrar'], ['only' => ['index, show, destroy, destroyParametro']]);
    $this->opciones = [
      'tituloxx' => 'Indicadores para el NNAJ',
      'dashboar' => 'Indicadores.Dashboard.Individual',
      'rutacarp' => 'Indicadores.Dashboard.pestanias',
      "esindexx" => true,
      'permisox' => 'inindividual',
      'urlxxxxx' => 'api/indicadores/nnajs',
      'carpetax' => 'Preguntas',
      'esjsxxxx' => '',
      'slotxxxx' => 'graficos',
      'tablname' => 'inindividual',
    ];
    $this->opciones['cabecera'] = [
      ['td' => 'Id'],
      ['td' => 'PRIMER NOMBRE'],
      ['td' => 'SEGUNDO NOMBRE'],
      ['td' => 'DOCUMENTO'],
      ['td' => 'ESTADO'],
    ];
    $this->opciones['columnsx'] = [
      ['data' => 'btns', 'name' => 'btns'],
      ['data' => 's_primer_nombre', 'name' => 's_primer_nombre'],
      ['data' => 's_segundo_nombre', 'name' => 's_segundo_nombre'],
      ['data' => 's_primer_apellido', 'name' => 's_primer_apellido'],
      ['data' => 's_segundo_apellido', 'name' => 's_segundo_apellido'],
      ['data' => 's_apodo', 'name' => 's_apodo'],
    ];
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    
    $dataxxxx = [
      'sis_tabla_id' => 1,
      'user_crea_id' => 1,
      'user_edita_id' => 1,
      'sis_nnaj_id' => 2
    ];

    ///$dataxxxx = IndicadorHelper::asignaLineaBase($dataxxxx);
    //return $dataxxxx;
    return view($this->opciones['rutacarp'], ['todoxxxx' => $this->opciones]);
  }


  private function view($objetoxx, $nombobje, $accionxx, $vistaxxx)
  {

    $this->opciones['indicado'] = IndicadorHelper::getIndicadores($objetoxx->sis_nnaj_id, 1);

    $this->opciones['esindexx'] = false;
    $this->opciones['estadoxx'] = 'ACTIVO';
    $this->opciones['accionxx'] = $accionxx;
    // indica si se esta actualizando o viendo

    //$this->opciones['stablaxx'] = SisTabla::combo('', true, false);
    if ($nombobje != '') {
      $this->opciones[$nombobje] = $objetoxx;
      $this->opciones['estadoxx'] = $objetoxx->sis_esta_id = 1 ? 'ACTIVO' : 'INACTIVO';
    }

    // Se arma el titulo de acuerdo al array opciones
    $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
    return view($vistaxxx, ['todoxxxx' => $this->opciones]);
  }


  public function show(FiDatosBasico $objetoxx)
  {
    $this->opciones['nnajregi'] = $objetoxx->id;
    $this->opciones['datobasi'] = $objetoxx;
    return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp']);
  }
  public function diagnostico(FiDatosBasico $objetoxx)
  {
    $this->opciones['slotxxxx'] = 'diagnostico';
    $this->opciones['nnajregi'] = $objetoxx->id;
    $this->opciones['datobasi'] = $objetoxx;
    return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp']);
  }
  public function inicial(FiDatosBasico $objetoxx)
  {
    $this->opciones['slotxxxx'] = 'inicial';
    $this->opciones['nnajregi'] = $objetoxx->id;
    $this->opciones['datobasi'] = $objetoxx;
    return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp']);
  }

  public function gestion(FiDatosBasico $objetoxx)
  {
    $this->opciones['slotxxxx'] = 'gestion';
    $this->opciones['nnajregi'] = $objetoxx->id;
    $this->opciones['datobasi'] = $objetoxx;
    return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp']);
  }

  public function seguimiento(FiDatosBasico $objetoxx)
  {
    $this->opciones['slotxxxx'] = 'seguimiento';
    $this->opciones['nnajregi'] = $objetoxx->id;
    $this->opciones['datobasi'] = $objetoxx;
    return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp']);
  }

  public function evolucion(FiDatosBasico $objetoxx)
  {
    $this->opciones['slotxxxx'] = 'evolucion';
    $this->opciones['nnajregi'] = $objetoxx->id;
    $this->opciones['datobasi'] = $objetoxx;
    return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp']);
  }




  public function afirmante(FiDatosBasico $objetoxx)
  {
    $this->opciones['slotxxxx'] = 'afirmante';
    $this->opciones['nnajregi'] = $objetoxx->id;
    $this->opciones['datobasi'] = $objetoxx;
    return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp']);
  }
}
