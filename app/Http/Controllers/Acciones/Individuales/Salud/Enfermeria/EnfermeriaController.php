<?php

namespace App\Http\Controllers\Acciones\Individuales\Salud\Enfermeria;

use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDepen;
use App\Traits\Combos\CombosTrait;
use App\Http\Controllers\Controller;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;
use App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria\EnfermeriaAjaxTrait;
use App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria\EnfermeriaCrudTrait;
use App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria\EnfermeriaDataTablesTrait;
use App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria\EnfermeriaListadosTrait;
use App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria\EnfermeriaParametrizarTrait;
use App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria\EnfermeriaPestaniasTrait;
use App\Traits\Acciones\Individuales\Salud\Enfermeria\Enfermeria\EnfermeriaVistasTrait;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionTiempos\ManageTimeTrait;
// use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
// use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;
// use App\Http\Requests\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionarioCrearRequest;

class EnfermeriaController extends Controller
{
    use EnfermeriaParametrizarTrait; // trait donde se inicializan las opciones de configuracion
    use EnfermeriaPestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use EnfermeriaListadosTrait; // trait que arma las consultas para las datatables
    use EnfermeriaCrudTrait; // trait donde se hace el crud de localidades
    use EnfermeriaDataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    use EnfermeriaVistasTrait; // trait que arma la logica para lo metodos: crud
    use EnfermeriaAjaxTrait;
    use  ManageTimeTrait;
    use CombosTrait; //


    public function __construct()
    {
        $this->opciones['permisox'] = 'enfermeria';
        $this->opciones['routxxxx'] = 'enfermeria';
        $this->getOpciones();
        $this->middleware($this->getMware());
        $this->opciones['conthabi'] = [];

        $this->pestania2[0][4]=true;
        $this->pestania2[0][5] = 'active';
        
    }

    public function index(SisNnaj $padrexxx)
    {

        $puedoCrear = $this->verificarPuedoCrear($padrexxx);
        $this->opciones['usuariox'] = $padrexxx->fi_datos_basico;
        $this->pestania[0][2]=$padrexxx->id;
        $this->pestania2[0][2]=$padrexxx->id;
        $this->pestania2[1][4]=true;
        $this->pestania2[1][2]=$padrexxx->id;
        $this->pestania3[0][4]=true;
        $this->pestania3[0][2]=$padrexxx->id;
        $this->getPestanias([]);
        $this->getTablas($padrexxx->id, $puedoCrear['puedo']);
        return view($this->opciones['rutacarp'] . 'Enfermeria.pestanias', ['todoxxxx' => $this->opciones]);
    }


