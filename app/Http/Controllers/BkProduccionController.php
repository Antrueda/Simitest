<?php

namespace App\Http\Controllers;

use App\Traits\Interfaz\Antisimi\BkProduccionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Controlador auxiliar para sacar bk de produccion para agregarlos a los seedeer de pruebas
 */
class BkProduccionController extends Controller
{
    use BkProduccionTrait;
    public function getCuerpo($key, $value, $respuest)
    {
        $this->getAnterior($key, $value, $respuest);
        $this->getGeneraNoExiste($value);
        $cuerpoxx = $this->getArmarScriptCuerpo($value);
        $tablaxxx=$this->tablaxxx;
        $this->$tablaxxx($value, $cuerpoxx);
    }

    public function index($tablaxxx, $maximoxx)
    {
        $tablaxxx = explode('-', $tablaxxx);
        $this->tablaxxx = $tablaxxx[0];
        if (count($tablaxxx) > 1) {
            $this->fidatosx = $tablaxxx[1];
        }
        
        try {
            $minimoxx = $maximoxx - 1000;
            $respuest = DB::table($this->tablaxxx)->orderBy('id', 'ASC')
                ->whereBetween('id', [$minimoxx + 1, $maximoxx])
                ->get();
            foreach ($respuest as $key => $value) {
                $this->getCuerpo($key, $value, $respuest);
            }
            echo "// $this->fidatosx";
        } catch (\Throwable $th) {
            echo "El nombre de la tabla: $this->tablaxxx es incorrecto o presenta el siguiente error: " . $th->getMessage()
                . ' del archivo: '
                . $th->getFile()
                . ' en la línea: '
                . $th->getLine();
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
