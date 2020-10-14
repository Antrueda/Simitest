<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdDinFamiliar;
use App\Models\consulta\CsdDinfamMadre;
use App\Models\consulta\CsdDinfamPadre;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BkCsdDinFamiliarController extends Controller{

    public function __construct(){

        $this->opciones['permisox']='csddinfamiliar';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar'
           ]);
    }

    public function show($id){
        $dato = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
        $valor = $dato->CsdDinFamiliar->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $valorMadre = $dato->CsdDinfamMadre->where('sis_esta_id', 1)->sortByDesc('id');
        $valorPadre = $dato->CsdDinfamPadre->where('sis_esta_id', 1)->sortByDesc('id');
        $antecedentes = Tema::findOrFail(97)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiar = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(98)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $familiar[$k] = $d;
        }
        $hogar = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(99)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $hogar[$k] = $d;
        }
        $familiares = ['' => 'Seleccione...'];
        foreach ( Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d){
            $familiares[$k] = $d;
        }
        $separacion = ['' => 'Seleccione...'];
        foreach ( Tema::findOrFail(176)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d){
            $separacion[$k] = $d;
        }
        $traslado = ['' => 'Seleccione...'];
        foreach ( Tema::findOrFail(100)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d){
            $traslado[$k] = $d;
        }
        $problematicas = Tema::findOrFail(102)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $reglas = Tema::findOrFail(103)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $actuan = ['' => 'Seleccione...'];
        foreach ( Tema::findOrFail(104)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d){
            $actuan[$k] = $d;
        }
        $maneras = ['' => 'Seleccione...'];
        foreach ( Tema::findOrFail(105)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d){
            $maneras[$k] = $d;
        }
        $acude = ['' => 'Seleccione...'];
        foreach ( Tema::findOrFail(106)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d){
            $acude[$k] = $d;
        }
        $incumple = Tema::findOrFail(107)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $destacan = ['' => 'Seleccione...'];
        foreach ( Tema::findOrFail(108)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d){
            $destacan[$k] = $d;
        }
        $sucesos = ['' => 'Seleccione...'];
        foreach ( Tema::findOrFail(109)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d){
            $sucesos[$k] = $d;
        }

        return view('Domicilio.index', ['accion' => 'DinFamiliar'], compact('dato', 'nnajs', 'valor', 'sino', 'antecedentes', 'valorMadre', 'valorPadre', 'familiar', 'hogar', 'familiares', 'separacion', 'traslado', 'problematicas', 'reglas', 'actuan', 'maneras', 'acude', 'incumple', 'destacan', 'sucesos'));
    }

    public function store(Request $request, $id){
        $this->validator($request->all())->validate();
        if($request->prm_familiar_id){
            $request['prm_hogar_id'] = null;
        }

        if($request->prm_hogar_id){
            $request['prm_familiar_id'] = null;
        }

        if($request->prm_bogota_id == 227) {
            $request["prm_traslado_id"] = null;
        }

        if($request->prm_norma_id == 228) {
            $request["prm_conoce_id"] = null;
            $request["establecen"] = [];
            $request["prm_actuan_id"] = null;
            $request["porque"] = null;
        }

        $dato = Csd::findOrFail($request->csd_id);
        $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
        $paso = 0;
        foreach ($nnajs as $d) {
    //            ddd($nnajs);
            if($d->FiDatosBasico->first()->edad < 18){
                $paso++;
            }
        }
        if ($paso > 0) {
            $this->validatorMenor($request->all())->validate();
        }
        $request["prm_tipofuen_id"] = 2315;
        $request['sis_esta_id']=1;
        $dato = CsdDinFamiliar::create($request->all());

        if($request->antecedentes) {
            foreach ($request->antecedentes as $d) {
                $dato->antecedentes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
            }
        }

        foreach ($request->problemas as $d) {
            $dato->problemas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
        }

        if($request->prm_norma_id == 227) {
            foreach ($request->normas as $d) {
                $dato->normas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
            }
        }

        if($request->establecen) {
            foreach ($request->establecen as $d) {
                $dato->establecen()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
            }
        }

        if($request->incumple) {
            foreach ($request->incumple as $d) {
                $dato->incumple()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
            }
        }
        Vsi::indicador($id, 123);
        Vsi::indicador($id, 124);
        Vsi::indicador($id, 125);
        Vsi::indicador($id, 126);
        Vsi::indicador($id, 128);
        Vsi::indicador($id, 130);

        return redirect()->route('CSD.dinfamiliar', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function storeMadre(Request $request, $id){
        $this->validatorMadre($request->all())->validate();
        $request["prm_tipofuen_id"] = 2315;
        $request['sis_esta_id']=1;
        if ($request->prm_convive_id==227) {
            if($request->dia + $request->mes + $request->ano == 0){
                return back()->withErrors([
                    'dia' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                    'mes' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                    'ano' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                ])->withInput();
            }
        }
        $dato = CsdDinfamMadre::create($request->all());
        Vsi::indicador($id, 127);
        return redirect()->route('CSD.dinfamiliar', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function storePadre(Request $request, $id){
        $this->validatorPadre($request->all())->validate();
        $request["prm_tipofuen_id"] = 2315;
        $request['sis_esta_id']=1;
        if ($request->prm_convive_id==227) {
            if($request->dia + $request->mes + $request->ano == 0){
                return back()->withErrors([
                    'dia' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                    'mes' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                    'ano' => 'Día, mes o año, al menos uno debe ser mayor de cero',
                ])->withInput();
            }
        }
        $dato = CsdDinfamPadre::create($request->all());
        Vsi::indicador($id, 129);
        return redirect()->route('CSD.dinfamiliar', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function storeGenograma(Request $request, $id){
        if(!is_null($request->archivo)) {
            Storage::putFileAs('public/domicilio/genograma', $request->file('archivo'), $id . '.jpg', 'public');
            return redirect()->route('CSD.dinfamiliar', $id)->with('info', 'Registro actualizado con éxito');
        } else {
            return redirect()->route('CSD.dinfamiliar', $id);
        }
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if($request->prm_familiar_id){
            $request['prm_hogar_id'] = null;
        }

        if($request->prm_hogar_id){
            $request['prm_familiar_id'] = null;
        }

        if($request->prm_bogota_id == 227) {
            $request["prm_traslado_id"] = null;
        }

        if($request->prm_norma_id == 228) {
            $request["prm_conoce_id"] = null;
            $request["establecen"] = [];
            $request["prm_actuan_id"] = null;
            $request["porque"] = null;
        }
        $dato = Csd::findOrFail($request->csd_id);
        $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
        $paso = 0;
        foreach ($nnajs as $d) {
            if($d->FiDatosBasico->first()->edad < 18){
                $paso++;
            }
        }
        if ($paso > 0) {
            $this->validatorMenor($request->all())->validate();
        }
        $dato = CsdDinFamiliar::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->antecedentes()->detach();
        if($request->antecedentes) {
            foreach ($request->antecedentes as $d) {
                $dato->antecedentes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
            }
        }

        $dato->problemas()->detach();
        foreach ($request->problemas as $d) {
            $dato->problemas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
        }

        $dato->normas()->detach();
        if($request->prm_norma_id == 227) {
            foreach ($request->normas as $d) {
                $dato->normas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
            }
        }

        $dato->establecen()->detach();
        if($request->establecen) {
            foreach ($request->establecen as $d) {
                $dato->establecen()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
            }
        }

        $dato->incumple()->detach();
        if($request->incumple) {
            foreach ($request->incumple as $d) {
                $dato->incumple()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
            }
        }
        Vsi::indicador($id, 123);
        Vsi::indicador($id, 124);
        Vsi::indicador($id, 125);
        Vsi::indicador($id, 126);
        Vsi::indicador($id, 128);
        Vsi::indicador($id, 130);

        return redirect()->route('CSD.dinfamiliar', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function destroyMadre($id, $id1){
        $dato = CsdDinfamMadre::findOrFail($id1);
        $dato->sis_esta_id = 2;
        $dato->save();
        return redirect()->route('CSD.dinfamiliar', $id)->with('info', 'Registro eliminado con éxito');
    }

    public function destroyPadre($id, $id1){
        $dato = CsdDinfamPadre::findOrFail($id1);
        $dato->sis_esta_id = 2;
        $dato->save();
        return redirect()->route('CSD.dinfamiliar', $id)->with('info', 'Registro eliminado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'descripcion' => 'nullable|string|max:4000',
            'relevantes' => 'required|string|max:4000',
            'prm_familiar_id' => 'required_without:prm_hogar_id',
            'prm_hogar_id' => 'required_without:prm_familiar_id',
            'descripcion_0' => 'required|string|max:4000',
            'prm_bogota_id' => 'required|exists:parametros,id',
            'prm_traslado_id' => 'required_if:prm_bogota_id,228',
            'jefe1' => 'nullable|string|max:120',
            'prm_jefe1_id' => 'nullable|exists:parametros,id',
            'jefe2' => 'nullable|string|max:120',
            'prm_jefe2_id' => 'nullable|exists:parametros,id',
            'descripcion_1' => 'required|string|max:4000',
            'prm_cuidador_id' => 'nullable|exists:parametros,id',
            'descripcion_2' => 'required|string|max:4000',
            'afronta' => 'required|string|max:4000',
            'prm_norma_id' => 'required|exists:parametros,id',
            'prm_conoce_id' => 'required_if:prm_norma_id,227',
            'establecen' => 'required_if:prm_norma_id,227|array',
            'observacion' => 'required|string|max:4000',
            'prm_actuan_id' => 'required_if:prm_norma_id,227',
            'porque' => 'nullable|string|max:4000',
            'prm_solucion_id' => 'required|exists:parametros,id',
            'prm_problema_id' => 'required|exists:parametros,id',
            'prm_destaca_id' => 'required|exists:parametros,id',
            'prm_positivo_id' => 'required|exists:parametros,id',
            'antecedentes' => 'nullable|array',
            'problemas' => 'required|array',
            'incumple' => 'required|array',
            'normas' => 'required_if:prm_norma_id,227|array',
        ]);
    }

    protected function validatorMenor(array $data){
        return Validator::make($data, [
            'jefe1' => 'required|string|max:120',
            'prm_jefe1_id' => 'required|exists:parametros,id',
        ]);
    }

    protected function validatorMadre(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'prm_convive_id' => 'required|exists:parametros,id',
            'dia' => 'exclude_if:prm_convive_id,228|min:0|max:30',
            'mes' => 'exclude_if:prm_convive_id,228|min:0|max:11',
            'ano' => 'exclude_if:prm_convive_id,228|min:0|max:99',
            'hijo' => 'required|integer|min:0|max:99',
            'prm_separa_id' => 'nullable|exists:parametros,id',
        ]);
    }

    protected function validatorPadre(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'prm_convive_id' => 'required|exists:parametros,id',
            'dia' => 'exclude_if:prm_convive_id,228|min:0|max:30',
            'mes' => 'exclude_if:prm_convive_id,228|min:0|max:11',
            'ano' => 'exclude_if:prm_convive_id,228|min:0|max:99',
            'hijo' => 'required|integer|min:0|max:99',
            'prm_separa_id'  => 'nullable|exists:parametros,id',
        ]);
    }
}
