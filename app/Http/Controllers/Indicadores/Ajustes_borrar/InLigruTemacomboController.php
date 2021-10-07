<?php

namespace App\Http\Controllers\Indicadores\Ajustes_borrar;

use App\Models\Temacombo;
use App\Models\Indicadores\InLigru;
use App\Http\Controllers\Controller;
use App\Models\Indicadores\Ajustes\InLigruTemacombos;
use App\Http\Requests\Indicadores\Ajustes\InLigruTemacomboCrearRequest;
use App\Http\Requests\Indicadores\Ajustes\InLigruTemacomboEditarRequest;

class InLigruTemacomboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($padrexxx)
    {
        $grupreguntas = InLigru::findOrFail($padrexxx);

        return view('Indicadores.Admin.InLigruTemaCombo.index', [
            'resultados' => $grupreguntas->grupotemacombo,
            'lineagru' => $grupreguntas,
            'area' => $grupreguntas->in_base_fuente->in_fuente->in_indicador->area,
            'indicador_id' => $grupreguntas->in_base_fuente->in_fuente->in_indicador_id,
            'linea_base_id' => $grupreguntas->in_base_fuente->in_fuente_id,
            'documento_id' => $grupreguntas->in_base_fuente,
            'ligru_id' => $grupreguntas->id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($padrexxx)
    {
        $preguntas = Temacombo::orderby('nombre', 'asc')->get();
        $lineagru = InLigru::findOrFail($padrexxx);
        return view('Indicadores.Admin.InLigruTemaCombo.create', [
            'temacombos' => $preguntas,
            'lineagru' => $lineagru,
            'area' => $lineagru->in_base_fuente->in_fuente->in_indicador->area,
            'indicador_id' => $lineagru->in_base_fuente->in_fuente->in_indicador_id,
            'linea_base_id' => $lineagru->in_base_fuente->in_fuente_id,
            'documento_id' => $lineagru->in_base_fuente,
            'ligru_id' => $lineagru->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InLigruTemacomboCrearRequest $request)
    {
        $temacomboadd = InLigruTemacombos::create(
            $request->only('in_ligru_id', 'temacombo_id')
        );
        session()->flash('message', 'Pregunta ' . $temacomboadd->temacombo->nombre . ' agregada al grupo ' . $temacomboadd->in_ligru_id . ' Exitosamente.');
        return redirect()->route('grupregu', ['padrexxx' => $temacomboadd->in_ligru_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Indicadores\Ajustes\InLigruTemacombos  $inLigruTemacombos
     * @return \Illuminate\Http\Response
     */
    public function show($inLigruTemacombos)
    {
        $lineagru = InLigruTemacombos::findOrFail($inLigruTemacombos);
        return view('Indicadores.Admin.InLigruTemaCombo.show', [
            'lineagru' => $lineagru,
            'area' => $lineagru->in_ligru->in_base_fuente->in_fuente->in_indicador->area,
            'indicador_id' => $lineagru->in_ligru->in_base_fuente->in_fuente->in_indicador_id,
            'linea_base_id' => $lineagru->in_ligru->in_base_fuente->in_fuente_id,
            'documento_id' => $lineagru->in_ligru->in_base_fuente,
            'ligru_id' => $lineagru->in_ligru->id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indicadores\Ajustes\InLigruTemacombos  $inLigruTemacombos
     * @return \Illuminate\Http\Response
     */
    public function edit($inLigruTemacombos)
    {
        $preguntas = Temacombo::orderby('nombre', 'asc')->get();
        $lineagru = InLigruTemacombos::findOrFail($inLigruTemacombos);
        return view('Indicadores.Admin.InLigruTemaCombo.edit', [
            'temacombos' => $preguntas,
            'lineagru' => $lineagru,
            'area' => $lineagru->in_ligru->in_base_fuente->in_fuente->in_indicador->area,
            'indicador_id' => $lineagru->in_ligru->in_base_fuente->in_fuente->in_indicador_id,
            'linea_base_id' => $lineagru->in_ligru->in_base_fuente->in_fuente_id,
            'documento_id' => $lineagru->in_ligru->in_base_fuente,
            'ligru_id' => $lineagru->in_ligru->id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Indicadores\Ajustes\InLigruTemacombos  $inLigruTemacombos
     * @return \Illuminate\Http\Response
     */
    public function update(InLigruTemacomboEditarRequest $request, $inLigruTemacombos)
    {
        $lineagru = InLigruTemacombos::findOrFail($inLigruTemacombos);
        $lineagru->fill(
            $request->only('in_ligru_id', 'temacombo_id')
        );
        $lineagru->save();
        session()->flash('message', 'Pregunta ' . $lineagru->temacombo->nombre . ' actualizada en el grupo ' . $lineagru->in_ligru_id . ' exitosamente.');
        return redirect()->route('grupregu', ['padrexxx' => $lineagru->in_ligru_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indicadores\Ajustes\InLigruTemacombos  $inLigruTemacombos
     * @return \Illuminate\Http\Response
     */
    public function destroy($inLigruTemacombos)
    {
        $lineagru = InLigruTemacombos::findOrFail($inLigruTemacombos);
        $lineagru->delete();
        session()->flash('message', 'Pregunta ' . $lineagru->temacombo->nombre . ' eliminada del grupo ' . $lineagru->in_ligru_id . ' exitosamente.');
        return redirect()->route('grupregu', ['padrexxx' => $lineagru->in_ligru_id]);
    }
}
