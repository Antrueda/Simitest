<?php

namespace App\Models\Acciones\Grupales\Educacion;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Grupales\Asistencias\Semanal\AsissemaMatricula;

class IMatriculaNnaj extends Model
{
    protected $fillable = [
        'id',
        'sis_nnaj_id',
        'imatricula_id',
        'prm_copdoc',
        'prm_certif',
        'prm_recupe',
        'prm_matric',
        's_grado',
        'asignatura',
        'observaciones',
        'user_crea_id',
        'user_edita_id',
        'numeromatricula',
        'prm_simianti',
        'sis_esta_id'
      ];

    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function iMatricula()
    {
      return $this->belongsTo(IMatricula::class,'imatricula_id');
    }

    public function sis_nnaj()
    {
      return $this->belongsTo(SisNnaj::class);
    }

    public function anti(){
      return $this->belongsTo(Parametro::class, 'prm_simianti');
  }

    public function grupo(){
        return $this->belongsTo(Parametro::class, 'prm_grupo');
    }

    public function estra(){
        return $this->belongsTo(Parametro::class, 'prm_estra');
    }



    public function prm_copdoc(){
        return $this->belongsTo(Parametro::class, 'prm_copdoc');
    }

    public function prm_certif(){
        return $this->belongsTo(Parametro::class, 'prm_certif');
    }

    public function prm_recupe(){
        return $this->belongsTo(Parametro::class, 'prm_recupe');
    }

    public function prm_matric(){
        return $this->belongsTo(Parametro::class, 'prm_matric');
    }


    public static function transaccion($dataxxxx,  $objetoxx)
    {
      $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        if ($objetoxx != '') {
          $objetoxx->update($dataxxxx);
        } else {
          $dataxxxx['user_crea_id'] = Auth::user()->id;
          $objetoxx = IMatriculaNnaj::create($dataxxxx);
        }
        return $objetoxx;
      }, 5);
      return $usuariox;
    }

    
    public function calcularEdad($fecha)
    {
        return Carbon::parse($fecha)->age;
    }

    public function ultimaPlanillasAsistencia(){
      return $this->hasMany(AsissemaMatricula::class,'matric_acade_id','id')->orderBy('created_at','DESC')->LIMIT(1);
    }
}
