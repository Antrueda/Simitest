<?php

namespace App\Traits\Acciones\Individuales\Educacion\FormatoValoracion\FormatoValoracion;

use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Modulo;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Parametro;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Tema;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use DataTablesTrait; // trait donde se arman las datatables que se van a utilizar
    private function getCombos($opciones)
    {
        $temacomb = $this->getCombosPTCT(['temasxxx'=>[411,393,373],'campoxxx'=>'nombre',
        'orderxxx'=>'ASC',]);

        $opciones['tipocurs']= $this->getParametroTemecomboPTCT(['temaxxxx'=>411,
        'cabecera' => true,
        'dataxxxx'=>$temacomb,
        'ajaxxxxx' => false])['comboxxx'];

        $opciones['tipocurs']= $this->getParametroTemecomboPTCT(['temaxxxx'=>393,
        'cabecera' => true,
        'dataxxxx'=>$temacomb,
        'ajaxxxxx' => false])['comboxxx'];

        $opciones['tipocurs']= $this->getParametroTemecomboPTCT(['temaxxxx'=>373,
        'cabecera' => true,
        'dataxxxx'=>$temacomb,
        'ajaxxxxx' => false])['comboxxx'];

        // $opciones['tipocurs'] = Tema::comboAsc(411, true, false);
        // $opciones['trasladx'] = Tema::combo(393, true, false);
        // $opciones['condixxx'] = Tema::combo(373, true, false);

        $opciones['lugarxxx'] =  Parametro::find(235)->combo;
        $opciones['cursosxz'] = MatriculaCurso::combonnaj(true, false, $opciones['padrexxx']->id);
        $opciones['cursosxx'] = Curso::comboin(true, false, $opciones['cursosxz']);
        $opciones['moduloxx'] = Modulo::comboasignar(['cabecera' => true, 'ajaxxxxx' => false]);

      
        $opciones['grupoxxx'] = GrupoMatricula::combo(true, false);
        
        return $opciones;
    }
    public function getVista($opciones, $dataxxxx)
    {

        $opciones['rutarchi'] = $opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $opciones['formular'] = $opciones['rutacarp'] . $opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];

        $opciones['ruarchjs'] = [
            ['jsxxxxxx' => $opciones['rutacarp'] . $opciones['carpetax'] . '.Js.js']
        ];
        return $opciones;
    }
    public function getNnajSimi($dataxxxx)
    {


        if ($dataxxxx->simianti_id < 1) {
            $simianti = GeNnajDocumento::where('numero_documento', $dataxxxx->fi_datos_basico->nnaj_docu->s_documento)->first();

            if ($simianti != null) {
                $dataxxxx->update([
                    'simianti_id' => $simianti->id_nnaj,
                    'usuario_insercion' => Auth::user()->s_documento,
                ]);
                $dataxxxx->simianti_id = $simianti->id_nnaj;
            }
        }
        return $dataxxxx;
    }


    public function view($opciones, $dataxxxx)
    {
        $opciones =$this->getCombos($opciones);
        $opciones['hoyxxxxx'] = Carbon::today()->isoFormat('YYYY-MM-DD');
        $opciones['minimoxx'] = Carbon::today()->subDays(3)->isoFormat('YYYY-MM-DD');







        $opciones['document'] = Auth::user()->s_documento;
        $opciones['cargoxxx'] = Auth::user()->sis_cargo->s_cargo;

        $opciones = $this->getVista($opciones, $dataxxxx);
        // indica si se esta actualizando o viendo
        $apoyoxxx = 0;
        $usuarioz = 0;
        $opciones['padrexxx'] = [];
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
            $opciones['moduloxx'] = Modulo::combo(['cabecera' => true, 'ajaxxxxx' => false, 'cursoxxx' => $dataxxxx['modeloxx']->cursos_id]);
            $opciones['padrexxx'] = [$dataxxxx['modeloxx']->id];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'][1] = $dataxxxx['modeloxx']->id;
            $apoyoxxx = $dataxxxx['modeloxx']->apoyo_id;
            $usuarioz = $dataxxxx['modeloxx']->user_id;
            if (Auth::user()->s_documento == '17496705') {
                //ddd(Curso::get()->toArray());
            }
        }


        //$opciones['usuarioz'] = User::getUsuario(false, false);
        //if (Auth::user()->s_documento == '17496705') {
        $opciones['usuarioz'] = $this->getUsuarioUCT(['usersele' => $usuarioz]);
        //}

        // $opciones['apoyoxxx'] = User::userComboRol(['cabecera' => true, 'ajaxxxxx' => false, 'notinxxx' => 0, 'rolxxxxx' => [14, 81]]);

        //if (Auth::user()->s_documento == '17496705') {
        $opciones['apoyoxxx'] = $this->userComboRolUCT([
            'usersele' => $apoyoxxx,
            'rolxxxxx' => [14, 81],
        ]);

        // }

        $opciones['tablinde'] = false;
        $vercrear = ['opciones' => $opciones, 'dataxxxx' => $dataxxxx];
        $opciones = $this->getTablas($vercrear);


        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