    public function create(SisNnaj $padrexxx)
    {
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => Carbon::now()->toDateString(),
        ]);
        $this->opciones['puedetiempo'] = $puedexxx;
        $puedoCrear = $this->verificarPuedoCrear($padrexxx);
        if ($puedoCrear['puedo']) {
            $this->opciones['parametr'] = [$padrexxx->id];
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR REGISTRO DIARIO DE ENFERMERIA', 'btn btn-sm btn-primary submit-pvf']);
            return $this->view(['modeloxx' => '', 'accionxx' => ['crearxxx', 'formulario'], 'padrexxx' => $padrexxx]);
        } else {
            return redirect()
                ->route('cgicuest', [$padrexxx->id])
                ->with('info', $puedoCrear['meserror']);
        }
    }
    public function store(CgihCuestionarioCrearRequest $request, SisNnaj  $padrexxx)
    {

        $request->request->add(['sis_esta_id' => 1]);
        $request->request->add(['sis_nnaj_id' => $padrexxx->id]);
        return $this->setCghiCuestionario([
            'requestx' => $request,
            'modeloxx' => '',
            'infoxxxx' => 'Registro diario de enfermeria creado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }
    public function show(CgihCuestionario $modeloxx)
    {
    
      $this->contarHabilidades($modeloxx);
      $puedexxx = $this->getPuedeCargar([
          'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
          'fechregi' => $modeloxx->fecha,
      ]);
      if ($puedexxx['tienperm']) {
          if ($this->verificarPuedoEditar($modeloxx)) {
              $this->opciones['puedetiempo'] = $puedexxx;
              $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
              return $this->viewVer(['modeloxx' => $modeloxx, 'accionxx' => ['verxxxxx', 'show'], 'padrexxx' => $modeloxx->nnaj]);
      
          } else {
              return redirect()
                  ->route('cgicuest', [$modeloxx->sis_nnaj_id])
                  ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
          }
      } else {
          return redirect()
              ->route('cgicuest', [$modeloxx->sis_nnaj_id])
              ->with('info', $puedexxx['msnxxxxx']);
      }
    
    }

    public function edit(CgihCuestionario $modeloxx)
    {
        $this->contarHabilidades($modeloxx);
        $puedexxx = $this->getPuedeCargar([
            'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
            'fechregi' => $modeloxx->fecha,
        ]);
        if ($puedexxx['tienperm']) {
            if ($this->verificarPuedoEditar($modeloxx)) {
                $this->opciones['puedetiempo'] = $puedexxx;
                $this->opciones['usuariox'] = $modeloxx->nnaj->fi_datos_basico;
                $this->getBotones(['editarxx', [], 1, 'GUARDAR CUESTIONARIO DE GUSTOS', 'btn btn-sm btn-primary']);
                return $this->view(['modeloxx' => $modeloxx, 'accionxx' => ['editarxx', 'formulario'], 'padrexxx' => $modeloxx->nnaj]);
        
            } else {
                return redirect()
                    ->route('cgicuest', [$modeloxx->sis_nnaj_id])
                    ->with('info', 'No tiene permiso para editar este formulario fue creado por otra persona.');
            }
        } else {
            return redirect()
                ->route('cgicuest', [$modeloxx->sis_nnaj_id])
                ->with('info', $puedexxx['msnxxxxx']);
        }
    }
    public function update(CgihCuestionarioCrearRequest $request, CgihCuestionario $modeloxx)
    {
        
        return $this->setCghiCuestionario([
            'requestx' => $request,
            'modeloxx' => $modeloxx,
            'infoxxxx' => 'Registro diario de enfermeria editado con éxito',
            'routxxxx' => $this->opciones['routxxxx'] . '.editarxx'
        ]);
    }

    public function inactivate(CgihCuestionario $modeloxx)
    {

        $this->getBotones(['borrarxx', [], 1, 'INACTIVAR CUESTIONARIO', 'btn btn-sm btn-primary']);
        return $this->viewSimple(['modeloxx' => $modeloxx, 'accionxx' => ['destroyx', 'destroyx'], 'padrexxx' => $modeloxx->nnaj]);
    }


    public function destroy(Request $request, CgihCuestionario $modeloxx)
    {

        $modeloxx->update(['sis_esta_id' => 2, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Registro diario de enfermeria inactivado correctamente');
    }

    public function activate(CgihCuestionario $modeloxx)
    {
        $this->getBotones(['activarx', [], 1, 'ACTIVAR Cuestionario de Gustos e Intereses', 'btn btn-sm btn-primary']);
        return $this->viewSimple(['modeloxx' => $modeloxx, 'accionxx' => ['activarx', 'activarx'], 'padrexxx' => $modeloxx->nnaj]);
    }
    public function activar(Request $request, CgihCuestionario  $modeloxx)
    {
        $modeloxx->update(['sis_esta_id' => 1, 'user_edita_id' => Auth::user()->id]);
        return redirect()
            ->route($this->opciones['permisox'], [$modeloxx->nnaj])
            ->with('info', 'Registro diario de enfermeria activado correctamente');
    }



    private function verificarPuedoCrear($padrexxx)
    {
        $date = new DateTime();
        $data = [];
        if ($padrexxx->fi_datos_basico->nnaj_nacimi->Edad >= 1 && $padrexxx->fi_datos_basico->nnaj_nacimi->Edad < 29) {
            $data['puedo'] = true;

            $ultimoperfil = CgihCuestionario::where('sis_esta_id', 1)->where('sis_nnaj_id', $padrexxx->id)->orderBy('created_at', 'desc')->first();
            if ($ultimoperfil != null) {
                $fecha1 = new DateTime($ultimoperfil->fecha);
                $diff = $date->diff($fecha1);
                $days = $diff->days;
            } else {
                $days = 366;
            }
            if ($days > 365) {
                $data['puedo'] = true;

              // $matricul =$padrexxx->Matricula;
             //  $matriculaCurso=MatriculaCurso::where('sis_esta_id',1)->where('sis_nnaj_id',$padrexxx->id)->orderBy('created_at','desc')->first();
            
                 // if ($matricul != "" && $matricul >= 1 || $matriculaCurso != null) {
                   ///      $data['puedo'] = true;
                   ///  }else{
                    //   $data['puedo'] = false;
                    //     $data['meserror']='Nnaj no tiene  matricula talleres activa .';
                  //   }
            } else {
                $hoy = $date;
                $data['puedo'] = false;
                $cuandoPuedo = 365 - $days;
                $cuandoPuedo = $hoy->modify('+ ' . $cuandoPuedo . ' day');

                $data['meserror'] = 'Solo podrá diligenciar el Registro diario de enfermeria, PRÓXIMA FECHA QUE SE PUEDE DILIGENCIAR UNO NUEVO ' . $cuandoPuedo->format('Y-m-d');
            }
        } else {
            $data['puedo'] = false;
            $data['meserror'] = 'Nnaj no tiene permiso de edad para crear el cuestionario de Gustos intereses';
        }
        return $data;
    }


    private function verificarPuedoEditar($modeloxx)
    {
        if ($modeloxx->user_crea_id == Auth::user()->id || Auth::user()->roles->first()->id == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function contarHabilidades($modeloxx)
    {//suma las letras
        $itemsxxx = [];
        foreach ($modeloxx->habilidades as $key => $value) {
            $cursoxxx = $value->curso->s_cursos;
            $letraxxx = $value->letra->nombre;
            if (!array_key_exists($letraxxx, $itemsxxx)) {
                $itemsxxx[$letraxxx] = [1, $cursoxxx];
            } else {
                $itemsxxx[$letraxxx][0] += 1;
            }
        }
        
        $this->opciones['conthabi'] = $itemsxxx;
        arsort( $this->opciones['conthabi']);
    }

    public function getUpisNnajUsuarioCT($dataxxxx)
    {

        $dataxxxx = $this->getDefaultCT($dataxxxx);
        // // * encontrar las dependencia del nnaj
        $upisnnaj = SisDepen::select(['sis_depens.id'])
            ->join('nnaj_upis', 'sis_depens.id', '=', 'nnaj_upis.sis_depen_id')
            // * encontrar las upis activas del nnaj
            ->where(function ($queryxxx) use ($dataxxxx) {
                $queryxxx->where('nnaj_upis.sis_nnaj_id', $dataxxxx['nnajidxx']);
                $queryxxx->where('nnaj_upis.sis_esta_id', 1);
            })
            ->get()->toArray();
        // * encontrar las dependencias del profesional registrado y que sean comunes a las del nnaj
        $dataxxxx['dataxxxx'] = SisDepen::join('sis_depen_user', 'sis_depens.id', '=', 'sis_depen_user.sis_depen_id')
            ->where(function ($queryxxx) use ($upisnnaj) {
                $queryxxx->where('sis_depen_user.user_id', Auth::user()->id);
                $queryxxx->whereIn('sis_depen_user.sis_depen_id', $upisnnaj);
                $queryxxx->where('sis_depen_user.sis_esta_id', 1);
            })
            // * encontrar la upi que se le asignó
            ->orWhere(function ($queryxxx) use ($dataxxxx) {
                $queryxxx->where('sis_depens.id',  $dataxxxx['dependid']);
            })
            ->get(['sis_depens.id as valuexxx', 'sis_depens.nombre as optionxx']);
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }

    public function getCuerpoComboSinValueCT($dataxxxx)
    {
        $comboxxx = $this->getCabecera($dataxxxx);
        foreach ($dataxxxx['dataxxxx'] as $registro) {
            if ($dataxxxx['ajaxxxxx']) {
                $selected = '';
                if (in_array($registro->valuexxx, $dataxxxx['selected'])) {
                    $selected = 'selected';
                }
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => strtoupper($registro->optionxx), 'selected' => $selected];
            } else {
                $comboxxx[$registro->valuexxx] = strtoupper($registro->optionxx);
            }
        }
        return $comboxxx;
    }

}