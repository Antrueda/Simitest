<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdBienvenida extends Model{
  
  protected $fillable = [
    'csd_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id', 'prm_persona_id','prm_tipofuen_id'
  ];

  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function csd(){
    return $this->belongsTo(Csd::class, 'csd_id');
  }

  public function persona(){
    return $this->belongsTo(Parametro::class, 'prm_persona_id');
  }

  public function motivos(){
    return $this->belongsToMany(Parametro::class,'csd_bienvenida_motivos', 'csd_bienvenida_id', 'parametro_id');
  }

  public function creador(){
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor(){
    return $this->belongsTo(User::class, 'user_edita_id');
  }


  public static function transaccion($dataxxxx)
  {
      $objetoxx = DB::transaction(function () use ($dataxxxx) {
          $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
          if ($dataxxxx['modeloxx'] != '') {
              $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
          } else {
              $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
              $dataxxxx['modeloxx'] = CsdBienvenida::create($dataxxxx['requestx']->all());
          }
          return $dataxxxx['modeloxx'];
      }, 5);
      return $objetoxx;
  }
}