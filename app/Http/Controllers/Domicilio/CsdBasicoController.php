<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tema;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdDatosBasico;
use App\Models\sicosocial\Vsi;
use Illuminate\Support\Facades\Validator;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;

class CsdBasicoController extends Controller{

    public function __construct(){
        $this->middleware(['permission:csddatobasico-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:csddatobasico-editar'], ['only' => ['show, update']]);
    }

    public function show($id){
        $dato = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
        $valor = $dato->CsdDatosBasico->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $documentos = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(3)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $documentos[$k] = $d;
        }
        $sino = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sindocumento = Tema::findOrFail(286)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $sexo = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(11)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sexo[$k] = $d;
        }
        $genero = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(12)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $genero[$k] = $d;
        }
        $sexual = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(13)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $sexual[$k] = $d;
        }
        $grupo = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(17)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $grupo[$k] = $d;
        }
        $rh = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(18)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $rh[$k] = $d;
        }
        $claseLibreta = Tema::findOrFail(33)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $estadoCivil = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(19)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $estadoCivil[$k] = $d;
        }
        $grupoEtnico = Tema::findOrFail(20)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $grupoIndigena = Tema::findOrFail(61)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tPoblacion = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(119)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $tPoblacion[$k] = $d;
        }
        $paises = SisPai::orderBy('s_pais')->pluck('s_pais', 'id');
    
        $depajs = SisDepartamento::orderBy('s_departamento')->get();
        if(!$valor){
            $departamentos = $departamentos1 = SisDepartamento::orderBy('s_departamento')->where('sis_pais_id', 2)->pluck('s_departamento', 'id');
            $municipios = SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', 6)->pluck('s_municipio', 'id');
            $municipios1 = ['' => 'Seleccione...'];
            foreach ($municipios as $k => $d) {
                $municipios1[$k] = $d;
            }
        } else {
            if($valor->pais_id == 2){
                $departamentos = SisDepartamento::orderBy('s_departamento')->where('sis_pais_id', 2)->pluck('s_departamento', 'id');
                $municipios = SisMunicipio::combo($valor->departamento_id,false) ;
               // $municipios = SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', $valor->departamento_id)->pluck('s_municipio', 'id');
                //ddd($municipios);
            } else {
                $departamentos = SisDepartamento::orderBy('s_departamento')->where('sis_pais_id', '!=', 2)->pluck('s_departamento', 'id');
                $municipios = SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', 1)->pluck('s_municipio', 'id');
            }
            if($valor->pais_docum_id == 2){
                $departamentos1 = SisDepartamento::orderBy('s_departamento')->where('sis_pais_id', 2)->pluck('s_departamento', 'id');
                $municipios1 = ['' => 'Seleccione...'];
                foreach (SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', $valor->departamento_docum_id)->pluck('s_municipio', 'id') as $k => $d) {
                    $municipios1[$k] = $d;
                }
            } else {
                $departamentos1 = SisDepartamento::orderBy('s_departamento')->where('sis_pais_id', '!=', 2)->pluck('s_departamento', 'id');
                $municipios1 = ['' => 'Seleccione...'];
                foreach (SisMunicipio::orderBy('s_municipio')->where('sis_departamento_id', 1)->pluck('s_municipio', 'id') as $k => $d) {
                    $municipios1[$k] = $d;
                }
            }
        }

        return view('Domicilio.index', ['accion' => 'Basico'], compact('dato', 'nnajs', 'valor', 'documentos', 'sino',
                                                                       'sindocumento', 'sexo', 'genero', 'sexual', 'grupo',
                                                                       'rh', 'claseLibreta', 'estadoCivil', 'grupoEtnico',
                                                                       'grupoIndigena', 'tPoblacion',
                                                                       'paises','departamentos', 'departamentos1',
                                                                       'depajs', 'municipios', 'municipios1'));
    }

    public function store(Request $request, $id){
        $this->validator($request->all())->validate();
        $request["prm_tipofuen_id"]=2315;
        if ($request->prm_doc_fisico_id == 227) {
            $request["prm_sin_fisico_id"] = null;
        }

        if ($request->prm_sexo_id != 20) {
            $request["prm_militar_id"] = null;
            $request["prm_libreta_id"] = null;
        }
        if ($request->prm_militar_id == 228) {
            $request["prm_libreta_id"] = null;
        }
        $dato =CsdDatosBasico::create($request->all());
        Vsi::indicador($id, 122);
        return redirect()->route('CSD.basico', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1){

        $this->validator($request->all())->validate();
        if ($request->prm_doc_fisico_id == 227) {
            $request["prm_sin_fisico_id"] = null;
        }
        if ($request->prm_sexo_id != 20) {
            $request["prm_militar_id"] = null;
            $request["prm_libreta_id"] = null;
        }
        if ($request->prm_militar_id == 228) {
            $request["prm_libreta_id"] = null;
        }
        $dato = CsdDatosBasico::findOrFail($id1);
        $dato->fill($request->all())->save();
        Vsi::indicador($id, 122);
        return redirect()->route('CSD.basico', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'primer_apellido' => 'required|string|max:120',
            'segundo_apellido' => 'nullable|string|max:120',
            'primer_nombre' => 'required|string|max:120',
            'segundo_nombre' => 'nullable|string|max:120',
            'identitario' => 'nullable|string|max:120',
            'apodo' => 'nullable|string|max:120',
            'prm_documento_id' => 'required|exists:parametros,id',
            'prm_doc_fisico_id' => 'required|exists:parametros,id',
            'prm_sin_fisico_id' => 'required_if:prm_doc_fisico_id,228',
            'documento' => 'required|string|max:120',
            'nacimiento' => 'required|date',
            'prm_sexo_id' => 'required|exists:parametros,id',
            'prm_genero_id' => 'required|exists:parametros,id',
            'prm_sexual_id' => 'required|exists:parametros,id',
            'pais_id' => 'required|exists:sis_pais,id',
            'departamento_id' => 'required|exists:sis_departamentos,id',
            'municipio_id' => 'required|exists:sis_municipios,id',
            'pais_docum_id' => 'required|exists:sis_pais,id',
            'departamento_docum_id' => 'required|exists:sis_departamentos,id',
            'municipio_docum_id' => 'nullable|exists:sis_municipios,id',
            'prm_gruposang_id' => 'required|exists:parametros,id',
            'prm_factorsang_id' => 'required|exists:parametros,id',
            'prm_militar_id' => 'required_if:prm_sexo_id,20',
            'prm_libreta_id' => 'required_if:prm_militar_id,227',
            'prm_civil_id' => 'required|exists:parametros,id',
            'prm_poblacion_id' => 'nullable|exists:parametros,id',
            'prm_etnia_id' => 'required|exists:parametros,id',
            'prm_cual_id' => 'required_if:prm_etnia_id,157'
        ]);
    }
}
