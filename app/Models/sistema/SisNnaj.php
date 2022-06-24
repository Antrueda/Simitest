<?php

namespace App\Models\sistema;

use App\Models\Acciones\Grupales\Educacion\IMatricula;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\User;
use App\Models\consulta\Csd;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfPerfilVoca;
use App\Models\sicosocial\Vsi;
use App\Models\fichaIngreso\FiSalud;
use App\Models\fichaIngreso\NnajUpi;
use Illuminate\Support\Facades\Auth;
use App\Models\Actaencu\AeAsistencia;
use App\Models\fichaIngreso\FiRazone;
use App\Models\Salud\Mitigacion\Vspa;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiFormacion;
use App\Models\fichaIngreso\FiViolencia;
use App\Models\fichaIngreso\FiBienvenida;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\FiObservacione;
use App\Models\Salud\Mitigacion\Vma\MitVma;
use App\Models\fichaIngreso\FiActividadestl;
use App\Models\fichaIngreso\FiVestuarioNnaj;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\fichaIngreso\FiGeneracionIngreso;
use App\Models\fichaIngreso\FiSituacionEspecial;
use App\Models\fichaIngreso\FiRedApoyoAntecedente;

class SisNnaj extends Model
{
    protected $fillable = ['id','sis_esta_id', 'user_crea_id', 'user_edita_id', 'prm_escomfam_id','simianti_id','prm_nuevoreg_id'];

    public function fi_datos_basico()
    {
        return $this->hasOne(FiDatosBasico::class, 'sis_nnaj_id');
    }

    public function FiBienvenida()
    {
        return $this->hasMany(FiBienvenida::class, 'sis_nnaj_id');
    }

    public function FiResidencia()
    {
        return $this->hasOne(FiResidencia::class, 'sis_nnaj_id');
    }

    public function getNnajDatosAttribute()
    {
        return
            $this->FiDatosBasico->first()->s_primer_nombre . ' ' .
            $this->FiDatosBasico->first()->s_segundo_nombre . ' ' .
            $this->FiDatosBasico->first()->s_primer_apellido . ' ' .
            $this->FiDatosBasico->first()->s_segundo_apellido . ' - ' .
            $this->FiDatosBasico->first()->s_documento;
    }

    public function Vsi()
    {
        return $this->hasMany(Vsi::class, 'sis_nnaj_id');
    }

    public function AiSalidaMayores()
    {
        return $this->hasMany(AiSalidaMayores::class, 'sis_nnaj_id');
    }

    public function AiReporteEvasion()
    {
        return $this->hasMany(AiReporteEvasion::class, 'sis_nnaj_id');
    }

    public function AiSalidaMenores()
    {
        return $this->hasMany(AiSalidaMenores::class, 'sis_nnaj_id');
    }

    public function AiRetornoSalida()
    {
        return $this->hasMany(AiRetornoSalida::class, 'sis_nnaj_id');
    }

    public function Vspa()
    {
        return $this->hasMany(Vspa::class, 'sis_nnaj_id');
    }

    public function MitVma()
    {
        return $this->hasMany(MitVma::class, 'sis_nnaj_id');
    }

