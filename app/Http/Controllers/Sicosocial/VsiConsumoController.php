<?php

namespace App\Http\Controllers\sicosocial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiConsumo;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiConsumoController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsiconsumo-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsiconsumo-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiConsumo->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $contexto = Tema::findOrFail(171)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $motivo = Tema::findOrFail(180)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $expectativas = Tema::findOrFail(181)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiares = Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'Consumo'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'contexto', 'motivo', 'expectativas', 'familiares'));
    }

    public function store(Request $request){
        if($request->prm_consumo_id == 228){
            $request['cantidad'] = null;
            $request['inicio'] = null;
            $request['prm_contexto_ini_id'] = null;
            $request['prm_consume_id'] = null;
        }
        if($request->prm_consume_id != 227){
            $request['prm_contexto_man_id'] = null;
            $request['prm_problema_id'] = null;
            $request['porque'] = null;
            $request['prm_motivo_id'] = null;
            $request['expectativas'] = null;
        }
        if($request->prm_consumo_id == 228){
            $request['quienes'] = null;
        }
        $this->validator($request->all())->validate();
        $dato = VsiConsumo::create($request->all());
        if($request->quienes){
            foreach ($request->quienes as $d) {
                $dato->quienes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->expectativas){
            foreach ($request->expectativas as $d) {
                $dato->expectativas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        return redirect()->route('VSI.consumo', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        if($request->prm_consumo_id == 228){
            $request['cantidad'] = null;
            $request['inicio'] = null;
            $request['prm_contexto_ini_id'] = null;
            $request['prm_consume_id'] = null;
        }
        if($request->prm_consume_id != 227){
            $request['prm_contexto_man_id'] = null;
            $request['prm_problema_id'] = null;
            $request['porque'] = null;
            $request['prm_motivo_id'] = null;
            $request['expectativas'] = null;
        }
        if($request->prm_consumo_id == 228){
            $request['quienes'] = null;
        }
        $this->validator($request->all())->validate();
        $dato = VsiConsumo::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->quienes()->detach();
        if($request->quienes){
            foreach ($request->quienes as $d) {
                $dato->quienes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->expectativas()->detach();
        if($request->expectativas){
            foreach ($request->expectativas as $d) {
                $dato->expectativas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        return redirect()->route('VSI.consumo', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_consumo_id' => 'required|exists:parametros,id',
            'cantidad' => 'required_if:prm_consumo_id,227',
            'inicio' => 'required_if:prm_consumo_id,227',
            'prm_contexto_ini_id' => 'required_if:prm_consumo_id,227',
            'prm_consume_id' => 'required_if:prm_consumo_id,227',
            'prm_contexto_man_id' => 'required_if:prm_consume_id,227',
            'prm_problema_id' => 'required_if:prm_consume_id,227',
            'porque' => 'required_if:prm_consume_id,227',
            'prm_motivo_id' => 'required_if:prm_consume_id,227',
            'expectativas' => 'required_if:prm_consume_id,227',
            'prm_familia_id' => 'required|exists:parametros,id',
            'descripcion' => 'required_if:prm_consumo_id,227|required_if:prm_familia_id,227|max:4000',
            'quienes' => 'required_if:prm_familia_id,227',
        ]);
    }
}