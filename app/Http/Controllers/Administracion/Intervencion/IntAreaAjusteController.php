<?php

namespace App\Http\Controllers\Administracion\Intervencion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracion\Parametros\CrearParametroRequest;
use App\Http\Requests\Administracion\Parametros\EditarParametroRequest;
use App\Models\Parametro;
use App\Models\sistema\SisEsta;
use App\Models\Temacombo; 
use Illuminate\Support\Facades\Auth;

class IntAreaAjusteController extends Controller
{

    public $temacombo;
    public $tituloxx;
    public $botoncrea;
    public $botonsave;
    public $rutaxxxx; 

    public function __construct()
    {
        $this->tituloxx = 'ÁREA DE AJUSTE';
        $this->botoncrea = 'NUEVO REGISTRO';
        $this->temacombo = 212;
        $this->rutaxxxx = 'paramarea'; 
        $this->botonsave = true;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = Temacombo::with('parametros')->find($this->temacombo);

        return view(
            'administracion.intervenciones.Parametro.Area.index',
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
        return view(
            'administracion.intervenciones.Parametro.Area.crear',
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
    public function store(CrearParametroRequest $request)
    {
        $parametro = Parametro::create([
            'nombre' => $request->nombre,
            'sis_esta_id' =>  $request->sis_esta_id,
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
        ]);

        $parametro->temacombo()->attach([
            'temacombo_id' => $this->temacombo,
            'simianti_id' => 0,
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => $request->sis_esta_id,
        ]);

        return redirect()->route($this->rutaxxxx.'.index')->with('info', 'Parametro Area de Ajuste creada exitosamente,');
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
            'administracion.intervenciones.Parametro.Area.ver',
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
            'administracion.intervenciones.Parametro.Area.editar',
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
    public function update(EditarParametroRequest $request, $id)
    {
        $parametro = Parametro::findOrFail($id);

        $parametro->fill([
            'nombre' => $request->nombre,
            'sis_esta_id' =>  $request->sis_esta_id,
            'user_edita_id' => Auth::user()->id,
        ]);

        $parametro->save();

        return redirect()->route($this->rutaxxxx.'.index')->with('info', 'Parametro Area de Ajuste editada exitosamente,');
   
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

        return redirect()->route($this->rutaxxxx.'.index')->with('info', 'Parametro Area de Ajuste cambiada de estado exitosamente.');
    
    }
}