    public function csds()
    {
        return $this->belongsToMany(Csd::class, 'csd_sis_nnaj', 'sis_nnaj_id', 'csd_id');
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function nnaj_upis()
    {
        return $this->hasMany(NnajUpi::class);
    }

    public function getNnajUpiAttribute()
    {
        $upixxxxx = [['valuexxx' => '', 'optionxx' => 'Sin responsable']];
        foreach ($this->nnaj_upis as $value) {
            if ($value->prm_principa_id == 227) {
                $upixxxxx = [$value->sis_depen->ComboAjax];
            }
        }
        $respuest = [$upixxxxx];

        return  $respuest;
    }
    public function fi_documentos_anexas()
    {
        return $this->hasMany(FiDocumentosAnexa::class);
    }
    public function getFotoNnajAttribute()
    {
        $respuest = 'adminlte/dist/img/avatar5.png';
        foreach ($this->fi_documentos_anexas as $key => $value) {
            if ($value->i_prm_documento_id == 2468 && $value->sis_esta_id==1) {
                $respuest = $value->s_ruta;
            }
        }
        return  $respuest;
    }
    public function getNnajUpiPrincipalAttribute()
    {
        $principa = '';
        foreach ($this->nnaj_upis as $value) {
            if ($value->prm_principa_id == 227) {
                $principa = $value->sis_depen_id;
            }
        }
        return  $principa;
    }

    public function getUpiNnaj($dataxxxx)
    {
        $principa = '';

        foreach ($dataxxxx as $value) {
            if ($value->prm_principa_id == 227) {
                $principa = $value->sis_depen;
            }
        }
        return  $principa;
    }
    public function getUpiPrincipalAttribute()
    {
        $upixxxxx=$this->nnaj_upis->where('prm_principa_id',227)->where('sis_esta_id',1)->first();
        
        return $upixxxxx;
    }

    public function getServicioNnaj($dataxxxx)
    {
        $servicio=$dataxxxx->where('prm_principa_id', 227)
        ->first()->nnaj_deses
        ->where('prm_principa_id', 227)
        ->first();
        if($servicio!=null){
            $servicio=$servicio->sis_servicio->s_servicio;
        }else{
            $servicio='';
        }
        return  $servicio;
    }
    ////
    public function getServicioPrincipalAttribute()
    {
        return $this->getServicioNnaj($this->nnaj_upis);
    }

    public function getResponsableAttribute()
    {
        $principa = '';
        $dependen ='';
        foreach ($this->getUpiNnaj($this->nnaj_upis)->getDepeUsua as $value) {
            if ($value->i_prm_responsable_id == 227) {
                $principa = $value->user;
                $dependen=$value;
            }
        }
        if($principa==''){
            $respuest = [['UPI SIN RESPONSABLE']];
        }else{
        $cargoxxx = $principa->sis_cargo;
        $nombrexx =
            $principa->s_primer_nombre . ' ' .
            $principa->s_segundo_nombre . ' ' .
            $principa->s_primer_apellido . ' ' .
            $principa->s_segundo_apellido;

        $respuest = [
            [$principa->id => $principa->s_documento . ' - ' . $nombrexx . ' - ' . $cargoxxx->s_cargo],
            [['valuexxx'=>$dependen->id, 'optionxx'=>  $dependen->nombre]],
            $cargoxxx->s_cargo,
        ];
        }


        return $respuest;
    }


    public function nnaj_depes()
    {
        return $this->hasOne(NnajUpi::class);
    }
    public function fi_compfamis()
    {
        return $this->hasMany(FiCompfami::class);
    }

    public function fiCompfami()
    {
        return $this->hasOne(FiCompfami::class);
    }
    public function fi_razone()
    {
        return $this->hasOne(FiRazone::class);
    }

    public function fi_observacion()
    {
        return $this->hasOne(FiObservacione::class);
    }

    public function csd_sis_nnaj()
    {
        return $this->hasOne(CsdSisNnaj::class);
    }

    public function fi_formacions()
    {
        return $this->hasOne(FiFormacion::class, 'sis_nnaj_id');
    }

    public function fi_saluds()
    {
        return $this->hasOne(FiSalud::class, 'sis_nnaj_id');
    }

    public function fi_generacion_ingresos()
    {
        return $this->hasOne(FiGeneracionIngreso::class, 'sis_nnaj_id');
    }

    public function fi_actividadestls()
    {
        return $this->hasOne(FiActividadestl::class, 'sis_nnaj_id');
    }

    public function fi_red_apoyo_actuals()
    {
        return $this->hasMany(FiRedApoyoActual::class, 'sis_nnaj_id');
    }

    public function fi_red_apoyo_antecedentes()
    {
        return $this->hasMany(FiRedApoyoAntecedente::class, 'sis_nnaj_id');
    }

    public function fi_justrests()
    {
        return $this->hasOne(FiJustrest::class, 'sis_nnaj_id');
    }

    public function fi_consumo_spas()
    {
        return $this->hasOne(FiConsumoSpa::class, 'sis_nnaj_id');
    }

    public function fi_violencias()
    {
        return $this->hasOne(FiViolencia::class, 'sis_nnaj_id');
    }

    public function fi_situacion_especials()
    {
        return $this->hasOne(FiSituacionEspecial::class, 'sis_nnaj_id');
    }

    public function scopePrmEscomfam($query, $id)
    {
        if($id) {
            return $query->where('prm_escomfam_id', $id);
        }
    }

    public function ae_asistencias()
    {
        return $this->belongsToMany(AeAsistencia::class);
    }

    public function fi_autorizacion()
    {
        return $this->hasOne(FiAutorizacion::class, 'sis_nnaj_id');
    }

    public function fi_vestuario_nnaj()
    {
        return $this->hasOne(FiVestuarioNnaj::class, 'sis_nnaj_id');
    }

    public function iMatriculaNnajs()
    {
        return $this->hasMany(IMatriculaNnaj::class);
    }
    public function MatriculaCursos()
    {
        return $this->hasMany(MatriculaCurso::class);
    }


    public function CuestionarioInteres()
    {
        return $this->hasMany(CgihCuestionario::class);
    }


    public function PerfilVocacional()
    {
        return $this->hasMany(PvfPerfilVoca::class);
    }

    public function getMatriculaAttribute()
    {
        $nnajxxxx ='';
        $matricul ='';
        if($this->iMatriculaNnajs->count()>0){  
            foreach($this->iMatriculaNnajs as $registro) {
                if($registro->sis_esta_id==1) {
                    $nnajxxxx=$registro->imatricula_id;
                    $matricul=IMatricula::where('id',$nnajxxxx)->first();
                    $matricul=$matricul->grado->numero;
                }
              }
            }
        
        return $matricul ;
    }
    
    public function calcularEdad($fecha)
    {
        return Carbon::parse($fecha)->age;
    }
}
