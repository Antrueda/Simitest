<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Semanal;

use DateTime;
use DatePeriod;
use DateInterval;
use Illuminate\Http\Request;
use App\Models\AsisSema\Asissema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\AsisSema\AsissemaAsisten;
use App\Models\AsisSema\AsissemaMatricula;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait SemanalAjaxTrait
{
    /**
     * combo para los servicios de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getServiciosUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'cabecera' => true,
            'ajaxxxxx' => true,
            'dependen' => $request->padrexxx
        ];
        $respuest = response()->json($this->getServiciosUpiComboCT($dataxxxx));
        return $respuest;
    }

    /**
     * combo para el responsable de la upi
     *
     * @param Request $request
     * @return string $respuest
     */
    public function getResponsableUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'ajaxxxxx' => true,
            'cargosxx' => [23,50],
            'usersele' => 0,
            'dependen' => $request->padrexxx
        ];
   
        $respuest = response()->json($this->getResponsableUpiCT($dataxxxx));
        return $respuest;
    }

    public function getGrado(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'dependen' => $request->upixxxxx,
            'servicio' => $request->padrexxx,
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getGradoAsignar($dataxxxx));
        return $respuest;
    }


    public function getGrupo(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'dependen' => $request->upixxxxx,
            'servicio' => $request->padrexxx,
        ];
        $dataxxxx['cabecera'] = $request->cabecera;

        $respuest = response()->json($this->getGrupoAsignar($dataxxxx));
        return $respuest;
    }

    public function getCurso(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipoCurs' => $request->tipoCurs,
        ];
        $dataxxxx['cabecera'] = $request->cabecera;
        $respuest = response()->json($this->getCursoWithTipo($dataxxxx));
        return $respuest;
    }
    
    public function getActividad(Request $request)
    {
        $dataxxxx = [
            'cabecera' => true,
            'ajaxxxxx' => true,
            'selected' => $request->selected,
            'orderxxx' => 'ASC',
            'tipoacti' => $request->tipoacti,
            'dependen' => $request->upixxxxx,
        ];
        $dataxxxx['cabecera'] = $request->cabecera;
        $respuest = response()->json($this->getActividadAsignar($dataxxxx));
        return $respuest;
    }

    public function getContratistaUpiAT(Request $request)
    {
        $dataxxxx = [
            'selected' => $request->selected,
            'upidxxxx'=>$request->padrexxx,
            'cargosxx' => [5,23,33,50],
            'ajaxxxxx' => true,
        ];
        $respuest = response()->json($this->getUsuarioCargosCT($dataxxxx)['comboxxx']);
        return $respuest;
    }

    public function setDesvincularMatricula(AsissemaMatricula $asismatricula,Request $request){
        $asismatricula->delete();
        $respuest = response()->json('exito');
        return $respuest;
    }

    public function setAsignarMatricula(Asissema $modeloxx,Request $request){

        $diasGrupo = []; 

        if ($modeloxx['prm_grupo_id'] == 2730) { $diasGrupo = array("Lunes","Martes");}
        if ($modeloxx['prm_grupo_id'] == 2731) { $diasGrupo = array("Miercoles", "Jueves");}
        if ($modeloxx['prm_grupo_id'] == 2732) { $diasGrupo = array("Viernes", "Sábado");}
        if ($modeloxx['prm_grupo_id'] == 2733) { $diasGrupo = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");}
        if ($modeloxx['prm_grupo_id'] == 2734) { $diasGrupo = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");}
        
        $respuest = DB::transaction(function () use ($modeloxx,$request,$diasGrupo) {
            $dataxxxx['modeloxx']=[];
               //asistencia academica
            if($modeloxx->prm_actividad_id == 2721){
                $dataxxxx['modeloxx'] = AsissemaMatricula::create([
                    'asissema_id'=>$modeloxx->id,
                    'matric_acade_id'=>$request->valuexxx,
                    'sis_esta_id'=>1,
                    'user_crea_id'=>Auth::user()->id,
                    'user_edita_id'=>Auth::user()->id,
                ]);

                foreach ($this->buscarDiasGrupo($modeloxx,$diasGrupo) as $date) {
                    AsissemaAsisten::create([
                        'asissema_matri_id'=>$dataxxxx['modeloxx']->id,
                        'fecha'=>$date,
                        'valor_asis'=>0
                    ]);
                }
                
            }
            //asistencia convenio 
            if($modeloxx->prm_actividad_id == 2724){
            
            }
            //formacion tecnica-convenios
            if($modeloxx->prm_actividad_id == 2723){
            
            }
            //formscion tecnica talleres
            if($modeloxx->prm_actividad_id == 2722){
                $dataxxxx['modeloxx'] = AsissemaMatricula::create([
                    'asissema_id'=>$modeloxx->id,
                    'matricula_curso_id'=>$request->valuexxx,
                    'sis_esta_id'=>1,
                    'user_crea_id'=>Auth::user()->id,
                    'user_edita_id'=>Auth::user()->id,
                ]);

                foreach ($this->buscarDiasGrupo($modeloxx,$diasGrupo) as $date) {
                    AsissemaAsisten::create([
                        'asissema_matri_id'=>$dataxxxx['modeloxx']->id,
                        'fecha'=>$date,
                        'valor_asis'=>0
                    ]);
                }
            }
            return $dataxxxx['modeloxx'];
        }, 5);
       
        $respuest = response()->json('exito');
        return $respuest;
    }

    public function setEstadoAsistencia(Request $request){
            $valor =0;
        if ($request->valorxxx == "true") {
            $valor = 1;
        }else{
            $valor = 0;
        }

        $asis = AsissemaAsisten::where('asissema_matri_id',$request->asistenx)->where('fecha',$request->fechaxxx)
        ->update([
            'valor_asis' => $valor
         ]);
        
        $respuest = response()->json('exito');
        return $respuest;
    }

    private function buscarDiasGrupo($modeloxx,$diasGrupo){
        $diasRegistro=[];
        $nombresDias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado" );

        $inicio= $modeloxx->prm_fecha_inicio;
        $fin = new DateTime($modeloxx->prm_fecha_inicio);
        $fin= $fin->modify( '+7 days' );
        $periodo = new DatePeriod($inicio, new DateInterval('P1D') ,$fin);
        foreach($periodo as $date){
            if(in_array($nombresDias[$date->format("w")],$diasGrupo)){
                $diasRegistro[]=$date;
            }
        }

        return $diasRegistro;
    }

    public function getFechaPuede(Request $request)
    {
        $puedecar = $this->getPuedeCargar([
            'estoyenx' => 1,
            'fechregi' => date('Y-m-d'),
            'upixxxxx' => $request->dependex,
            'formular' => 2,
        ]);

        $respuest = response()->json($puedecar);
        return $respuest;
    }
}
