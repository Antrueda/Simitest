<?php

namespace App\Http\Controllers\Domicilio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\consulta\Csd;
use App\Models\consulta\CsdConclusiones;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Models\User;

class CsdConclusionesController extends Controller
{

    public function __construct()
    {

        $this->opciones['permisox'] = 'csdconclusiones';
        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    public function show($id)
    {

        $dato  = Csd::findOrFail($id);
        $nnajs = $dato->nnajs->where('sis_esta_id', 1)->all();
        $valor = $dato->CsdConclusiones->where('sis_esta_id', 1)->sortByDesc('id')->first();
        $sino  = Tema::findOrFail(23)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $familiares = Tema::findOrFail(66)->parametros()->orderBy('nombre')->pluck('nombre', 'id');
        $usuarios = ['' => 'Seleccione...'];
        foreach (User::where('sis_esta_id', 1)->orderBy('s_primer_nombre')->orderBy('s_segundo_nombre')->orderBy('s_primer_apellido')->orderBy('s_segundo_apellido')->get()->pluck('doc_nombre_completo_cargo', 'id') as $k => $d) {
            $usuarios[$k] = $d;
        }
        return view('Domicilio.index', ['accion' => 'Conclusiones'], compact('dato', 'nnajs', 'valor', 'sino', 'usuarios', 'familiares'));
    }

    public function store(Request $request, $id)
    {

        $this->validator($request->all())->validate();
        $request["prm_tipofuen_id"] = 2315;
        $request['sis_esta_id']=1;
        $dato = CsdConclusiones::create($request->all());
        Vsi::indicador($id, 121);

        return redirect()->route('CSD.conclusiones', $request->csd_id)->with('info', 'Registro creado con éxito');
    }

    public function update(Request $request, $id, $id1)
    {
        $this->validator($request->all())->validate();
        $dato = CsdConclusiones::findOrFail($id1);
        $dato->fill($request->all())->save();
        Vsi::indicador($id, 121);
        return redirect()->route('CSD.conclusiones', $id)->with('info', 'Registro actualizado con éxito');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'csd_id'       => 'required|exists:csds,id',
            'conclusiones'      => 'required|string|max:4000',
            'persona_nombre'    => 'required|string|max:120',
            'persona_doc'       => 'required|string|max:10',
            'persona_parent_id' => 'required|exists:parametros,id',
            'user_doc1_id'    => 'required|exists:users,id',
            'user_doc2_id'    => 'nullable|exists:users,id',
        ]);
    }
}
