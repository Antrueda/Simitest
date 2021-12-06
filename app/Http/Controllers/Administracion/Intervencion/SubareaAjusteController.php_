<?php

namespace App\Http\Controllers\Administracion\Intervencion;

use App\Models\Parametro;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\sistema\SisEsta;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\sistema\ParametroArea;
use App\Models\sistema\ParametroSubarea;
use App\Http\Requests\Administracion\Parametros\ParametroAreaRequest;
use App\Models\Temacombo;

class SubareaAjusteController extends Controller
{
    public $temacombo; // Nueva lista en Temacombo
    public $listatema;
    public $tituloxx;
    public $botoncrea;
    public $botonsave;
    public $rutaxxxx;

    public function __construct()
    {
        $this->tituloxx = 'SUBÁREA DE AJUSTE';
        $this->botoncrea = 'NUEVO REGISTRO';
        $this->listatema = [
            162, // Emoción
            163, // Sexual
            164, // Comportamental
            165, // Académica
            166, // Social
            167, // Familiar
            235, // N/A
            $this->temacombo = $this->SubareaTemacombo()
        ];
        $this->botonsave = true;
        $this->rutaxxxx = 'intsubarea';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($atencion, $area)
    {

        $resultado = ParametroSubarea::where('area_parametro_id', $area)->get();

        return view(
            'administracion.intervenciones.SubareaAjuste.index',
            [
                'resultado' => $resultado,
                'tituloxx' => $this->tituloxx,
                'botoncrea' => $this->botoncrea,
                'rutaxxxx' => $this->rutaxxxx,
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
        $subareas = DB::table('temacombos as t')
            ->join('parametro_temacombo as pt', 't.id', '=', 'pt.temacombo_id')
            ->join('parametros as p', 'p.id', '=', 'pt.parametro_id')
            ->whereIn('pt.temacombo_id', $this->listatema)
            ->distinct()
            ->orderBy('p.nombre', 'asc')
            ->get(['p.nombre', 'p.id', 'p.sis_esta_id']);

        return view(
            'administracion.intervenciones.SubareaAjuste.crear',
            [
                'tituloxx'  => $this->tituloxx,
                'estadoxx' => $estadoxx,
                'botoncrea' => null,
                'salvarxxx' => $this->botonsave,
                'rutaxxxx' => $this->rutaxxxx,
                'subareas' => $subareas
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Parametro $atencion, ParametroArea $area, ParametroAreaRequest $request)
    {
        // Se verifica si el campo nombre esta vacio, en caso de ser null se crea directamente como parametro padre e hijo directamente.
        if (is_null($request->nombre)) {

            ParametroSubarea::create([
                'area_parametro_id'  =>  $area->id,
                'prm_subajuste_id'  => $request->parametro_id,
                'sis_esta_id'  => $request->sis_esta_id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ]);
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

            ParametroSubarea::create([
                'area_parametro_id'  =>  $area->id,
                'prm_subajuste_id'  => $parametro->id,
                'sis_esta_id'  => $request->sis_esta_id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
            ]);
        }

        return redirect()->route($this->rutaxxxx . '.index', ['atencion' => $atencion->id, 'area' => $area->id])->with('info', 'Parametro Subárea de Ajuste creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function show(Parametro $atencion, ParametroArea $area, ParametroSubarea $intsubarea)
    {

        return view(
            'administracion.intervenciones.SubareaAjuste.ver',
            [
                'tituloxx'  => $this->tituloxx,
                'botoncrea' => null,
                'salvarxxx' => false,
                'rutaxxxx' => $this->rutaxxxx,
                'parametro' => $intsubarea,
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
    public function edit(Parametro $atencion, ParametroArea $area, ParametroSubarea $intsubarea)
    {
        $estadoxx = SisEsta::get(['id', 's_estado']);
        $subareas = DB::table('temacombos as t')->join('parametro_temacombo as pt', 't.id', '=', 'pt.temacombo_id')->join('parametros as p', 'p.id', '=', 'pt.parametro_id')->whereIn('pt.temacombo_id', $this->listatema)->distinct()->get(['p.nombre', 'p.id', 'p.sis_esta_id']);

        return view(
            'administracion.intervenciones.SubareaAjuste.editar',
            [
                'tituloxx'  => $this->tituloxx,
                'estadoxx' => $estadoxx,
                'botoncrea' => null,
                'salvarxxx' => $this->botonsave,
                'rutaxxxx' => $this->rutaxxxx,
                'subareas' => $subareas,
                'subarea' => $intsubarea,
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
    public function update(Parametro $atencion, ParametroArea $area, Request $request, ParametroSubarea $intsubarea)
    {
        if (is_null($request->nombre)) {

            $intsubarea->fill([
                'area_parametro_id'  =>  $area->id,
                'prm_subajuste_id'  => $request->parametro_id,
                'sis_esta_id'  => $request->sis_esta_id,
                'user_edita_id' => Auth::user()->id,
            ]);
            $intsubarea->save();

            $parametro = Parametro::findOrFail($intsubarea->prm_subajuste_id);
            
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
            }

            $parametro->temacombos()->attach([
                'temacombo_id' => $this->temacombo
            ]);

            $intsubarea->fill([
                'area_parametro_id'  =>  $area->id,
                'prm_subajuste_id'  => $parametro->id,
                'sis_esta_id'  => $request->sis_esta_id,
                'user_edita_id' => Auth::user()->id,
            ]);

            $intsubarea->save();

            $parametro = Parametro::findOrFail($intsubarea->prm_subajuste_id);

            $parametro->fill([
                'sis_esta_id' =>  $request->sis_esta_id,
                'user_edita_id' => Auth::user()->id,
            ]);

            $parametro->save();
        }

        return redirect()->route($this->rutaxxxx . '.index', ['atencion' => $atencion->id, 'area' => $area->id])->with('info', 'Parametro Subárea de Ajuste Actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parametro $atencion, ParametroArea $area, ParametroSubarea $intsubarea)
    {
        $estado = ($intsubarea->sis_esta_id == 1) ? 2 : 1;

        $intsubarea->fill([
            'sis_esta_id' =>  $estado,
            'user_edita_id' => Auth::user()->id,
        ]);

        $intsubarea->save();

        $parametro = Parametro::findOrFail($intsubarea->prm_subajuste_id);

        $parametro->fill([
            'sis_esta_id' => $estado,
            'user_edita_id' => Auth::user()->id,
        ]);

        $parametro->save();

        return redirect()->route($this->rutaxxxx . '.index', ['atencion' => $atencion->id, 'area' => $area->id])->with('info', 'Parametro Subárea de Ajuste cambiado de estado exitosamente.');
    }

    public function SubareaTemacombo()
    {
        $subarea = Temacombo::where('nombre', $this->tituloxx)->first();
        return $subarea->id;
    }

    public function listarSubareaAjusteActivas($area)
    {
        if (!is_null($area)) {
            $resultado = DB::table('parametro_subarea as ps')
                ->join('area_parametro as pa', 'pa.id', '=', 'ps.area_parametro_id')
                ->join('parametros as p', 'p.id', '=', 'ps.prm_subajuste_id')
                ->where('ps.area_parametro_id', $area)
                ->where('ps.sis_esta_id', 1)
                ->orderBy('p.nombre', 'asc')
                ->get(['p.nombre', 'p.id']);
            return response()->json(['subarea' => $resultado]);
        }
    }
}
