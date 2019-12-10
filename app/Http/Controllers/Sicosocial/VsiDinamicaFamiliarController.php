<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiDinFamiliar;
use App\Models\sicosocial\VsiDinfamMadre;
use App\Models\sicosocial\VsiDinfamPadre;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class VsiDinamicaFamiliarController extends Controller{
    public function __construct(){
        $this->middleware(['permission:vsidinfamiliar-crear'], ['only' => ['show, store, storeMadre, storePadre']]);
        $this->middleware(['permission:vsidinfamiliar-editar'], ['only' => ['show, update, destroyMadre, destroyPadre']]);
    }
  
    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj  = $dato->FiDatosBasico->where('activo', 1)->sortByDesc('id')->first();
        $valor = $vsi->VsiDinFamiliar->where('activo', 1)->sortByDesc('id')->first();
        $valorMadre = $vsi->VsiDinfamMadre->where('activo', 1)->sortBy('id');
        $valorPadre = $vsi->VsiDinfamPadre->where('activo', 1)->sortBy('id');
        $sino = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sino[$k] = $d;
        }
        $familiar = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(98)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $familiar[$k] = $d;
        }
        $hogar = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(99)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $hogar[$k] = $d;
        }
        $familiares = Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $ausencia = Tema::findOrFail(292)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $separacion = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(176)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $separacion[$k] = $d;
        }
        return view('Sicosocial.index', ['accion' => 'DinFamiliar'], compact('vsi', 'dato', 'nnaj', 'valor', 'valorMadre', 'valorPadre', 'sino', 'familiar', 'hogar', 'familiares', 'ausencia', 'separacion'));
    }

    public function store(Request $request){
        $this->validator($request->all())->validate();
        if($request->prm_familiar_id){
            $request['prm_hogar_id'] = null;
        }
        if($request->prm_hogar_id){
            $request['prm_familiar_id'] = null;
        }
        $dato = Vsi::findOrFail($request->vsi_id);
        $dato = VsiDinFamiliar::create($request->all());
        if($request->calles){
            foreach ($request->calles as $d) {
                $dato->calles()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->delitos){
            foreach ($request->delitos as $d) {
                $dato->delitos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->prostituciones){
            foreach ($request->prostituciones as $d) {
                $dato->prostituciones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->libertades){
            foreach ($request->libertades as $d) {
                $dato->libertades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->consumo){
            foreach ($request->consumo as $d) {
                $dato->consumo()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->salud){
            foreach ($request->salud as $d) {
                $dato->salud()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->cuidador){
            foreach ($request->cuidador as $d) {
                $dato->cuidador()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        if($request->ausencia){
            foreach ($request->ausencia as $d) {
                $dato->ausencia()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        return redirect()->route('VSI.dinfamiliar', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function storeMadre(Request $request){
        $this->validatorMadre($request->all())->validate();
        if ($request->prm_convive_id==227) {
            if($request->dia + $request->mes + $request->ano == 0){
                return back()->withErrors([
                    'dia' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                    'mes' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                    'ano' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                ])->withInput();
            }
        }
        $dato = VsiDinfamMadre::create($request->all());
        return redirect()->route('VSI.dinfamiliar', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function storeGenograma(Request $request, $id){
        if(!is_null($request->archivo)) {
            Storage::putFileAs('public/sicosocial/genograma', $request->file('archivo'), $id . '.jpg', 'public');
            return redirect()->route('VSI.dinfamiliar', $id)->with('info', 'Registro actualizado con éxito');
        } else {
            return redirect()->route('VSI.dinfamiliar', $id);
        }
    }

    public function storePadre(Request $request){
        $this->validatorPadre($request->all())->validate();
        if ($request->prm_convive_id==227) {
            if($request->dia + $request->mes + $request->ano == 0){
                return back()->withErrors([
                    'dia' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                    'mes' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                    'ano' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                ])->withInput();
            }
        }
        $dato = VsiDinfamPadre::create($request->all());
        return redirect()->route('VSI.dinfamiliar', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        
        if ($request->cuidador) {
            foreach ($request->cuidador as $d) {
                if ($d == 235) {
                    $request['quien_asume'] = 235;
                }
            }
        }

        $this->validator($request->all())->validate();
        if($request->prm_familiar_id){
            $request['prm_hogar_id'] = null;
        }
        if($request->prm_hogar_id){
            $request['prm_familiar_id'] = null;
        }
        $dato = Vsi::findOrFail($request->vsi_id);
        $dato = VsiDinFamiliar::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->calles()->detach();
        if($request->calles){
            foreach ($request->calles as $d) {
                $dato->calles()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->delitos()->detach();
        if($request->delitos){
            foreach ($request->delitos as $d) {
                $dato->delitos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->prostituciones()->detach();
        if($request->prostituciones){
            foreach ($request->prostituciones as $d) {
                $dato->prostituciones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->libertades()->detach();
        if($request->libertades){
            foreach ($request->libertades as $d) {
                $dato->libertades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->consumo()->detach();
        if($request->consumo){
            foreach ($request->consumo as $d) {
                $dato->consumo()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->salud()->detach();
        if($request->salud){
            foreach ($request->salud as $d) {
                $dato->salud()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->cuidador()->detach();
        if($request->cuidador){
            foreach ($request->cuidador as $d) {
                $dato->cuidador()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dato->ausencia()->detach();
        if($request->ausencia){
            foreach ($request->ausencia as $d) {
                $dato->ausencia()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        return redirect()->route('VSI.dinfamiliar', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function destroyMadre($id, $id1){
        $dato = VsiDinfamMadre::findOrFail($id1);
        $dato->activo = 0;
        $dato->save();
        return redirect()->route('VSI.dinfamiliar', $id)->with('info', 'Registro eliminado con éxito');
    }

    public function destroyPadre($id, $id1){
        $dato = VsiDinfamPadre::findOrFail($id1);
        $dato->activo = 0;
        $dato->save();
        return redirect()->route('VSI.dinfamiliar', $id)->with('info', 'Registro eliminado con éxito');
    }
    
    protected function validator(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_familiar_id' => 'required_without:prm_hogar_id',
            'prm_hogar_id' => 'required_without:prm_familiar_id',
            'cuidador' => 'nullable|array',
            'lugar' => 'required|string|max:4000',
            'ausencia' => 'nullable|array',
            'descripcion' => 'required|string|max:4000',
            'calles' => 'nullable|array',
            'delitos' => 'nullable|array',
            'prostituciones' => 'nullable|array',
            'libertades' => 'nullable|array',
            'consumo' => 'nullable|array',
            'salud' => 'nullable|array',
        ]);
    }

    protected function validatorMadre(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_convive_id' => 'required|exists:parametros,id',
            'dia' => 'required|integer|min:0|max:99',
            'mes' => 'required|integer|min:0|max:99',
            'ano' => 'required|integer|min:0|max:99',
            'hijo' => 'required|integer|min:0|max:99',
            'prm_separa_id' => 'nullable|exists:parametros,id',
        ]);
    }

    protected function validatorPadre(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_convive_id' => 'required|exists:parametros,id',
            'dia' => 'required|integer|min:0|max:99',
            'mes' => 'required|integer|min:0|max:99',
            'ano' => 'required|integer|min:0|max:99',
            'hijo' => 'required|integer|min:0|max:99',
            'prm_separa_id' => 'nullable|exists:parametros,id',
        ]);
    }
}