<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Tema;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdRedsocPasado;
use App\Models\consulta\CsdRedsocActual;
use App\Models\sicosocial\Vsi;

class CsdRedesApoyoController extends Controller{

    public function __construct(){

        $this->opciones['permisox']='csdredesapoyo';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            ]);
    }

    public function show($id){

        $dato  = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
        $valorPasado = $dato->CsdRedsocPasado->where('sis_esta_id', 1)->sortByDesc('id');
        $valorActual = $dato->CsdRedsocActual->where('sis_esta_id', 1)->sortByDesc('id');
        $sino  = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $beneficio = Tema::findOrFail(59)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tiempo  = Tema::findOrFail(4)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $tipoRed = ['' => 'Seleccione...'];
        foreach (Tema::findOrFail(88)->parametros()->orderBy('nombre')->pluck('nombre', 'id') as $k => $d) {
            $tipoRed[$k] = $d;
        }
        // $tipoRed = Tema::findOrFail(88)->parametros()->orderBy('nombre')->pluck('nombre', 'id');

        return view('Domicilio.index', ['accion' => 'RedesApoyo'], compact('dato', 'nnajs', 'sino', 'beneficio', 'tiempo', 'tipoRed', 'valorPasado', 'valorActual'));
    }

    public function storePasado(Request $request, $id){
        $this->validatorPasado($request->all())->validate();
        $request['prm_tipofuen_id']=2315;
        $dato = CsdRedsocPasado::create($request->all());
        Vsi::indicador($id, 137);
        return redirect()->route('CSD.redesapoyo', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function storeActual(Request $request, $id){
        $this->validatorActual($request->all())->validate();
        $request['prm_tipofuen_id']=2315;
        $dato = CsdRedsocActual::create($request->all());
        Vsi::indicador($id, 136);
        return redirect()->route('CSD.redesapoyo', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function destroyPasado($id, $id1){
        $dato = CsdRedsocPasado::findOrFail($id1);
        $dato->sis_esta_id = 2;
        $dato->save();
        return redirect()->route('CSD.redesapoyo', $id)->with('info', 'Registro eliminado con éxito');
    }

    public function destroyActual($id, $id1){
        $dato = CsdRedsocActual::findOrFail($id1);
        $dato->sis_esta_id = 2;
        $dato->save();
        return redirect()->route('CSD.redesapoyo', $id)->with('info', 'Registro eliminado con éxito');
    }

    protected function validatorPasado(array $data){
        return Validator::make($data, [
            'csd_id'   => 'required|exists:csds,id',
            'nombre'        => 'required|string|max:120',
            'cantidad'      => 'nullable|integer|min:1|max:99',
            'prm_unidad_id' => 'required|exists:parametros,id',
            'ano'           => 'required|integer|min:2000|max:2030',
            'servicios'     => 'required|string|max:120',
            'retiro'        => 'nullable|string|max:120',
        ]);
    }

    protected function validatorActual(array $data){
        return Validator::make($data, [
            'csd_id' => 'required|exists:csds,id',
            'prm_tipo_id' => 'required|exists:parametros,id',
            'nombre'      => 'required|string|max:120',
            'telefono'    => 'nullable|string|max:120',
            'direccion'   => 'nullable|string|max:120',
            'servicios'   => 'required|string|max:120',
        ]);
    }
}
