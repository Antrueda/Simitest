<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiConsentimiento;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class VsiConsentimientoController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsiconsentimiento-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsiconsentimiento-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiConsentimiento->where('activo', 1)->sortByDesc('id')->first();
        $usuarios = ['' => 'Seleccione...'];
        foreach (User::where('i_prm_estado_id', 1636)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id') as $k => $d) {
                $usuarios[$k] = $d;
        }
        return view('Sicosocial.index', ['accion' => 'Consentimiento'], compact('vsi', 'dato', 'nnaj', 'valor', 'usuarios'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $request['cargo1'] = User::findOrFail($request->user_doc1_id)->sis_cargo->s_cargo;
        $request['cargo2'] = User::findOrFail($request->user_doc2_id)->sis_cargo->s_cargo;
        $dato = VsiConsentimiento::create($request->all());
        return redirect()->route('VSI.consentimiento', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        $request['cargo1'] = User::findOrFail($request->user_doc1_id)->sis_cargo->s_cargo;
        $request['cargo2'] = User::findOrFail($request->user_doc2_id)->sis_cargo->s_cargo;
        $dato = VsiConsentimiento::findOrFail($id1);
        $dato->fill($request->all())->save();
        return redirect()->route('VSI.consentimiento', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'user_doc1_id' => 'required|exists:users,id',
            'user_doc2_id' => 'required|exists:users,id',
        ]);
    }
}