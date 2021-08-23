<?php

namespace App\Http\Controllers\Administracion\Intervencion;

use App\Http\Controllers\Controller;
use App\Models\Parametro;
use App\Models\Temacombo;
use Illuminate\Http\Request;

class AreaAjusteController extends Controller
{
    public $temacombo;
    public $tituloxx;
    public $botoncrea;


    public function __construct()
    {
        $this->tituloxx = 'ÁREA DE AJUSTE';
        $this->botoncrea = 'NUEVO REGISTRO';
        $this->temacombo = 212;
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($atencion)
    {
        $resultado = Temacombo::with('parametros')->find($this->temacombo);
        dd($resultado->temacombos);

        return view(
            'administracion.intervenciones.AreasAjuste.index',
            [
                'resultado' => $resultado,
                'tituloxx' => $this->tituloxx,
                'botoncrea' => $this->botoncrea,
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function show(Temacombo $temacombo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function edit(Temacombo $temacombo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temacombo $temacombo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temacombo  $temacombo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temacombo $temacombo)
    {
        //
    }
}
