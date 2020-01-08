<?php

namespace App\Http\Controllers\Sicosocial;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VsiAreaAjusteController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsiareaajuste-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsiareaajuste-editar'], ['only' => ['show, store']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $emocionales = Tema::findOrFail(162)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sexuales = Tema::findOrFail(163)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $comportamentales = Tema::findOrFail(164)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $academicas = Tema::findOrFail(165)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sociales = Tema::findOrFail(166)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiares = Tema::findOrFail(167)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        return view('Sicosocial.index', ['accion' => 'AreaAjuste'], compact('vsi', 'dato', 'nnaj', 'emocionales', 'sexuales', 'comportamentales', 'academicas', 'sociales', 'familiares'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        $dato = Vsi::findOrFail($request->vsi_id);
        $dato->emocionales()->detach();
        if($request->emocionales){
            foreach ($request->emocionales as $d) {
                $dato->emocionales()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->sexuales()->detach();
        if($request->sexuales){
            foreach ($request->sexuales as $d) {
                $dato->sexuales()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->comportamentales()->detach();
        if($request->comportamentales){
            foreach ($request->comportamentales as $d) {
                $dato->comportamentales()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->academicas()->detach();
        if($request->academicas){
            foreach ($request->academicas as $d) {
                $dato->academicas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->sociales()->detach();
        if($request->sociales){
            foreach ($request->sociales as $d) {
                $dato->sociales()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->familiares()->detach();
        if($request->familiares){
            foreach ($request->familiares as $d) {
                $dato->familiares()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }

        Vsi::indicador($dato->sis_nnaj_id,84);
        Vsi::indicador($dato->sis_nnaj_id,85);
        Vsi::indicador($dato->sis_nnaj_id,86);
        Vsi::indicador($dato->sis_nnaj_id,87);
        Vsi::indicador($dato->sis_nnaj_id,88);
        Vsi::indicador($dato->sis_nnaj_id,89);
        
        return redirect()->route('VSI.areaajuste', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'emocionales' => 'nullable|array',
            'sexuales' => 'nullable|array',
            'comportamentales' => 'nullable|array',
            'academicas' => 'nullable|array',
            'sociales' => 'nullable|array',
            'familiares' => 'nullable|array',
        ]);
    }
}
