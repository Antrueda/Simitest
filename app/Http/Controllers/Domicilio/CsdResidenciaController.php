<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdResidencia;
use App\Models\sicosocial\Vsi;
use App\Models\Sistema\SisBarrio;
use App\Models\Tema;
use Illuminate\Support\Facades\Validator;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisUpz;

class CsdResidenciaController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:csdresidencia-crear'], ['only' => ['show, store']]);
        $this->middleware(['permission:csdresidencia-editar'], ['only' => ['show, update']]);
    }

    public function show($id, Request $request)
    {
        $dato = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
        $valor = $dato->CsdResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $sino = Tema::combo(23, true, false);

        $actual = Tema::combo(36, true, false);

        $tipo = Tema::combo(34, true, false);
        $zona = Tema::combo(37, true, false);
        $muros = Tema::combo(91, true, false);
        $pisos = Tema::combo(90, true, false);
        $estado = Tema::combo(93, true, false);
        $condiciones = Tema::combo(42, true, false);
        $residencia = Tema::combo(35, true, false);
        $estrato = Tema::combo(41, true, false);
        $alfabeto = Tema::combo(39, true, false);
        $cuadrante = Tema::combo(38, true, false);
        $tViaPrincipal = Tema::combo(62, true, false);
        // $localidadjs = SisLocalidad::orderBy('s_localidad')->get();
        $localidades = SisLocalidad::combo();
        $upzs = ['' => 'Seleccione'];
        $barrios = ['' => 'Seleccione'];
        if (isset($valor->id)) {
            $barrioxx=$valor->sis_upzbarri->sis_localupz;
            $valor->sis_localidad_id=$barrioxx->sis_localidad_id;
            $valor->sis_upz_id=$barrioxx->id;
            // ddd($valor->sis_localidad_id . ' ' . $valor->sis_upz_id);
            $upzs = SisUpz::combo($barrioxx->sis_localidad_id, false);
            $barrios = SisBarrio::combo($barrioxx->id, false);
        }

        return view('Domicilio.index', ['accion' => 'Residencia'],
        compact('dato', 'nnajs', 'valor', 'sino', 'residencia', 'tipo', 'actual',
        'zona', 'tViaPrincipal', 'alfabeto', 'cuadrante', 'estrato', 'condiciones',
        'pisos', 'muros', 'estado',
        // 'localidadjs',
        'localidades', 'upzs', 'barrios'));
    }

    public function store(Request $request, $id)
    {
        $this->validator($request->all())->validate();
        $request["prm_tipofuen_id"] = 2315;
        if ($request->prm_dir_zona_id == 288 || $request->prm_dir_zona_id == 289) {
            $request["prm_dir_via_id"] = null;
            $request["dir_nombre"] = null;
            $request["prm_dir_alfavp_id"] = null;
            $request["prm_dir_bis_id"] = null;
            $request["prm_dir_alfabis_id"] = null;
            $request["prm_dir_cuadrantevp_id"] = null;
            $request["dir_generadora"] = null;
            $request["prm_dir_alfavg_id"] = null;
            $request["dir_placa"] = null;
            $request["prm_dir_cuadrantevg_id"] = null;
            $request["prm_estrato_id"] = null;
        }
        if ($request->prm_dir_zona_id == 289) {
            $request["dir_complemento"] = null;
        }
        $dato = CsdResidencia::create($request->all());
        foreach ($request->ambientes as $d) {
            $dato->ambientes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1, 'prm_tipofuen_id' => 2315]);
        }
        Vsi::indicador($id, 138);
        Vsi::indicador($id, 139);
        return redirect()->route('CSD.residencia', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1)
    {
        $this->validator($request->all())->validate();
        if ($request->prm_dir_zona_id == 288 || $request->prm_dir_zona_id == 289) {
            $request["prm_dir_via_id"] = null;
            $request["dir_nombre"] = null;
            $request["prm_dir_alfavp_id"] = null;
            $request["prm_dir_bis_id"] = null;
            $request["prm_dir_alfabis_id"] = null;
            $request["prm_dir_cuadrantevp_id"] = null;
            $request["dir_generadora"] = null;
            $request["prm_dir_alfavg_id"] = null;
            $request["dir_placa"] = null;
            $request["prm_dir_cuadrantevg_id"] = null;
            $request["prm_estrato_id"] = null;
        }
        if ($request->prm_dir_zona_id == 289) {
            $request["dir_complemento"] = null;
        }
        $dato = CsdResidencia::findOrFail($id1);
        $dato->fill($request->all())->save();
        $dato->ambientes()->detach();
        foreach ($request->ambientes as $d) {
            $dato->ambientes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1, 'prm_tipofuen_id' => 2315]);
        }
        Vsi::indicador($id, 138);
        Vsi::indicador($id, 139);
        return redirect()->route('CSD.residencia', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'prm_tipo_id' => 'required|exists:parametros,id',
            'prm_es_id' => 'required|exists:parametros,id',
            'prm_dir_tipo_id' => 'required|exists:parametros,id',
            'prm_dir_zona_id' => 'required|exists:parametros,id',
            'prm_dir_via_id' => 'required_if:prm_dir_zona_id,287|exists:parametros,id',
            'dir_nombre' => 'required_if:prm_dir_zona_id,287|max:120',
            'prm_dir_alfavp_id' => 'nullable|exists:parametros,id',
            'prm_dir_bis_id' => 'required_if:prm_dir_zona_id,287|exists:parametros,id',
            'prm_dir_alfabis_id' => 'nullable|exists:parametros,id',
            'prm_dir_cuadrantevp_id' => 'nullable|exists:parametros,id',
            'dir_generadora' => 'required_if:prm_dir_zona_id,287|max:120',
            'prm_dir_alfavg_id' => 'nullable|exists:parametros,id',
            'dir_placa' => 'required_if:prm_dir_zona_id,287|max:120',
            'prm_dir_cuadrantevg_id' => 'nullable|exists:parametros,id',
            'prm_estrato_id' => 'required_if:prm_dir_zona_id,287|exists:parametros,id',
            'dir_complemento' => 'required_if:prm_dir_zona_id,288|max:120',
            'sis_localidad_id' => 'required|exists:sis_localidads,id',
            'sis_upz_id' => 'required|exists:sis_upzs,id',
            'sis_barrio_id' => 'exists:sis_barrios,id',
            'telefono_uno' => 'nullable|string|max:120',
            'telefono_dos' => 'required|string|max:120',
            'telefono_tres' => 'nullable|string|max:120',
            'email' => 'nullable|email|max:120',
            'prm_piso_id' => 'required|exists:parametros,id',
            'prm_muro_id' => 'required|exists:parametros,id',
            'prm_higiene_id' => 'required|exists:parametros,id',
            'prm_ventilacion_id' => 'required|exists:parametros,id',
            'prm_iluminacion_id' => 'required|exists:parametros,id',
            'prm_orden_id' => 'required|exists:parametros,id',
            'ambientes' => 'required|array',
        ]);
    }

    public function getLocaliUpz(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [];
            switch ($request->upzbarri) {
                case 1: // upzs
                    $respuest = SisUpz::combo($request->padrexxx, true);
                    break;
                case 2: // barrios
                    $respuest = SisBarrio::combo($request->padrexxx, true);
                    break;
            }
            return response()->json($respuest);
        }
    }
}
