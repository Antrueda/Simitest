<?php

namespace App\Http\Controllers\Administracion\Intervencion;

use App\Http\Controllers\Controller;
use App\Models\Temacombo;
use Illuminate\Http\Request;

class IntSubareaAjusteController extends Controller
{
    public $temacombo;
    public $tituloxx;
    public $botoncrea;
    public $botonsave;
    public $rutaxxxx;

    public function __construct()
    {
        $this->tituloxx = 'SUBÁREA DE AJUSTE';
        $this->botoncrea = 'NUEVO REGISTRO';
        $this->temacombo = [
            162, //Emoción
            163,  //Sexual
            164, //Comportamental
            165, //Académica
            166, //Social
            167, //Familiar
            235, //N/A
        ];
        $this->rutaxxxx = 'paramsubarea';
        $this->botonsave = true;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = Temacombo::with('parametros')->whereIn($this->temacombo);

        return view(
            'administracion.intervenciones.Parametro.Area.index',
            [
                'resultado' => $resultado,
                'tituloxx' => $this->tituloxx,
                'botoncrea' => $this->botoncrea,
                'rutaxxxx' => $this->rutaxxxx, 
            ]);
            
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
