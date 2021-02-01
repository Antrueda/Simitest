<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisLocalupz;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisUpz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

/**
 * realiza la comunicación entre las dos bases de datos=>'{$value->s_iso}'que se busca?
 * * que a traves de una api desarrollada en java la interfaz pueda realizar consultas e insertar registros
 * * al crar un nnaj se digite la cédula y se realice una búsqueda en la db del simi antiguo y este existe alla lo traiga y lo inserte en la nueva base de datos
 * * sino existe lo debe crear en las dos db
 */
trait InterfazFiTrait
{
    private $buscarxx = [
        "primapel" => '',
        "seguapel" => '',
        "primnomb" => '',
        "segunomb" => '',
        "idcampox" => '',
        "document" => '',
        'solodato' => false,
        "casoxxxx" => 1,
    ];
    private $etniaxxx = ['PALQ' => 160, 'NEGR' => 163, 'RSAN' => 162, 'ROM' => 158,  'INDG' => 157,  'BLNC' => 161, 'N/A' => 164, 'MEST' => 159];
    private $estacivi = [1 => 152, 2 => 153, 3 => 154, 4 => 155];
    private $tipodocu = ['CE' => 142, 'NU' => 17, 'RC' => 16, 'TI' => 18, 'SD' => 145, 'CC' => 19, 6 => 2496, 8 => 2494, 'CAEC' => 2495];


    // private $_urlxxxx = "http://localhost:8090/simiapi-0.0.2-SNAPSHOT/"; // en pruebas
    private $upisxxxx = [
        1 => 0, 2 => 0, 3 => 0, 4 => 15, 5 => 6, 6 => 12, 7 => 19, 8 => 20, 9 => 0, 10 => 10, 11 => 0, 12 => 0,
        13 => 2, 14 => 8, 15 => 7, 16 => 3, 17 => 5, 18 => 4, 19 => 140, 20 => 212, 21 => 21, 22 => 16, 23 => 14, 24 => 0, 25 => 9, 26 => 18, 27 => 17, 28 => 0, 29 => 0,
    ];
    private $oriesexu = [1 => 29, 2 => 30, 3 => 31, 4 => 27, 5 => 28,];

    private $idengene = [1 => 23, 2 => 24, 3 => 25, 4 => 26, 5 => 27];

    private $vestimen = [1 => 2484, 2 => 2485];

    private $cuendocu = [1 => 227, 2 => 228];
    private $situmili = [1 => 227, 2 => 228, 3 => 235];
    private $tipoblac = [1 => 650, 2 => 651];
    public function getUrl()
    {
        return url('') == 'http://localhost/simi' ? "http://localhost:8090/simiapi/" : 'http://localhost:8090/simiapi-0.0.2-SNAPSHOT/';
    }
    public function getBuscarNnaj(Request $request)
    {
        // if ($request->ajax()) {
        // $request->document = 1013689581;
        // // $request->document = '';
        // $request->idcampox = 'primnomb';

        // $request->primapel = '';
        // $request->seguapel = 'DANIEL';
        // $request->primnomb = '';
        // $request->segunomb = 'SANTIAGO';
        $this->buscarxx['primapel'] = strtoupper($request->primapel);
        $this->buscarxx['seguapel'] = strtoupper($request->seguapel);
        $this->buscarxx['primnomb'] = strtoupper($request->primnomb);
        $this->buscarxx['segunomb'] = strtoupper($request->segunomb);
        $this->buscarxx['idcampox'] = $request->idcampox;
        $this->buscarxx['document'] = $request->document;


        $campollen = [
            ['campoxxx' => $request->document != '' ? 1 : 0],
            ['campoxxx' => ($request->document == '' && $request->primnomb != '' && $request->segunomb != '') ? 2 : 0,], // pn sn
            ['campoxxx' => ($request->document == '' && $request->segunomb != '' && $request->primapel != '') ? 3 : 0,], // sn pa
            ['campoxxx' => ($request->document == '' && $request->primapel != '' && $request->seguapel != '') ? 4 : 0,], // pa sa
            ['campoxxx' => ($request->document == '' && $request->primnomb != '' && $request->primapel != '') ? 5 : 0,], // pn pa
            ['campoxxx' => ($request->document == '' && $request->primnomb != '' && $request->seguapel != '') ? 6 : 0,], // pn sa
            ['campoxxx' => ($request->document == '' && $request->segunomb != '' && $request->seguapel != '') ? 7 : 0,], // sn sa
        ];
        foreach ($campollen as $key => $value) {

            if ($value['campoxxx'] > 0) {
                $this->buscarxx['casoxxxx'] = $value['campoxxx'];
            }
        }


        $dataxxxx = [];
        if ($this->buscarxx['casoxxxx'] > 0) {

            $filtroxx = Http::post($this->getUrl() . 'nnajs/buscar', $this->buscarxx)->json();
            foreach ($filtroxx as $key => $value) {
                $nnajxxxx = $value['gennajxx'];
                $nnajxxxx['defectox'] = $value['defectox'];
                $nnajxxxx['label'] = $nnajxxxx['document'] . ' - ' .
                    $nnajxxxx['primapel'] . ' ' .
                    $nnajxxxx['seguapel'] . ' ' .
                    $nnajxxxx['primnomb'] . ' ' .
                    $nnajxxxx['segunomb'];
                $dataxxxx[] = $nnajxxxx;
            }
        }
        return response()->json($dataxxxx);

        // }
    }

