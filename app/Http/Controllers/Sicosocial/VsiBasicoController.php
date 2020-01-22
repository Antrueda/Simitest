<?php

namespace App\Http\Controllers\Sicosocial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\sistema\SisNnaj;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class VsiBasicoController extends Controller{

    public function __construct(){
        $this->middleware(['permission:vsidatobasico-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:vsidatobasico-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $vsi = Vsi::findOrFail($id);
        $dato = $vsi->nnaj;
        $nnaj = $dato->FiDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $documentos = Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sindocumento = Tema::findOrFail(286)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sexo = Tema::findOrFail(11)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $genero = Tema::findOrFail(12)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sexual = Tema::findOrFail(13)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $razones = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(102)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $razones[$k] = $d;
        }
        $personas = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $personas[$k] = $d;
        }
        $situaciones = Tema::findOrFail(131)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $emociones = Tema::findOrFail(195)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $hoy = Carbon::today()->isoFormat('YYYY-MM-DD');
        $edad = Carbon::today()->sub(28, 'years')->isoFormat('YYYY-MM-DD');
        return view('Sicosocial.index', ['accion' => 'Basico'], compact('dato', 'nnaj', 'vsi', 'documentos', 'sino', 'sindocumento', 'sexo', 'genero', 'sexual', 'razones', 'personas', 'situaciones', 'emociones', 'hoy', 'edad'));
    }

    public function storeRazon(Request $request){
        $this->validatorRazon($request->all())->validate();
        $dato = VsiDatosVincula::create($request->all());
        foreach ($request->situaciones as $d) {
            $dato->situaciones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        foreach ($request->emociones as $d) {
            $dato->emociones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
        }
        Vsi::indicador($dato->vsi->sis_nnaj_id, 52);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 70);
        Vsi::indicador($dato->vsi->sis_nnaj_id, 107);
        return redirect()->route('VSI.basico', $request->vsi_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){
        $this->validator($request->all())->validate();
        if ($request->prm_doc_fisico_id == 227) {
            $request["prm_sin_fisico_id"] = null;
        }
        $dato = FiDatosBasico::findOrFail($id1);
        $dato->fill($request->all())->save();
        Vsi::indicador($dato->vsi->sis_nnaj_id, 52);
        return redirect()->route('VSI.basico', $id)->with('info', 'Registro actualizado con éxito');
    }

    public function destroyRazon($id, $id1){
        $dato = VsiDatosVincula::findOrFail($id1);
        $dato->sis_esta_id = 2;
        $dato->save();
        return redirect()->route('VSI.basico', $id)->with('info', 'Registro eliminado con éxito');
    }

    protected function validator(array $data){
        $edad = Carbon::today()->sub(28, 'years')->isoFormat('YYYY-MM-DD');
        return Validator::make($data, [
            'sis_nnaj_id' => 'required|exists:sis_nnajs,id',
            's_primer_apellido' => 'required|string|max:120',
            's_segundo_apellido' => 'nullable|string|max:120',
            's_primer_nombre' => 'required|string|max:120',
            's_segundo_nombre' => 'nullable|string|max:120',
            's_nombre_identitario' => 'nullable|string|max:120',
            's_apodo' => 'nullable|string|max:120',
            'prm_documento_id' => 'required|exists:parametros,id',
            'prm_doc_fisico_id' => 'required|exists:parametros,id',
            'i_prm_ayuda_id' => 'required_if:prm_doc_fisico_id,228',
            's_documento' => 'required|string|max:120',
            'd_nacimiento' => 'required|date|after:'.$edad,
            'prm_sexo_id' => 'required|exists:parametros,id',
            'prm_identidad_genero_id' => 'required|exists:parametros,id',
            'prm_orientacion_sexual_id' => 'required|exists:parametros,id',
        ]);
    }

    protected function validatorRazon(array $data){
        return Validator::make($data, [
            'vsi_id' => 'required|exists:vsis,id',
            'prm_razon_id' => 'required|exists:parametros,id',
            'prm_persona_id' => 'required|exists:parametros,id',
            'dia' => 'required|integer|min:0|max:99',
            'mes' => 'required|integer|min:0|max:99',
            'ano' => 'required|integer|min:0|max:99',
            'situaciones' => 'required|array',
            'emociones' => 'required|array'
        ]);
    }
}
