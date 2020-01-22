<?php

namespace App\Http\Controllers\Sicosocial;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiAntecedente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class VsiAntecedenteController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsiantecedente-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsiantecedente-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiAntecedente->where('sis_esta_id', 1)->sortByDesc('id')->first();
        return view('Sicosocial.index', ['accion' => 'Antecedente'], compact('vsi', 'dato', 'nnaj', 'valor'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = VsiAntecedente::create($request->all());
        Vsi::indicador($dato->vsi->sis_nnaj_id,43);
        return redirect()->route('VSI.antecedente', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $dato = VsiAntecedente::findOrFail($id1);
        $dato->fill($request->all())->save();
        Vsi::indicador($dato->vsi->sis_nnaj_id,43);
        return redirect()->route('VSI.antecedente', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'descripcion' => 'required|string|max:4000',
        ]);
    }
}