    public function getBuscarNnajAgregar($request)
    {
        $this->buscarxx['solodato'] = true;
        // $request->docuagre = 1071631394;
        $this->buscarxx['casoxxxx'] = 1;
        $this->buscarxx['document'] = $request->docuagre;
        $todoxxxx = Http::post($this->getUrl() . 'nnajs/buscar', $this->buscarxx)->json();
        $filtroxx = $todoxxxx[0]['gennajxx'];

        $fiaceing = Http::get($this->getUrl() . 'fiaceing/' . $todoxxxx[0]['gennajxx']['idxxxxxx'])->json();
        $objetoxx = new FiDatosBasico;
        $dependen = SisDepen::where('simianti_id')->first()->id;
        $objetoxx->sis_depen_id = $dependen == 30 ? 3 : $dependen;
        $sexoxxxx = ['F' => 21, 'M' => 20, 'IN' => 22];
        $objetoxx->prm_sexo_id = $sexoxxxx[$filtroxx['generoxx']];
        $objetoxx->diligenc = explode('T', $fiaceing)[0];

        $objetoxx->prm_identidad_genero_id = $this->idengene[$filtroxx['geneiden']];
        $objetoxx->prm_orientacion_sexual_id = $this->oriesexu[$filtroxx['oriesexo']];


        if ($filtroxx['rhxxxxxx'] != null) {

            $objetoxx->prm_gsanguino_id = Parametro::where('nombre', explode('+', $filtroxx['rhxxxxxx'])[0])->first()->id;


            $objetoxx->prm_factor_rh_id = Parametro::where(
                'nombre',
                str_replace(str_replace("+", "", $filtroxx['rhxxxxxx']), "", $filtroxx['rhxxxxxx'])
            )->first()->id;
        }

        $objetoxx->prm_tipodocu_id = $this->tipodocu[$filtroxx['tipodocu']];

        $objetoxx->prm_doc_fisico_id = $this->cuendocu[$filtroxx['cuentdoc']];

        if ($filtroxx['situmili'] != null) {
            $objetoxx->prm_situacion_militar_id = $this->situmili[$filtroxx['situmili']];
        }


        $objetoxx->prm_estado_civil_id = $this->estacivi[$filtroxx['estacivi']];


        $objetoxx->prm_etnia_id = $this->etniaxxx[$filtroxx['etniaxxx']];
        //
        // s_lugar_focalizacion
        // s_nombre_focalizacion
        // sis_localidad_id
        // sis_upz_id
        // sis_upzbarri_id
        // ddd(array_search(142, $tipodocu));

        // ddd($objetoxx->prm_doc_fisico_id);
        $objetoxx->s_documento = $request->docuagre;
        // ddd($todoxxxx[0]);
        $objetoxx->s_primer_nombre = $filtroxx['primnomb'];
        $objetoxx->s_segundo_nombre = $filtroxx['segunomb'];
        $objetoxx->s_primer_apellido = $filtroxx['primapel'];
        $objetoxx->s_segundo_apellido = $filtroxx['seguapel'];
        $objetoxx->s_apodo = $filtroxx['apodoxxx'];
        $objetoxx->prm_tipoblaci_id = $this->tipoblac[$filtroxx['tipoblac']];
        $objetoxx->prm_vestimenta_id = $this->vestimen[$filtroxx['condvest']];

        $municipi = SisMunicipio::where('simianti_id',  $todoxxxx[0]['muniexpe']['codimuni'])->first();
        $objetoxx->sis_municipioexp_id = $municipi->id;
        $objetoxx->sis_departamentoexp_id = $municipi->sis_departamento_id;
        $objetoxx->sis_paiexp_id = $municipi->sis_departamento->sis_pai_id;
        /**
         * datos de nacimiento
         */

        $municipi = SisMunicipio::where('simianti_id',  $todoxxxx[0]['gennajxx']['idnacimi'])->first();
        $objetoxx->sis_municipio_id = $municipi->id;
        $objetoxx->sis_departamento_id = $municipi->sis_departamento_id;
        $objetoxx->sis_pai_id = $municipi->sis_departamento->sis_pai_id;


        $objetoxx->sis_pai_id = SisPai::where('s_pais', $todoxxxx[0]['paisnaci']['nombrexx'])->first()->id;
        // $objetoxx->nnaj_nacimi->sis_municipio_id=1;
        $objetoxx->nnaj_nacimi = new NnajNacimi;
        $objetoxx->d_nacimiento = $objetoxx->nnaj_nacimi->d_nacimiento = explode('T', $filtroxx['fechnaci'])[0];
        $fiaceing = Http::get($this->getUrl() . 'fiaceing/barrioxx/' . $todoxxxx[0]['gennajxx']['idxxxxxx'])->json();

         $barrioxx=Http::get($this->getUrl() . 'territorios/barrioxx/'.$fiaceing)->json();

         $upzxxxxx=SisUpz::select(['sis_upzbarris.id','sis_upzbarris.sis_localupz_id','sis_localupzs.sis_localidad_id'])
         ->join('sis_localupzs','sis_upzs.id','=','sis_localupzs.sis_upz_id')
         ->join('sis_upzbarris','sis_localupzs.id','=','sis_upzbarris.sis_localupz_id')
         ->join('sis_barrios','sis_upzbarris.sis_barrio_id','=','sis_barrios.id')
         ->where('sis_upzs.simianti_id', $barrioxx['idpadrex'])
         ->where('sis_barrios.simianti_id', $fiaceing)
         ->first();
         $objetoxx->sis_localidad_id=$upzxxxxx->sis_localidad_id;
         $objetoxx->sis_upz_id=$upzxxxxx->sis_localupz_id;
         $objetoxx->sis_upzbarri_id=$upzxxxxx->id;


        return $objetoxx;
    }
    public function getData($dataxxxx)
    {
        return [

            'idxxxxxx' => '',
            'primapel' => $dataxxxx['s_primer_apellido'],
            'seguapel' => $dataxxxx['s_segundo_apellido'],
            'primnomb' => $dataxxxx['s_primer_nombre'],
            'segunomb' => $dataxxxx['s_segundo_nombre'],
            'apodoxxx' => $dataxxxx['s_apodo'],
            'fechnaci' => $dataxxxx['d_nacimiento'],
            'rhxxxxxx' => Parametro::find($dataxxxx['prm_factor_rh_id'])->nombre . Parametro::find($dataxxxx['prm_gsanguino_id'])->nombre,
            'generoxx' => $dataxxxx['prm_sexo_id'],
            'tipodocu' => array_search($dataxxxx['prm_tipodocu_id'], $this->tipodocu),
            'document' => $dataxxxx['s_documento'],
            'notariax' => '',
            'registra' => '',
            'lugaexpe' => $dataxxxx['sis_municipioexp_id'],
            'idnacimi' => $dataxxxx['sis_municipio_id'],
            'clalibmi' => 1, //$dataxxxx[''],
            'estadoxx' => 'A',
            'numlibmi' => $dataxxxx['s_documento'],
            'ultgrapr' => '',
            'etniaxxx' => array_search($dataxxxx['prm_etnia_id'], $this->etniaxxx),
            'emailxxx' => '',
            'nombiden' => $dataxxxx['s_nombre_identitario'],
            'estacivi' => array_search($dataxxxx['prm_estado_civil_id'], $this->estacivi),
            'geneiden' => array_search($dataxxxx['prm_identidad_genero_id'], $this->idengene),
            'oriesexo' => array_search($dataxxxx['prm_orientacion_sexual_id'], $this->oriesexu),
            'condvest' => array_search($dataxxxx['prm_vestimenta_id'], $this->vestimen),
            'autocuid' => '',
            'sinidpor' => parametro::find($dataxxxx['prm_ayuda_id'])->nombre,
            'cuentdoc' => array_search($dataxxxx['prm_doc_fisico_id'], $this->cuendocu),
            'situmili' => array_search($dataxxxx['prm_situacion_militar_id'], $this->situmili),
            'tipoblac' => array_search($dataxxxx['prm_tipoblaci_id'], $this->tipoblac),
            'paisnaci' => SisPai::find($dataxxxx['sis_pai_id'])->simianti_id,
            'fechinse' => date('Y-m-d'),
            'usuainse' => Auth::user()->s_documento,
            'fechmodi' => date('Y-m-d'),
            'usuamodi' => Auth::user()->s_documento,
        ];
    }

