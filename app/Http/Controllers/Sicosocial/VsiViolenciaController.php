<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisNnaj;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiViolencia;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;


class VsiViolenciaController extends Controller{

  public function __construct(){
    $this->middleware(['permission:vsiviolencia-crear'], ['only' => ['show, store']]);
    $this->middleware(['permission:vsiviolencia-editar'], ['only' => ['show, update']]);
  }

  public function show($id){
    $vsi = Vsi::findOrFail($id);
    $dato = $vsi->nnaj;
    $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
    $valor = $vsi->VsiViolencia->where('sis_esta_id', 1)->sortByDesc('id')->first();
    $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $contexto = Tema::findOrFail(142)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    $violencia = Tema::findOrFail(7)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
    return view('Sicosocial.index', ['accion' => 'Violencia'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'contexto', 'violencia'));
  }

  public function store(Request $request){
    $this->validator($request->all())->validate();
    if ($request->prm_tip_vio_id == 228) {
      $request["prm_fam_fis_id"] = null;
      $request["prm_fam_psi_id"] = null;
      $request["prm_fam_sex_id"] = null;
      $request["prm_fam_eco_id"] = null;
      $request["prm_amicol_fis_id"] = null;
      $request["prm_amicol_psi_id"] = null;
      $request["prm_amicol_sex_id"] = null;
      $request["prm_amicol_eco_id"] = null;
      $request["prm_par_fis_id"] = null;
      $request["prm_par_psi_id"] = null;
      $request["prm_par_sex_id"] = null;
      $request["prm_par_eco_id"] = null;
      $request["prm_compar_fis_id"] = null;
      $request["prm_compar_psi_id"] = null;
      $request["prm_compar_sex_id"] = null;
      $request["prm_compar_eco_id"] = null;
      $request["prm_ins_fis_id"] = null;
      $request["prm_ins_psi_id"] = null;
      $request["prm_ins_sex_id"] = null;
      $request["prm_ins_eco_id"] = null;
      $request["prm_lab_fis_id"] = null;
      $request["prm_lab_psi_id"] = null;
      $request["prm_lab_sex_id"] = null;
      $request["prm_lab_eco_id"] = null;
      $request["prm_dis_gen_id"] = null;
      $request["prm_dis_ori_id"] = null;
    }
    if (!$request->prm_dis_gen_id || $request->prm_dis_gen_id == 228) {
      $request["contextos"] = null;
    }
    if (!$request->prm_dis_ori_id || $request->prm_dis_ori_id == 228) {
      $request["tipos"] = null;
    }
    $dato = VsiViolencia::create($request->all());
    if($request->contextos){
      foreach ($request->contextos as $d) {
        $dato->contextos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }
    if($request->tipos){
      foreach ($request->tipos as $d) {
        $dato->tipos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }
    Vsi::indicador($dato->vsi->sis_nnaj_id, 108);
    Vsi::indicador($dato->vsi->sis_nnaj_id, 109);
    Vsi::indicador($dato->vsi->sis_nnaj_id, 110);
    return redirect()->route('VSI.violencia', $request->vsi_id)->with('info', 'Registro creado con éxito');
  }

  public function update(Request $request, $id, $id1){
    $this->validator($request->all())->validate();
    if ($request->prm_tip_vio_id == 228) {
      $request["prm_fam_fis_id"] = null;
      $request["prm_fam_psi_id"] = null;
      $request["prm_fam_sex_id"] = null;
      $request["prm_fam_eco_id"] = null;
      $request["prm_amicol_fis_id"] = null;
      $request["prm_amicol_psi_id"] = null;
      $request["prm_amicol_sex_id"] = null;
      $request["prm_amicol_eco_id"] = null;
      $request["prm_par_fis_id"] = null;
      $request["prm_par_psi_id"] = null;
      $request["prm_par_sex_id"] = null;
      $request["prm_par_eco_id"] = null;
      $request["prm_compar_fis_id"] = null;
      $request["prm_compar_psi_id"] = null;
      $request["prm_compar_sex_id"] = null;
      $request["prm_compar_eco_id"] = null;
      $request["prm_ins_fis_id"] = null;
      $request["prm_ins_psi_id"] = null;
      $request["prm_ins_sex_id"] = null;
      $request["prm_ins_eco_id"] = null;
      $request["prm_lab_fis_id"] = null;
      $request["prm_lab_psi_id"] = null;
      $request["prm_lab_sex_id"] = null;
      $request["prm_lab_eco_id"] = null;
      $request["prm_dis_gen_id"] = null;
      $request["prm_dis_ori_id"] = null;
    }
    if (!$request->prm_dis_gen_id || $request->prm_dis_gen_id == 228) {
      $request["contextos"] = null;
    }
    if (!$request->prm_dis_ori_id || $request->prm_dis_ori_id == 228) {
      $request["tipos"] = null;
    }
    $dato = VsiViolencia::findOrFail($id1);
    $dato->fill($request->all())->save();
    $dato->contextos()->detach();
    if($request->contextos){
      foreach ($request->contextos as $d) {
        $dato->contextos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }
    $dato->tipos()->detach();
    if($request->tipos){
      foreach ($request->tipos as $d) {
        $dato->tipos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
      }
    }
    Vsi::indicador($dato->vsi->sis_nnaj_id, 110);
    Vsi::indicador($dato->vsi->sis_nnaj_id, 108);
    Vsi::indicador($dato->vsi->sis_nnaj_id, 109);
    return redirect()->route('VSI.violencia', $id)->with('info', 'Registro actualizado con éxito');
  }

  protected function validator(array $data){
    return Validator::make($data, [
      'vsi_id'       => 'required|exists:vsis,id',
      'prm_tip_vio_id'    => 'required|exists:parametros,id',
      'prm_fam_fis_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_fam_psi_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_fam_sex_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_fam_eco_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_amicol_fis_id' => 'required_if:prm_tip_vio_id,227',
      'prm_amicol_psi_id' => 'required_if:prm_tip_vio_id,227',
      'prm_amicol_sex_id' => 'required_if:prm_tip_vio_id,227',
      'prm_amicol_eco_id' => 'required_if:prm_tip_vio_id,227',
      'prm_par_fis_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_par_psi_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_par_sex_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_par_eco_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_compar_fis_id' => 'required_if:prm_tip_vio_id,227',
      'prm_compar_psi_id' => 'required_if:prm_tip_vio_id,227',
      'prm_compar_sex_id' => 'required_if:prm_tip_vio_id,227',
      'prm_compar_eco_id' => 'required_if:prm_tip_vio_id,227',
      'prm_ins_fis_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_ins_psi_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_ins_sex_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_ins_eco_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_lab_fis_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_lab_psi_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_lab_sex_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_lab_eco_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_dis_gen_id'    => 'required_if:prm_tip_vio_id,227',
      'prm_dis_ori_id'    => 'required_if:prm_tip_vio_id,227',
      'contextos' => 'required_if:prm_dis_gen_id,227|array',
      'tipos' => 'required_if:prm_dis_ori_id,227|array',
    ]);
  }
}
