<?php

namespace App\Http\Controllers\Administracion\Intervencion;

use App\Models\Parametro;
use App\Models\Temacombo;
use Illuminate\Support\Str;
use App\Models\sistema\SisEsta;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\sistema\ParametroArea;
use App\Http\Requests\Administracion\Parametros\ParametroAreaRequest;

class AreaAjusteController extends Controller
{
    public $temacombo;
    public $tituloxx;
    public $botoncrea;
    public $botonsave;
    public $rutaxxxx;
    public $asignruta;

    public function __construct()
    {
        $this->tituloxx = 'ÁREA DE AJUSTE';
        $this->botoncrea = 'NUEVO REGISTRO';
        $this->temacombo = 212;
        $this->botonsave = true;
        $this->rutaxxxx = 'intarea';
        $this->asignruta = 'intsubarea';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($atencion)
    {

        $resultado = ParametroArea::where('prm_atencion_id', $atencion)->get();

        return view(
            'administracion.intervenciones.AreasAjuste.index',
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
        $areasAjuste = Temacombo::with('parametros')->find($this->temacombo);

        return view(
            'administracion.intervenciones.AreasAjuste.crear',
            [
                'tituloxx'  => $this->tituloxx,
                'estadoxx' => $estadoxx,
                'botoncrea' => null,
                'salvarxxx' => $this->botonsave,
                'rutaxxxx' => $this->rutaxxxx,
                'areasAjuste' => $areasAjuste->parametros,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Parametro $atencion, ParametroAreaRequest $request)
    {
        // Se verifica si el campo nombre esta vacio, en caso de ser null se crea directamente como parametro padre e hijo directamente.
        if (is_null($request->nombre)) {

            ParametroArea::create([
                'prm_atencion_id'  =>  $atencion->id,
                'prm_area_id'  => $request->parametro_id,
                'sis_esta_id' =>  $request->sis_esta_id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ]);

            /*
            Se verifica si el campo nombre no esta vacio, se consulta la existencia en la tabla parametro.
            si no existe se crea y se resguarda el valor. asociado a este.
        */
        } else {

            $parametro = Parametro::where('nombre', Str::upper($request->nombre))->first();

            if (is_null($parametro)) {

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

            ParametroArea::create([
                'prm_atencion_id'  => $atencion->id,
                'prm_area_id'  => $parametro->id,
                'sis_esta_id'  => $request->sis_esta_id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ]);
        }

        return redirect()->route($this->rutaxxxx . '.index', ['atencion' => $atencion->id])->with('info', 'Parametro Area de Ajuste creado exitosamente,');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function show(Parametro $atencion, ParametroArea $intarea)
    {
        return view(
            'administracion.intervenciones.AreasAjuste.ver',
            [
                'tituloxx'  => $this->tituloxx,
                'botoncrea' => null,
                'salvarxxx' => false,
                'rutaxxxx' => $this->rutaxxxx,
                'parametro' => $intarea,
                'atencion' => $atencion,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function edit(Parametro $atencion, ParametroArea $intarea)
    {
        $estadoxx = SisEsta::get(['id', 's_estado']);
        $areasAjuste = Temacombo::with('parametros')->find($this->temacombo);

        return view(
            'administracion.intervenciones.AreasAjuste.editar',
            [
                'tituloxx'  => $this->tituloxx,
                'estadoxx' => $estadoxx,
                'botoncrea' => null,
                'salvarxxx' => $this->botonsave,
                'rutaxxxx' => $this->rutaxxxx,
                'areasAjuste' => $areasAjuste->parametros,
                'parametro' => $intarea,
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
    public function update(Parametro $atencion, ParametroAreaRequest $request, ParametroArea $intarea)
    {
        if (is_null($request->nombre)) {

            $intarea->fill([
                'prm_atencion_id'  =>  $atencion->id,
                'prm_area_id'  => $request->parametro_id,
                'sis_esta_id'  => $request->sis_esta_id,
                'user_edita_id' => Auth::user()->id,
            ]);
            $intarea->save();

            $parametro = Parametro::findOrFail($intarea->prm_area_id);

            $parametro->fill([
                'sis_esta_id' =>  $request->sis_esta_id,
                'user_edita_id' => Auth::user()->id,
            ]);

            $parametro->save();
        } else {

            $parametro = Parametro::where('nombre', Str::upper($request->nombre))->first();

            if (is_null($parametro)) {

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

            $intarea->fill([
                'prm_atencion_id'  =>  $atencion->id,
                'prm_area_id'  => $parametro->id,
                'sis_esta_id'  => $request->sis_esta_id,
                'user_edita_id' => Auth::user()->id,
            ]);

            $intarea->save();

            $parametro = Parametro::findOrFail($intarea->prm_area_id);

            $parametro->fill([
                'sis_esta_id' =>  $request->sis_esta_id,
                'user_edita_id' => Auth::user()->id,
            ]);

            $parametro->save();
        }

        return redirect()->route($this->rutaxxxx . '.index', ['atencion' => $atencion->id])->with('info', 'Parametro Area de Ajuste actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parametro $atencion, ParametroArea $intarea)
    {
        $estado = ($intarea->sis_esta_id == 1) ? 2 : 1;

        $intarea->fill([
            'sis_esta_id' =>  $estado,
            'user_edita_id' => Auth::user()->id,
        ]);

        $intarea->save();

        $parametro = Parametro::findOrFail($intarea->prm_area_id);

        $parametro->fill([
            'sis_esta_id' =>  $estado,
            'user_edita_id' => Auth::user()->id,
        ]);

        $parametro->save();

        return redirect()->route($this->rutaxxxx . '.index', ['atencion' => $atencion->id])->with('info', 'Parametro Area de Ajuste cambiado de estado exitosamente.');
    }

    public function listarAreaAjusteActivas($atencion)
    {
        if (!is_null($atencion)) {
            $resultado = DB::table('area_parametro as pa')
                ->join('parametros as pd', 'pd.id', '=', 'pa.prm_atencion_id')
                ->join('parametros as ph', 'ph.id', '=', 'pa.prm_area_id')
                ->where('pa.prm_atencion_id', $atencion)
                ->where('pa.sis_esta_id', 1)
                ->orderBy('ph.nombre', 'asc')
                ->get(['ph.nombre', 'pa.id']);
            return response()->json(['area' => $resultado]);
        }
    }
}
