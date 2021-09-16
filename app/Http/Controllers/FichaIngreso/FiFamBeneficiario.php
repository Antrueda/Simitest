<?php

namespace App\Http\Controllers\FichaIngreso;

use App\Models\Tema;
use App\Models\User;
use App\Models\Parametro;
use App\Models\sistema\SisPai;
use App\Models\sistema\SisUpz;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisBarrio;
use Illuminate\Support\Facades\DB;
use App\Models\sistema\SisDepartam;
use App\Http\Controllers\Controller;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisMunicipio;
use Illuminate\Support\Facades\Auth;
use App\Models\fichaIngreso\NnajDese;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\fichaIngreso\NnajFiCsd;
use app\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\NnajFocali;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajSitMil;
use App\Traits\Fi\Datobasi\DBCrudTrait;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Http\Requests\FichaIngreso\FiDatosBasicoUpdateRequest;

class FiFamBeneficiario extends Controller
{

    use DBCrudTrait;

    public function index()
    {
        $familiares = DB::table('fi_datos_basicos as fi')
            ->join('sis_nnajs as sn',  'sn.id', '=', 'fi.sis_nnaj_id')
            ->join('nnaj_docus as nd',  'nd.fi_datos_basico_id', '=', 'fi.id')
            ->join('sis_estas as se',  'se.id', '=', 'fi.sis_esta_id')
            ->where('sn.prm_escomfam_id', 228)
            ->get(['fi.id', 'nd.s_documento', 'fi.s_primer_nombre', 'fi.s_segundo_nombre', 'fi.s_primer_apellido', 'fi.s_segundo_apellido', 'se.s_estado']);

        return view('FichaIngreso.Beneficiarios.index', [
            'resultado' => $familiares
        ]);
    }

    public function edit($datos)
    {

        $familiar = FiDatosBasico::findOrFail($datos);
        return view('FichaIngreso.Beneficiarios.editar', [
            'tipoblac' => Tema::combo(119, true, false),
            'tipodocu' => Tema::combo(3, true, false),
            'grupsang' => Tema::combo(17, true, false),
            'factorrh' => Tema::combo(18, true, false),
            'sexoxxxx' => Tema::combo(11, true, false),
            'tipoblac' => Tema::combo(119, true, false),
            'condicio' => Tema::combo(366, true, false),
            'situmili' => Tema::combo(367, true, false),
            'tiplibre' => Tema::combo(33, true, false),
            'estacivi' => Tema::combo(19, true, false),
            'grupetni' => Tema::combo(20, true, false),
            'vestimen' => Tema::combo(290, true, false),
            'generoxx' => Tema::combo(12, true, false),
            'orientac' => Tema::combo(13, true, false),
            'pais_idx' => SisPai::combo(true, false),
            'localida' => SisLocalidad::combo(),
            'dependen' => User::getUpiUsuario(true, false),
            'neciayud' => Tema::combo(286, true, false),
            'poblindi' => Tema::combo(61, true, false),
            'familiar' => $familiar
        ]);
    }

