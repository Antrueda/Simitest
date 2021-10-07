<?php

namespace App\Http\Controllers\Indicadores\Ajustes_borrar;

use App\Http\Controllers\Controller;
use App\Models\Indicadores\Ajustes\InLigruTemacombos;
use App\Models\Indicadores\Ajustes\InLigruTemacomboParametro;
use App\Http\Requests\Indicadores\Ajustes\InLigruTemacomboParametroCrearRequest;
use App\Http\Requests\Indicadores\Ajustes\InLigruTemacomboParametroEditarRequest;
use App\Models\Sistema\ParametroTema;

class InLigruTemacomboParametroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($padrexxx)
    {
        $respuesta = InLigruTemacombos::findOrFail($padrexxx);
        $resultados = InLigruTemacomboParametro::where('in_ligru_temacombo_id', $respuesta->id)->get();
        return view('Indicadores.Admin.TemaRespuestas.index', [
            'resultados' => $resultados,
            'area' => $respuesta->in_ligru->in_base_fuente->in_fuente->in_indicador->area,
            'indicador_id' => $respuesta->in_ligru->in_base_fuente->in_fuente->in_indicador_id,
            'linea_base_id' => $respuesta->in_ligru->in_base_fuente->in_fuente_id,
            'documento_id' => $respuesta->in_ligru->in_base_fuente,
            'ligru_id' => $respuesta->in_ligru->id,
            'respuesta' => $respuesta->id,
            'pregunta' => $respuesta->temacombo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($padrexxx)
    {
        $respuesta = InLigruTemacombos::findOrFail($padrexxx);
        $respuestas = ParametroTema::where('temacombo_id', $respuesta->temacombo_id)->get();
        return view('Indicadores.Admin.TemaRespuestas.create', [
            'parametros' => $respuestas,
            'lineagru' => $respuesta,
            'area' => $respuesta->in_ligru->in_base_fuente->in_fuente->in_indicador->area,
            'indicador_id' => $respuesta->in_ligru->in_base_fuente->in_fuente->in_indicador_id,
            'linea_base_id' => $respuesta->in_ligru->in_base_fuente->in_fuente_id,
            'documento_id' => $respuesta->in_ligru->in_base_fuente,
            'ligru_id' => $respuesta->in_ligru->id,
            'respuesta' => $respuesta->id,
            'pregunta' => $respuesta->temacombo,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InLigruTemacomboParametroCrearRequest $request)
    {
        $respuesta = InLigruTemacomboParametro::create(
            $request->only('in_ligru_temacombo_id', 'parametro_id')
        );
        session()->flash('message', 'Respuesta ' . $respuesta->parametro->nombre . ' agregada exitosamente.');
        return redirect()->route('temarespuesta', ['padrexxx' => $respuesta->in_ligru_temacombo_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Indicadores\Ajustes\InLigruTemacomboParametro  $inLigruTemacomboParametro
     * @return \Illuminate\Http\Response
     */
    public function show($inLigruTemacomboParametro)
    {
        $lineagru = InLigruTemacomboParametro::findOrFail($inLigruTemacomboParametro);
        $pregunta = InLigruTemacombos::findOrFail($lineagru->in_ligru_temacombo_id);
        return view('Indicadores.Admin.TemaRespuestas.show', [
            'lineagru' => $lineagru,
            'pregunta' => $pregunta,
            'area' => $pregunta->in_ligru->in_base_fuente->in_fuente->in_indicador->area,
            'indicador_id' => $pregunta->in_ligru->in_base_fuente->in_fuente->in_indicador_id,
            'linea_base_id' => $pregunta->in_ligru->in_base_fuente->in_fuente_id,
            'documento_id' => $pregunta->in_ligru->in_base_fuente,
            'ligru_id' => $pregunta->in_ligru->id,
            'respuesta' => $pregunta->id,
            'pregunta' => $pregunta->temacombo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indicadores\Ajustes\InLigruTemacomboParametro  $inLigruTemacomboParametro
     * @return \Illuminate\Http\Response
     */
    public function edit($inLigruTemacomboParametro)
    {
        $lineagru = InLigruTemacomboParametro::findOrFail($inLigruTemacomboParametro);
        $pregunta = InLigruTemacombos::findOrFail($lineagru->in_ligru_temacombo_id);
        $respuesta = ParametroTema::where('temacombo_id', $pregunta->temacombo_id)->get();
        return view('Indicadores.Admin.TemaRespuestas.edit', [
            'parametros' => $respuesta,
            'lineagru' => $lineagru,
            'pregunta' => $pregunta,
            'area' => $pregunta->in_ligru->in_base_fuente->in_fuente->in_indicador->area,
            'indicador_id' => $pregunta->in_ligru->in_base_fuente->in_fuente->in_indicador_id,
            'linea_base_id' => $pregunta->in_ligru->in_base_fuente->in_fuente_id,
            'documento_id' => $pregunta->in_ligru->in_base_fuente,
            'ligru_id' => $pregunta->in_ligru->id,
            'respuesta' => $pregunta->id,
            'pregunta' => $pregunta->temacombo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Indicadores\Ajustes\InLigruTemacomboParametro  $inLigruTemacomboParametro
     * @return \Illuminate\Http\Response
     */
    public function update(InLigruTemacomboParametroEditarRequest $request, $inLigruTemacomboParametro)
    {
        $respuesta = InLigruTemacomboParametro::find($inLigruTemacomboParametro);
        $respuesta->fill(
            $request->only('in_ligru_temacombo_id', 'parametro_id')
        );
        $respuesta->save();
        session()->flash('message', 'Respuesta ' . $respuesta->parametro->nombre . ' editada exitosamente.');
        return redirect()->route('temarespuesta', ['padrexxx' => $respuesta->in_ligru_temacombo_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indicadores\Ajustes\InLigruTemacomboParametro  $inLigruTemacomboParametro
     * @return \Illuminate\Http\Response
     */
    public function destroy($inLigruTemacomboParametro)
    {
        $lineagru = InLigruTemacomboParametro::findOrFail($inLigruTemacomboParametro);
        $lineagru->delete();
        session()->flash('message', 'Respuesta ' . $lineagru->parametro->nombre . ' agregada exitosamente.');
        return redirect()->route('temarespuesta', ['padrexxx' => $lineagru->in_ligru_temacombo_id]);
    }
}
