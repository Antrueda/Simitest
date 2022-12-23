<?php

namespace App\Http\Controllers\Acciones\Individuales;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Individuales\TieneEvacionTrait;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Support\Facades\Auth;

class AIController extends Controller
{
    use ManageTimeTrait;
    use TieneEvacionTrait;
    public function __construct()
    {
        $this->opciones['permisox'] = 'aiindex';


        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);
    }


    public function index()
    {
        if (Auth::user()->s_documento == '17496705') {
        }

        // 
        $this->getPuedeCargar([
            'estoyenx' => 1,
            'fechregi' => '2021-06-01',
            'upixxxxx' => 1,
            'formular' => 2,
        ]);

        $this->opciones['permisox'] = 'aiindex';

        return view('Acciones.Individuales.index');
    }


    public function show($id)
    {
        $repuest = $this->getTieneEvacion($id);
        $reportex = $repuest[0];
        $dato = $repuest[1];
        $nnaj = $repuest[2];
        return view('Acciones.Individuales.index', ['accion' => 'Editar'], compact('dato', 'nnaj', 'reportex'));
    }
}
