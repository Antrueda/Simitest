<?php

namespace App\Http\Controllers\sicosocial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiSitEspecial;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiSituacionEspecialController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsisituacionespecial-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsisituacionespecial-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiSitEspecial->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $victima = Tema::findOrFail(126)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $riesgo = Tema::findOrFail(58)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'SituacionEspecial'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'victima', 'riesgo'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = VsiSitEspecial::create($request->all());
        if($request->victimas) {
            foreach ($request->victimas as $d) {
                $dato->victimas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if ($request->riesgos) {
            foreach ($request->riesgos as $d) {
                $dato->riesgos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 104);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 105);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 106);
        return redirect()->route('VSI.situacionespecial', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = VsiSitEspecial::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->victimas()->detach();
        if($request->victimas) {
            foreach ($request->victimas as $d) {
                $dato->victimas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->riesgos()->detach();
        if($request->riesgos) {
            foreach ($request->riesgos as $d) {
                $dato->riesgos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 104);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 105);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 106);
        return redirect()->route('VSI.situacionespecial', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id'    => 'required|exists:vsis,id',
            'victimas'       => 'required|array',
            'riesgos'        => 'required_if:victimas,853|array',
            'prm_victima_id' => 'required_if:riesgos,853|exists:parametros,id',
        ]);
    }
}
