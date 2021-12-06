<?php

namespace App\Http\Controllers\Administracion\Intervencion;

use App\Models\Parametro;
use App\Models\Temacombo;
use Illuminate\Support\Str;
use App\Models\sistema\SisEsta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Administracion\Parametros\CrearTipoAtencionParametroRequest;
use App\Http\Requests\Administracion\Parametros\EditarTipoAtencionParametroRequest;
use Illuminate\Support\Facades\DB;

class TipoAtencionController extends Controller
{

    public $temacombo;
    public $tituloxx;
    public $botoncrea;
    public $botonsave;
    public $rutaxxxx;
    public $asignruta;
    public $carpetaResource;


    public function __construct()
    {
        $this->temacombo = 356;
        $this->tituloxx = 'TIPOS DE ATENCIÓN';
        $this->botoncrea = 'NUEVO REGISTRO';
        $this->botonsave = true;
        $this->rutaxxxx = 'tipoatencion';
        $this->asignruta = 'intarea';
        $this->carpetaResource = 'TipoAtencion';
    }

    /**
     * Display a listing of the resource.=
     * 212
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = Temacombo::with('parametros')->find($this->temacombo);

        return view(
            'administracion.intervenciones.TipoAtencion.index',
            [
                'resultado' => $resultado,
                'tituloxx' => $this->tituloxx,
                'botoncrea' => $this->botoncrea,
                'rutaxxxx' => $this->rutaxxxx,
                'asignruta' => $this->asignruta,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoxx = SisEsta::get(['id', 's_estado']);
        return view(
            'administracion.intervenciones.TipoAtencion.crear',
            [
                'tituloxx'  => $this->tituloxx,
                'estadoxx' => $estadoxx,
                'botoncrea' => null,
                'salvarxxx' => $this->botonsave,
                'rutaxxxx' => $this->rutaxxxx,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearTipoAtencionParametroRequest $request)
    {

        $parametro = Parametro::where('nombre', Str::upper($request->nombre))->first();

        if (is_null($parametro)) {

            $parametro = Parametro::create([
                'nombre' => $request->nombre,
                'sis_esta_id' =>  $request->sis_esta_id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ]);
        }

        $parametro->temacombos()->attach([
            'temacombo_id' => $this->temacombo
        ]);

        return redirect()->route($this->rutaxxxx . '.index')->with('info', 'Parametro Tipo de Atencion creado exitosamente,');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $parametro = Parametro::findOrFail($id);
        return view(
            'administracion.intervenciones.TipoAtencion.ver',
            [
                'parametro' => $parametro,
                'tituloxx' => $this->tituloxx,
                'botoncrea' => null,
                'salvarxxx' => false,
                'rutaxxxx' => $this->rutaxxxx,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parametro = Parametro::findOrFail($id);
        $estadoxx = SisEsta::get(['id', 's_estado']);

        return view(
            'administracion.intervenciones.TipoAtencion.editar',
            [
                'parametro' => $parametro,
                'tituloxx' => $this->tituloxx,
                'estadoxx' => $estadoxx,
                'botoncrea' => null,
                'salvarxxx' => $this->botonsave,
                'rutaxxxx' => $this->rutaxxxx,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function update(EditarTipoAtencionParametroRequest $request, $id)
    {
        $parametro = Parametro::where('nombre', Str::upper($request->nombre))->first();

        $parametro_old = Parametro::findOrFail($id);
        $parametro_old->temacombos()->detach(); // se elimina el anterior del pivote.

        if (!is_null($parametro)) { // SI EL Nombre del parametro recibido existe en tabla, se actualiza la relacion.

            // se asigna el nuevo valor.
            $parametro->temacombos()->attach([
                'temacombo_id' => $this->temacombo
            ]);
        } else { // EL Nombre del parametro recibido no existe en tabla, se crea y asigna la relacion.

            $parametro = Parametro::create([
                'nombre' => $request->nombre,
                'sis_esta_id' =>  $request->sis_esta_id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ]);
            $parametro->temacombos()->attach([
                'temacombo_id' => $this->temacombo
            ]);
        }

        return redirect()->route($this->rutaxxxx . '.index')->with('info', 'Parametro Tipo de Atencion editado exitosamente,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parametro = Parametro::findOrFail($id);

        $estado = ($parametro->sis_esta_id == 1) ? 2 : 1;

        $parametro->fill([
            'sis_esta_id' =>  $estado,
            'user_edita_id' => Auth::user()->id,
        ]);

        $parametro->save();

        return redirect()->route($this->rutaxxxx . '.index')->with('info', 'Parametro Tipo de Atencion cambiado de estado exitosamente.');
    }

    public function listarAtencionActivos()
    {
        $atencion = DB::table('temacombos as t')
            ->join('parametro_temacombo as pt', 't.id', '=', 'pt.temacombo_id')
            ->join('parametros as p', 'p.id', '=', 'pt.parametro_id')
            ->where('pt.temacombo_id', $this->temacombo)
            ->where('p.sis_esta_id', 1)
            ->orderBy('p.nombre', 'asc')
            ->get(['p.nombre', 'p.id']);

        return response()->json(['data' => $atencion]);
    }
}
