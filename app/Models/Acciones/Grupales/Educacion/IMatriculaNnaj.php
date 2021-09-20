<?php

namespace App\Models\Acciones\Grupales\Educacion;

use App\Models\Parametro;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisServicio;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IMatriculaNnaj extends Model
{
    protected $fillable = [
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
    public function imatricula()
    {
      return $this->belongsTo(IMatricula::class);
    }

    public function sis_nnaj()
    {
      return $this->belongsTo(SisNnaj::class);
    }

    public function grado(){
        return $this->belongsTo(Parametro::class, 'prm_grado');
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
}
