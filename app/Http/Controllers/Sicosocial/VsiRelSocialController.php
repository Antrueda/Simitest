<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiRelSociales;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;

class VsiRelSocialController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsirelsocial-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsirelsocial-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiRelSociales->where('activo', 1)->sortByDesc('id')->first();
        $contextos = Tema::findOrFail(160)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $contextos1 = Tema::findOrFail(168)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $dificultades = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(169)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $dificultades[$k] = $d;
        }
        return view('Sicosocial.index', ['accion' => 'RelSocial'], compact('vsi', 'dato', 'nnaj', 'valor', 'contextos', 'contextos1', 'dificultades'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if (in_array(689, $request->dificultades)) {
            $request['prm_dificultad_id'] = null;
            $request['completa'] = null;
        }
        $dato = VsiRelSociales::grabar($request->all(), '');
        foreach ($request->facilitas as $d) {
            $dato->facilitas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        foreach ($request->dificultades as $d) {
            $dato->dificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 97);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 101);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 102);
        return redirect()->route('VSI.relsocial', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if (in_array(689, $request->dificultades)) {
            $request['prm_dificultad_id'] = null;
            $request['completa'] = null;
        }
        $dato = VsiRelSociales::grabar($request->all(), VsiRelSociales::findOrFail($id1));
        $dato->fill($request->all())->save();
        $dato->facilitas()->detach();
        foreach ($request->facilitas as $d) {
            $dato->facilitas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        $dato->dificultades()->detach();
        foreach ($request->dificultades as $d) {
            $dato->dificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 97);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 101);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 102);
        return redirect()->route('VSI.relsocial', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'descripcion' => 'required|string|max:4000',
            'prm_dificultad_id' => 'nullable|exists:parametros,id',
            'completa' => 'nullable|string|max:4000',
            'facilitas' => 'required|array',
            'dificultades' => 'required|array',
        ]);
    }
}
