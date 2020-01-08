<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiConcepto;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiConceptoController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsiconcepto-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsiconcepto-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiConcepto->where('activo', 1)->sortByDesc('id')->first();
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $areas = Tema::findOrFail(211)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'Concepto'], compact('vsi', 'dato', 'nnaj', 'valor', 'sino', 'areas'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = VsiConcepto::create($request->all());
        if($request->redes){
            foreach ($request->redes as $d) {
                $dato->redes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 46);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 47);
        return redirect()->route('VSI.concepto', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = VsiConcepto::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->redes()->detach();
        if($request->redes){
            foreach ($request->redes as $d) {
                $dato->redes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 46);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 47);
        return redirect()->route('VSI.concepto', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'concepto' => 'required|string|max:4000',
            'prm_ingreso_id' => 'nullable|exists:parametros,id',
            'porque' => 'nullable|string|max:4000',
            'cual' => 'nullable|string|max:120',
            'redes' => 'nullable|array'
        ]);
    }
}
