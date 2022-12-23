<?php

namespace App\Traits\Acciones\Individuales\Emprender\Egreso;



use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\CursoModulo;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Emprender\Egreso\EgreApoyo;
use App\Models\Acciones\Individuales\Emprender\Egreso\EgresoTelefono;
use App\Models\Acciones\Individuales\Emprender\Egreso\SEgreso;
use App\Models\Acciones\Individuales\Salud\Odontologia\VOdontologia;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\VDiagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Vsmedicina;
use App\Models\CentroZonal\CentroZosec;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Sistema\SisNnaj;

use App\Traits\DatatableTrait;

use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use DatatableTrait;

    /**
     * encontrar listar paises
     */

    public function getDttb($queryxxx, $requestx)
    {
        return datatables()
            ->eloquent($queryxxx)
            ->addColumn('btns', 'Acciones/Grupales/Agtema/botones/botonesapi', 2)
            ->addColumn('s_estado', $requestx->estadoxx)
            ->rawColumns(['btns', 's_estado'])
            ->toJson();
    }


    public function listaSEgresos(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SEgreso::select([
                's_egresos.id',
                's_egresos.fecha',
                'depen.nombre as depen',
                

                'sis_estas.s_estado',
                'cargue.name as cargue', 
                's_egresos.sis_esta_id',
                ])
                ->join('sis_estas', 's_egresos.sis_esta_id', '=', 'sis_estas.id')
                ->join('sis_depens as depen', 's_egresos.upi_id', '=', 'depen.id')
                ->join('users as cargue', 's_egresos.user_crea_id', '=', 'cargue.id')
                ->where('s_egresos.sis_esta_id', 1)
                ->where('s_egresos.sis_nnaj_id',$padrexxx->id);
                

            return $this->getDtEgreso($dataxxxx, $request);
        }
    }


    public function listaTelefonos(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  EgresoTelefono::select([
                'egreso_telefonos.id',
                'egreso_telefonos.fechareg',
                'egreso_telefonos.obserllamad',
                'sis_estas.s_estado',
                'tipollama.nombre as tipollama',
                'egreso_telefonos.sis_esta_id',
                ])
                ->join('sis_estas', 'egreso_telefonos.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as tipollama', 'egreso_telefonos.tipollama_id', '=', 'tipollama.id')
                ->where('egreso_telefonos.sis_esta_id', 1)
                ->where('egreso_telefonos.egreso_id',$padrexxx->id);
                

            return $this->getDtEgreso($dataxxxx, $request);
        }
    }

    
    public function listaRedes(Request $request, SisNnaj $padrexxx)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  EgreApoyo::select([
                'egre_apoyos.id',
                'egre_apoyos.nombreper',
                'egre_apoyos.servicios',
                'egre_apoyos.contacto',
                'sis_estas.s_estado',
                'tipored.nombre as tipored',
                'egre_apoyos.sis_esta_id',
                ])
                ->join('sis_estas', 'egre_apoyos.sis_esta_id', '=', 'sis_estas.id')
                ->join('parametros as tipored', 'egre_apoyos.tipo_id', '=', 'tipored.id')
                ->where('egre_apoyos.sis_esta_id', 1)
                ->where('egre_apoyos.egreso_id',$padrexxx->id);
                

            return $this->getDtEgreso($dataxxxx, $request);
        }
    }

    
    public function getTodoComFami(Request $request,SisNnaj $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'fosubtse'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  SisNnaj::select([
                'sis_nnajs.id',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_compfamis.s_telefono',
                'tipodocu.nombre as tipodocu',
                'sis_nnajs.sis_esta_id',
                'nnaj_nacimis.d_nacimiento',
                'sis_nnajs.created_at',
                'sis_estas.s_estado',
                
            ])
                ->join('fi_datos_basicos', 'sis_nnajs.id', '=', 'fi_datos_basicos.sis_nnaj_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('parametros as tipodocu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocu.id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('sis_estas', 'sis_nnajs.sis_esta_id', '=', 'sis_estas.id')
                ->join('fi_compfamis', 'sis_nnajs.id', '=', 'fi_compfamis.sis_nnaj_id')
                ->where('fi_compfamis.prm_reprlega_id', 227)
                ->wherein('sis_nnajs.id', FiCompfami::select('sis_nnaj_id')->where('sis_nnajnnaj_id', $padrexxx->id)->get());
                

            return $this->getDt($dataxxxx, $request);
        }
    }
    public function getNnajsele(Request $request)
    {
        if ($request->ajax()) {

            $dataxxxx = [
                'tipodocu' => ['prm_doc_id', ''],
                'parentes' => ['parent_id', ''],
                

            ];
            $document = FiDatosBasico::where('sis_nnaj_id', $request->padrexxx)->first();
            if (isset($document->id)) {
                $dataxxxx['tipodocu'][1] = $document->nnaj_docu->prm_tipodocu_id;
                $dataxxxx['parentes'][1] = FiCompfami::where('sis_nnaj_id', $request->padrexxx)->first()->Parentesco;
            }

            return response()->json($dataxxxx);
        }
    }

    public function getCodigo(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [
                'codigo' => Diagnostico::where('id',$request->dataxxxx)->first()->codigo,
                'campoxxx' => '#codigo',
                'selected' => 'selected'
            ];
            return response()->json($respuest);
        }
    }

    public function getFechaNacimiento(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['fechaxxx' => '', 'edadxxxx' => ''];
            if (is_numeric($request->padrexxx) && $request->padrexxx >= 6) {
                $fechaxxx = explode('-', date('Y-m-d'));
                $respuest = ['fechaxxx' => ($fechaxxx[0] - $request->padrexxx) . '-' . $fechaxxx[1] . '-' . $fechaxxx[2], 'edadxxxx' => $request->padrexxx];
            }
            return response()->json($respuest);
        }
    }

    function getAgregartele(Request $request, SEgreso $padrexxx)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
            $dataxxxx['sis_esta_id'] = 1;
            EgresoTelefono::transaccion($dataxxxx, '');
            return response()->json($respuest);
        }
    }

    public function quitartele(Request $request)
    {
        if ($request->ajax()) {
            $respuest = [];
            $dataxxxx = $request->all();
            $modeloxx = EgresoTelefono::where('id',$dataxxxx['id'])->first();
            $modeloxx->delete();
            return response()->json($respuest);
        }
      }

      function getAgregarRed(Request $request, SEgreso $padrexxx)
      {
          if ($request->ajax()) {
              $respuest = [];
              $dataxxxx = $request->all();
              $dataxxxx['sis_esta_id'] = 1;
              EgreApoyo::transaccion($dataxxxx, '');
              return response()->json($respuest);
          }
      }
  
      public function quitarRed(Request $request)
      {
          if ($request->ajax()) {
              $respuest = [];
              $dataxxxx = $request->all();
              $modeloxx = EgreApoyo::where('id',$dataxxxx['id'])->first();
              $modeloxx->delete();
              return response()->json($respuest);
          }
        }

        public function getCentroTp($dataxxxx)
        {
    
            $dataxxxx['dataxxxx'] = CentroZosec::select(['centro_zosecs.id as valuexxx', 'centro_zosecs.nombre as optionxx'])
                ->join('asignar_centros', 'centro_zosecs.id', '=', 'asignar_centros.censec_id')
                ->where('asignar_centros.centro_id', $dataxxxx['tipocurs'])
                ->where('centro_zosecs.sis_esta_id', 1)
                ->orderBy('centro_zosecs.id', 'asc')
                ->get();
            $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
            return    $respuest;
        }
    
    
        public function getCentro(Request $request)
        {
            $dataxxxx = [
                'cabecera' => true,
                'ajaxxxxx' => true,
                'selected' => $request->selected,
                'orderxxx' => 'ASC',
                'tipocurs' => $request->upixxxxx,
                
            ];
            $dataxxxx['cabecera'] = $request->cabecera;
    
            $respuest = response()->json($this->getCentroTp($dataxxxx));
            return $respuest;
        }

  

     


}



