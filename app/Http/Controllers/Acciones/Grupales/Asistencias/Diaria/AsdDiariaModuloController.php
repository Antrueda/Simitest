<?php

namespace App\Http\Controllers\Acciones\Grupales\Asistencias\Diaria;

use App\Http\Controllers\Controller;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaDataTablesTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaListadosTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaPestaniasTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaCrudTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\DiariaAjaxTrait;


use App\Traits\Acciones\Grupales\Asistencias\Diaria\Modulo\DiariaParametrizarModuloTrait;
use App\Traits\Acciones\Grupales\Asistencias\Diaria\Modulo\DiariaVistasModuloTrait;

class DiariaModuloController extends Controller
{


    use DiariaDataTablesTrait;
    use DiariaListadosTrait;
    use DiariaPestaniasTrait;
    use DiariaCrudTrait;
    use DiariaAjaxTrait;
    use DiariaParametrizarModuloTrait;
    use DiariaVistasModuloTrait;


    public function __construct()
    {
        $this->opciones['permmidd'] = 'diariaxx';
        $this->opciones['permisox'] = 'diariaxx';
        $this->opciones['routxxxx'] = 'diariaxx';
        $this->getOpciones();
        $this->middleware($this->getMware());
    }

    public function index()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->getTablas($this->opciones)]);
    }
}