    public function getDocumento($nnajxxxx)
    {
        return [
            'idxxxxxx' => $nnajxxxx['idxxxxxx'],
            'tipodocu' => $nnajxxxx['tipodocu'],
            'document' => $nnajxxxx['document'],
            'notariax' => '',
            'registra' => '',
            'idmunici' => $nnajxxxx['idmunici'],
            'fechinse' => $nnajxxxx['fechinse'],
            'usuainse' => $nnajxxxx['usuainse'],
            'fechmodi' => $nnajxxxx['fechmodi'],
            'usuamodi' => $nnajxxxx['usuamodi'],
            'estadoxx' => $nnajxxxx['estadoxx'],
        ];
    }
    public function getUpiNnaj($nnajxxxx)
    {
        return    [
            // 'idxxxxxx' => 0,
            'idupixxx' => $nnajxxxx['idupixxx'],
            'motivoxx' => 'DE NUEVO DESARROLLO AL DESARROLLO ACTUAL',
            'tiempoxx' => 0,
            'modalida' => 7,
            'anioxxxx' => 0,
            'idnnajxx' => $nnajxxxx['idxxxxxx'],
            'idvalini' => 0,
            'fechingr' => '',
            'fechegre' => '',
            'estadoxx' => $nnajxxxx['estadoxx'],
            'origenxx' => '',
            'fuentexx' => '',
            'flagxxxx' => '',
            'servicio' => 7,
            'estacomp' => '',
            'fechinse' => $nnajxxxx['fechinse'],
            'usuainse' => $nnajxxxx['usuainse'],
            'fechmodi' => $nnajxxxx['fechmodi'],
            'usuamodi' => $nnajxxxx['usuamodi'],
        ];
    }
    public function getInsertarDatosBasicos($dataxxxx, $modeloxx)
    {
        $nnajxxxx = $this->getData($dataxxxx);
        // grabar ge_nnaj
        $filtroxx = Http::post($this->getUrl() . 'nnajs/nuevo', $nnajxxxx)->json();
        $nnajxxxx['idxxxxxx'] = $filtroxx;
        $nnajxxxx['idmunici'] = $dataxxxx['sis_municipioexp_id'];
        $filtroxx = Http::post($this->getUrl() . 'documentonnaj/nuevo', $this->getDocumento($nnajxxxx))->json();
        $nnajxxxx['idupixxx'] = $dataxxxx['sis_depen_id'];
        $filtroxx = Http::post($this->getUrl() . 'upinnaj/nuevo', $this->getUpiNnaj($nnajxxxx))->json();

        // $this->buscarxx['document'] = $dataxxxx['s_documento'];
        // $filtroxx = Http::get($this->getUrl() . 'nnajs/'.$dataxxxx['s_documento'], $this->buscarxx)->json();
        // $filtroxx = Http::post($this->getUrl() . 'nnajs/buscar', $this->buscarxx)->json();
        // ddd($this->buscarxx);

    }

    public function getTraerData($departam,$upzxxxxx)
    {

        return  Http::get($this->getUrl() . 'territorios/' . $departam.'/'.$upzxxxxx)->json();

        // $filtroxx = Http::post($this->getUrl() . 'nnajs/traer')->json();

        // foreach ($filtroxx as $key => $value) {
        //     $paisxxxx=SisPai::where('s_pais',$value['nombrexx'])->first();
        //     if(isset($paisxxxx->id)){
        //         $paisxxxx->update(['simianti_id'=>$value['idxxxxxx']]);
        //     }
        // }

        //         foreach (SisPai::get() as $key => $value) {

        //             echo "SisPai::create(['s_pais'=>'{$value->s_pais}', 's_iso'=>'{$value->s_iso}','simianti_id'=>'{$value->simianti_id}', 'sis_esta_id'=>'{$value->sis_esta_id}', 'user_crea_id'=>'{$value->user_crea_id}', 'user_edita_id'=>'{$value->user_edita_id}']
        //    );<br>";
        //         }
        // return $filtroxx ;
    }
}
