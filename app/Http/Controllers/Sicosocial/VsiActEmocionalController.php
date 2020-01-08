<?php

namespace App\Http\Controllers\Sicosocial;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiActEmocional;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VsiActEmocionalController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsiactemocional-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsiactemocional-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiActEmocional->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $motivos = Tema::findOrFail(201)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'ActEmocional'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'motivos'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if ($request->prm_activa_id == 228) {
            $request["descripcion"] = null;
            $request["conductual"] = null;
            $request["cognitiva"] = null;
        }
        $dato = VsiActEmocional::create($request->all());
        if($request->fisiologicas){
            foreach ($request->fisiologicas as $d) {
                $dato->fisiologicas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id,41);
        return redirect()->route('VSI.actemocional', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_activa_id == 228) {
            $request["descripcion"] = null;
            $request["conductual"] = null;
            $request["cognitiva"] = null;
        }
        $dato = VsiActEmocional::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->fisiologicas()->detach();
        if($request->fisiologicas){
            foreach ($request->fisiologicas as $d) {
                $dato->fisiologicas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id,41);
        Vsi::indicador($dato->vsi->sis_nnaj_id,42);
        return redirect()->route('VSI.actemocional', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_activa_id' => 'required|exists:parametros,id',
            'descripcion' => 'required_if:prm_activa_id,227|max:4000',
            'conductual' => 'required_if:prm_activa_id,227|max:4000',
            'cognitiva' => 'required_if:prm_activa_id,227|max:4000',
            'fisiologicas' => 'required_if:prm_activa_id,227|array',
        ]);
    }
}
