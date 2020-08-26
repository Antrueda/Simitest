<?php

namespace App\Http\Controllers\Indicadores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Indicadores\InValoracionCrearRequest;
use App\Http\Requests\Indicadores\InValoracionEditarRequest;
use App\Models\Indicadores\InPregunta;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Indicadores\InValoracion;
use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisTabla;
use App\Models\Tema;
use Illuminate\Http\Request;

class InValoracionController extends Controller
{

    private $opciones;
    public function __construct()
    {

        $this->opciones = [
            'tituloxx' => 'Valoraciones',
            'rutaxxxx' => 'inva.valoracion',
            'accionxx' => '',
            'rutacarp' => 'Indicadores.Admin.Valoracion.',
            'volverax' => 'Valoraciones',
            'readonly' => '', // esta opcion es para cundo está por la parte de ver
            'carpetax' => 'Valoracion',
            'modeloxx' => '',

            'permisox' => 'invaloracion',
            'routxxxx' => 'inva.valoracion',
            'routinde' => 'inva',
            'parametr' => [],
            'urlxxxxx' => 'api/indicadores/valoracion',
            'routnuev' => 'inva.valoracion',
            'nuevoxxx' => 'Nuevo Registro'
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-leer|'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar|'
            . $this->opciones['permisox'] . '-borrar']);

        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'PRIMER NOMBRE'],
            ['td' => 'SEGUNDO NOMBRE'],
            ['td' => 'PRIMER APELLIDO'],
            ['td' => 'SEGUNDO APELLIDO'],
            ['td' => 'ESTADO'],
        ];

        $this->opciones['columnsx'] = [

            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'sis_nnajs.id'],
            ['data' => 's_primer_nombre', 'name' => 'fi_datos_basicos.s_primer_nombre'],
            ['data' => 's_segundo_nombre', 'name' => 'fi_datos_basicos.s_segundo_nombre'],
            ['data' => 's_primer_apellido', 'name' => 'fi_datos_basicos.s_primer_apellido'],
            ['data' => 's_segundo_apellido', 'name' => 'fi_datos_basicos.s_segundo_apellido'],
            ['data' => 'sis_esta_id', 'name' => 'sis_nnajs.sis_esta_id'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->opciones['rutacarp'] . 'index', ['todoxxxx' => $this->opciones]);
    }

    public function nivel($categori, $ajaxxxxx)
    {
        $nivelxxx = 0;
        $nivelesx = [];
        switch ($categori) {
            case 246:
            case 247:
            case 248:
                if ($ajaxxxxx) {
                    $nivelesx[] = ['valuexxx' => 938, 'optionxx' => 'BAJO'];
                } else {
                    $nivelesx = [938 => 'BAJO'];
                }
                $nivelxxx = 938;
                break;
            case 300:
            case 301:
            case 302:
                if ($ajaxxxxx) {
                    $nivelesx[] = ['valuexxx' => 939, 'optionxx' => 'MEDIO'];
                } else {
                    $nivelesx = [939 => 'MEDIO'];
                }
                $nivelxxx = 939;
                break;
            case 840:
            case 518:
            case 841:
                if ($ajaxxxxx) {
                    $nivelesx[] = ['valuexxx' => 940, 'optionxx' => 'ALTO'];
                } else {
                    $nivelesx = [940 => 'ALTO'];
                }
                $nivelxxx = 940;
                break;
        }
        $pcategor = Parametro::where('id', $categori)->first();
        $idcatego[$pcategor->id] = $pcategor->nombre;
        return [$nivelesx, $this->avance($categori, $nivelxxx), $idcatego, $nivelxxx];
    }
    private function avance($categori, $nivelxxx)
    {
        $comboxxx = [];
        $avanzaxx = Tema::combo(52, true, false);
        foreach ($avanzaxx as $key => $avancexx) {
            switch ($categori) {
                case 246: // está en la mínima categoría
                    if ($key != 1688) {
                        $comboxxx[$key] = $avancexx;
                    }
                    break;
                case 841: //está en la máxima categoría
                    if ($key != 514 && $key != 512) {
                        $comboxxx[$key] = $avancexx;
                    }
                    break;
                default;
                    if ($nivelxxx == 940) { // no avanza por que está en el ultimo nivel
                        if ($key != 512) {
                            $comboxxx[$key] = $avancexx;
                        }
                    } else {
                        $comboxxx[$key] = $avancexx;
                    }
            }
        }
        return $comboxxx;
    }
    private function view($objetoxx, $nombobje, $accionxx, $vistaxxx, $padrexxx)
    {

        $categori = $padrexxx->i_prm_categoria_id;


        $this->opciones['estadoxx'] = 'ACTIVO';
        $this->opciones['accionxx'] = $accionxx;
        // indica si se esta actualizando o viendo
        //$avancexx = $this->nivel(247);

        $this->opciones['pregindi'] = InPregunta::combo(true, false);
        $this->opciones['activida'] = ['' => 'Seleccione'];
        $this->opciones['stablaxx'] = SisTabla::combo('', true, false);
        $this->opciones['respuest'] = Tema::combo(297, false, true);

        $this->opciones['scampoxx'] = ['' => 'Seleccione'];
        if ($nombobje != '') {
            //$this->opciones['activida'] = SisActividad::combo($objetoxx->sis_actividad_id, true, false);
            $this->opciones[$nombobje] = $objetoxx;
            $this->opciones['estadoxx'] = $objetoxx->sis_esta_id == 1 ? 'ACTIVO' : 'INACTIVO';
            $categori = $objetoxx->i_prm_categoria_id;
        }

        $avancexx = $this->nivel($categori, false);
        $this->opciones['paddrexx'] = $padrexxx;
        $this->opciones['cateactu'] = $avancexx[2];
        $this->opciones['avancexx'] = $avancexx[1];
        $this->opciones['nivelxxx'] = $avancexx[0];
        $this->opciones['categori'] = $this->vista(['cateactu' => $categori, 'avancexx' => 559], false)['categori'];

        // Se arma el titulo de acuerdo al array opciones
        $this->opciones['tituloxx'] = $this->opciones['accionxx'] . ': ' . $this->opciones['tituloxx'];
        return view($vistaxxx, ['todoxxxx' => $this->opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($valo)
    {
        return $this->view(true, '', 'Crear', $this->opciones['rutacarp'] . 'crear', InLineabaseNnaj::where('id', $valo)->first());
    }


    private function grabar($dataxxxx, $objectx, $infoxxxx)
    {
        $valoraci = InValoracion::transaccion($dataxxxx, $objectx);
        return redirect()
            ->route('inva.valoracion.editar', [$valoraci->in_lineabase_nnaj_id, $valoraci->id])
            ->with('info', $infoxxxx);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($valo, InValoracionCrearRequest $request)
    {

        $dataxxxx = $request->all();
        $dataxxxx['in_lineabase_nnaj_id'] = $valo;
        return $this->grabar($dataxxxx, '', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($valo, InLineabaseNnaj $objetoxx)
    {
        $this->opciones['readonly'] = 'readonly';
        return $this->view($objetoxx,  'modeloxx', 'Ver', $this->opciones['rutacarp'] . 'ver', InLineabaseNnaj::where('id', $valo)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($valo, InValoracion $objetoxx)
    {
        return $this->view($objetoxx,  'modeloxx', 'Editar', $this->opciones['rutacarp'] . 'editar', InLineabaseNnaj::where('id', $valo)->first());
    }
    public function lista(InLineabaseNnaj $objetoxx)
    {
        $valoraci = InValoracion::where('in_lineabase_nnaj_id', $objetoxx->id)->orderBy('updated_at', 'desc')->first();
        if (!isset($valoraci->id)) {
            return redirect()
                ->route('inva.valoracion.nuevo', [$objetoxx->id]);
        }
        return redirect()
            ->route('inva.valoracion.editar', [$valoraci->in_lineabase_nnaj_id, $valoraci->id]);
    }
    public function bases(SisNnaj $objetoxx)
    {
        $this->opciones['urlxxxxx'] = 'api/indicadores/basennaj';
        $this->opciones['cabecera'] = [
            ['td' => 'ID'],
            ['td' => 'LÍNEA BASE'],
            ['td' => 'ESTADO'],
        ];
        $this->opciones['columnsx'] = [
            ['data' => 'btns', 'name' => 'btns'],
            ['data' => 'id', 'name' => 'in_lineabase_nnajs.id'],
            ['data' => 's_linea_base', 'name' => 'in_lineabase_nnajs.s_linea_base'],
            ['data' => 'sis_esta_id', 'name' => 'in_lineabase_nnajs.sis_esta_id'],
        ];
        return view($this->opciones['rutacarp'] . 'base', ['todoxxxx' => $this->opciones]);
    }
    public function update(InValoracionEditarRequest $request, $valo, InValoracion $objetoxx)
    {
        $dataxxxx = $request->all();
        $valoraci = InValoracion::where('in_lineabase_nnaj_id', $valo)->where('i_prm_categoria_id', $dataxxxx['i_prm_categoria_id'])->first();
        $fechaxxx=explode(' ',$objetoxx->updated_at)[0];
        $hoyxxxxx=date('Y-m-d',time());

        if($fechaxxx== $hoyxxxxx){
            return redirect()
            ->route('inva.valoracion.editar', [$objetoxx->in_lineabase_nnaj_id, $objetoxx->id])
            ->with('info', 'El NNAJ solo puede tenere para la línea base acutal una valoracón por día');
        }

        if (!isset($valoraci->id)) {
            $dataxxxx['in_lineabase_nnaj_id'] = $valo;
            return $this->grabar($dataxxxx, '', 'Valoración creada con éxito');
        }


        return $this->grabar($dataxxxx, $objetoxx, 'Valoración actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InLineabaseNnaj $objetoxx)
    {
        $objetoxx->sis_esta_id = ($objetoxx->sis_esta_id == 2) ? 1 : 2;
        $objetoxx->save();
        $activado = $objetoxx->sis_esta_id == 2 ? 'inactivado' : 'activado';
        return redirect()->route('inva')->with('info', 'Registro ' . $activado . ' con éxito');
    }
    private function getCombos($dataxxxx, $ajaxxxxx, $pselecte)
    {
        if ($ajaxxxxx == false)
            $comboxxx = ['' => 'Seleclcione'];
        else
            $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione', 'selected' => ''];

        foreach ($dataxxxx as $registro) {
            $selected = '';
            if ($pselecte == $registro->valuexxx) {
                $selected = 'selected';
            }
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx, 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }


    private function combo($dataxxxx, $ajaxxxxx)
    {
        $nivelxxx = [938 => [246, 247, 248], 939 => [300, 301, 302], 940 => [840, 518, 841]];
        $comboxxx = [];
        foreach (Parametro::whereIn('id', $nivelxxx[$dataxxxx])->get() as $categori) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $categori->id, 'optionxx' => $categori->nombre];
            } else {
                $comboxxx[$categori->id] = $categori->nombre;
            }
        }
        return $comboxxx;
    }
    private function vista($dataxxxx, $ajaxxxxx)
    {
        $avancexx = $this->nivel($dataxxxx['cateactu'], $ajaxxxxx);
        $acategor = [246, 247, 248, 300, 301, 302, 840, 518, 841];
        $encatego = array_search($dataxxxx['cateactu'], $acategor);
        $respuest = [];
        switch ($dataxxxx['avancexx']) {
            case 512: //avanza
                $parametr = Parametro::where('id', $avancexx[3] + 1)->first();
                $respuest = ['nivelxxx' => [['valuexxx' => $parametr->id, 'optionxx' => $parametr->nombre]], 'categori' => $this->combo($avancexx[3] + 1, $ajaxxxxx)];
                break;
            case 514: // avance parcial
                $avancexx = $this->nivel($acategor[$encatego + 1], $ajaxxxxx);
                $parametr = Parametro::where('id', $avancexx[3])->first();
                $pcategor = Parametro::where('id', $acategor[$encatego + 1])->first();
                $respuest = ['nivelxxx' => [['valuexxx' => $parametr->id, 'optionxx' => $parametr->nombre]], 'categori' => ($ajaxxxxx) ? [['valuexxx' => $pcategor->id, 'optionxx' => $pcategor->nombre]] : [$pcategor->id => $pcategor->nombre]];
                break;
            case 559: // no avanza
                $parametr = Parametro::where('id', $avancexx[3])->first();
                $pcategor = Parametro::where('id', $acategor[$encatego])->first();
                $respuest = ['nivelxxx' => [['valuexxx' => $parametr->id, 'optionxx' => $parametr->nombre]], 'categori' => ($ajaxxxxx) ? [['valuexxx' => $pcategor->id, 'optionxx' => $pcategor->nombre]] : [$pcategor->id => $pcategor->nombre]];

                break;
            case 1688: // retrocede
                $categori = [];
                $i = 0;
                foreach (Tema::combo(295, false, false) as $key => $value) {

                    if ($i < $encatego) {
                        if ($ajaxxxxx) {
                            $categori[] = ['valuexxx' => $key, 'optionxx' => $value];
                        } else {
                            $categori[$key] = $value;
                        }
                    }
                    $i++;
                }
                $parametr = Parametro::where('id', $avancexx[3])->first();
                $respuest = ['nivelxxx' => [['valuexxx' => $parametr->id, 'optionxx' => $parametr->nombre]], 'categori' => $categori];
                break;
        }
        return $respuest;
    }
    // private function retroceso($dataxxxx){}

    public function valoracion(Request $request)
    {
        if ($request->ajax()) {
            return response()->json($this->vista($request->all(), true));
        }
    }
}
