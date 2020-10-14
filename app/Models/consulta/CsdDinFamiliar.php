<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdDinFamiliar extends Model{
    protected $fillable = ['csd_id', 'descripcion', 'relevantes', 'prm_familiar_id', 'prm_hogar_id',
    'descripcion_0', 'prm_bogota_id', 'prm_traslado_id', 'jefe1', 'prm_jefe1_id', 'jefe2', 'prm_jefe2_id',
    'descripcion_1', 'prm_cuidador_id', 'descripcion_2', 'afronta', 'prm_norma_id', 'prm_conoce_id',
    'observacion', 'prm_actuan_id', 'porque', 'prm_solucion_id', 'prm_problema_id', 'prm_destaca_id',
    'prm_positivo_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function familiar(){
        return $this->belongsTo(Parametro::class, 'prm_familiar_id');
    }

    public function hogar(){
        return $this->belongsTo(Parametro::class, 'prm_hogar_id');
    }

    public function bogota(){
        return $this->belongsTo(Parametro::class, 'prm_bogota_id');
    }

    public function traslado(){
        return $this->belongsTo(Parametro::class, 'prm_traslado_id');
    }

    public function jefe1(){
        return $this->belongsTo(Parametro::class, 'prm_jefe1_id');
    }

    public function jefe2(){
        return $this->belongsTo(Parametro::class, 'prm_jefe2_id');
    }

    public function cuidador(){
        return $this->belongsTo(Parametro::class, 'prm_cuidador_id');
    }

    public function norma(){
        return $this->belongsTo(Parametro::class, 'prm_norma_id');
    }

    public function conoce(){
        return $this->belongsTo(Parametro::class, 'prm_conoce_id');
    }

    public function establece(){
        return $this->belongsTo(Parametro::class, 'prm_establece_id');
    }

    public function actuan(){
        return $this->belongsTo(Parametro::class, 'prm_actuan_id');
    }

    public function solucion(){
        return $this->belongsTo(Parametro::class, 'prm_solucion_id');
    }

    public function problema(){
        return $this->belongsTo(Parametro::class, 'prm_problema_id');
    }

    public function negativo(){
        return $this->belongsTo(Parametro::class, 'prm_negativo_id');
    }

    public function destaca(){
        return $this->belongsTo(Parametro::class, 'prm_destaca_id');
    }

    public function positivo(){
        return $this->belongsTo(Parametro::class, 'prm_positivo_id');
    }

    public function antecedentes(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_antecedente', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function problemas(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_problema', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function normas(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_norma', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function establecen(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_establecen', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function incumple(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_incumple', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }


    public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $dataxxxx['prm_tipofuen_id'] = 2315;
        $objetoxx = CsdDinFamiliar::create($dataxxxx);
      }
      $objetoxx->antecedentes()->detach();
      if($dataxxxx['antecedentes']){
          foreach ($dataxxxx['antecedentes'] as $d) {
              $objetoxx->antecedentes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
          }
      }
      $objetoxx->problemas()->detach();
      if($dataxxxx['problemas']){
          foreach ($dataxxxx['problemas'] as $d) {
              $objetoxx->problemas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
          }
      }
      $objetoxx->normas()->detach();
      if($dataxxxx['normas']){
          foreach ($dataxxxx['normas'] as $d) {
              $objetoxx->normas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
          }
      }
      $objetoxx->establecen()->detach();
      if($dataxxxx['establecen']){
          foreach ($dataxxxx['establecen'] as $d) {
              $objetoxx->establecen()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
          }
      }

      $objetoxx->incumple()->detach();
      if($dataxxxx['incumple']){
          foreach ($dataxxxx['incumple'] as $d) {
              $objetoxx->incumple()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
          }
      }

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