    public function update(FiDatosBasicoUpdateRequest $request,  $objetoxx)
    {
        $fdatosb = FiDatosBasico::findOrFail($objetoxx);
        $user_edit = Auth::user()->id;
        $fdatosb->update([
            's_primer_nombre' => $request->s_primer_nombre,
            's_segundo_nombre' => $request->s_segundo_nombre,
            's_primer_apellido' => $request->s_primer_apellido,
            's_segundo_apellido' => $request->s_segundo_apellido,
            's_apodo' => $request->s_apodo,
            'prm_tipoblaci_id' => $request->prm_tipoblaci_id,
            'prm_estrateg_id' => $request->prm_tipoblaci_id,
            'prm_vestimenta_id' => $request->prm_tipoblaci_id,
            'user_edita_id' => $user_edit,
        ]);

        $sisnnaj = SisNnaj::findOrFail($fdatosb->sis_nnaj_id);
        $sisnnaj->fill([
            'prm_escomfam_id' => 227,
            'user_edita_id' => Auth::user()->id
        ]);
        $sisnnaj->save();

        NnajDocu::where('fi_datos_basico_id', $fdatosb->id)->update([
            's_documento' => $request->s_documento,
            'prm_ayuda_id' => $request->prm_ayuda_id,
            'prm_tipodocu_id' => $request->prm_tipodocu_id,
            'prm_doc_fisico_id' => $request->prm_doc_fisico_id,
            'sis_municipio_id' => $request->sis_municipioexp_id,
            'user_edita_id' => $user_edit,
        ]);
        NnajNacimi::where('fi_datos_basico_id', $fdatosb->id)->update([
            'd_nacimiento' => $request->d_nacimiento,
            'sis_municipio_id' => $request->sis_municipio_id,
            'user_edita_id' => $user_edit,
        ]);
        NnajSexo::create([
            'fi_datos_basico_id' => $fdatosb->id,
            's_nombre_identitario' => $request->s_nombre_identitario,
            'prm_sexo_id' => $request->prm_sexo_id,
            'prm_identidad_genero_id' => $request->prm_identidad_genero_id,
            'prm_orientacion_sexual_id' => $request->prm_orientacion_sexual_id,
            'sis_docfuen_id' =>  2,
            'sis_esta_id' =>  1,
            'user_crea_id' => $user_edit,
            'user_edita_id' => $user_edit,
        ]);
        NnajSitMil::create([
            'fi_datos_basico_id' => $fdatosb->id,
            'prm_situacion_militar_id' => $request->prm_situacion_militar_id,
            'prm_clase_libreta_id' => $request->prm_clase_libreta_id,
            'user_edita_id' => $user_edit,
            'sis_docfuen_id' =>  2,
        ]);
        NnajFocali::create([
            'fi_datos_basico_id' => $fdatosb->id,
            's_nombre_focalizacion' => $request->s_nombre_focalizacion,
            's_lugar_focalizacion' => $request->s_lugar_focalizacion,
            'sis_upzbarri_id' => $request->sis_upzbarri_id,
            'user_edita_id' => $user_edit,
            'sis_docfuen_id' =>  2,
        ]);
        NnajFiCsd::create([
            'fi_datos_basico_id' => $fdatosb->id,
            'prm_etnia_id' => $request->prm_etnia_id,
            'prm_poblacion_etnia_id' => $request->prm_poblacion_etnia_id,
            'prm_gsanguino_id' => $request->prm_gsanguino_id,
            'prm_factor_rh_id' => $request->prm_factor_rh_id,
            'prm_estado_civil_id' => $request->prm_estado_civil_id,
            'user_edita_id' => $user_edit,
            'sis_docfuen_id' =>  2,
            's_apodo' =>  $request->s_apodo
        ]);
        NnajUpi::create([
            'sis_nnaj_id' => $fdatosb->sis_nnaj_id ,
            'sis_depen_id' => $request->sis_depen_id,
            'prm_principa_id' => 227,
            'user_crea_id' => $user_edit,
            'user_edita_id' => $user_edit,
            'sis_esta_id' => 1
        ]);
        NnajDese::create([
            'sis_servicio_id' => $request->sis_servicio_id,
            'nnaj_upi_id' => $request->sis_depen_id,
            'prm_principa_id' => 227,
            'user_crea_id' => $user_edit,
            'user_edita_id' => $user_edit,
            'sis_esta_id' => 1
        ]);
        FiDiligenc::create([
            'fi_datos_basico_id' => $fdatosb->id,
            'diligenc'=> $request->diligenc,
            'fi_datos_basico_id => $fdatosb->id',
            'user_crea_id' => $user_edit,
            'user_edita_id' => $user_edit,
            'sis_esta_id' => 1
        ]);
        return redirect()->route('fidatbas.editar', ['objetoxx' => $fdatosb->id])->with('info', 'Familiar Agregado como Beneficiario.');
    }

    public function estrategia($id)
    {
        $estrategia = null;
        switch ($id) {
            case 650:
                $estrategia =  Parametro::find(235)->Combo;
                break;
            case 651:
                $estrategia =  Parametro::find(651)->Combo;
                break;
            case 445:
                $estrategia =  Parametro::find(445)->Combo;
                break;
            default:
                $estrategia =  Parametro::find(2503)->Combo;
                break;
        }

        return $estrategia;
    }

    public function servicio($id)
    {
        return NnajDese::getServiciosNnaj(['cabecera' => true, 'ajaxxxxx' => false, 'padrexxx' => $id]);
    }

    public function departam($id)
    {
        return SisDepartam::combo($id, false);
    }

    public function municipi($id)
    {
        return  SisMunicipio::combo($id, false);
    }

    public function neciayud($id)
    {
        if ($id == 228) {
            return Tema::combo(286, true, false);
        } else {
            return  Parametro::find(235)->Combo;
        }
    }

    public function upz($id)
    {
        return SisUpz::combo($id, false);
    }

    public function barrio($id)
    {
        return SisBarrio::combo($id, false);
    }
}

