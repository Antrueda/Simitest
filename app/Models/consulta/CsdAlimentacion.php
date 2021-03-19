<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdAlimentacion extends Model{

  protected $fillable = [
    'csd_id', 'user_crea_id', 'user_edita_id', 'cant_personas', 'prm_horario_id','sis_esta_id',
    'prm_apoyo_id', 'prm_entidad_id','prm_tipofuen_id'
  ];



  public function csd(){
    return $this->belongsTo(Csd::class, 'csd_id');
  }

  public function frecuencia(){
    return $this->belongsToMany(Parametro::class,'csd_aliment_frec', 'csd_alimentacion_id', 'parametro_id');
  }

  public function compra(){
    return $this->belongsToMany(Parametro::class,'csd_aliment_compra', 'csd_alimentacion_id', 'parametro_id');
  }

  public function ingeridas(){
    return $this->belongsToMany(Parametro::class,'csd_aliment_inge', 'csd_alimentacion_id', 'parametro_id');
  }

  public function horario(){
    return $this->belongsTo(Parametro::class, 'prm_horario_id');
  }

  public function prepara(){
    return $this->belongsToMany(Parametro::class,'csd_aliment_prepara', 'csd_alimentacion_id', 'parametro_id');
  }

  public function apoyo(){
    return $this->belongsTo(Parametro::class, 'prm_apoyo_id');
  }

  public function entidad(){
    return $this->belongsTo(Parametro::class, 'prm_entidad_id');
  }

  public function creador(){
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor(){
    return $this->belongsTo(User::class, 'user_edita_id');
  }

public function getAlimentosAttribute(){
    $preparax=$this->prepara()->count();
    $frecuenc=$this->frecuencia()->count();
    $ingerida=$this->ingeridas()->count();
    $compraxx=$this->compra()->count();
    $Alimentos=false;
    
    if ($preparax |$frecuenc||$ingerida||$compraxx) {
        $Alimentos=true;
         }
    return $Alimentos;

}
public static function transaccion($dataxxxx,$objetoxx)
{

  $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
    $dataxxxx['user_edita_id'] = Auth::user()->id;
    $dataxxxx['prm_tipofuen_id'] = 2315;
    $dataxxxx['sis_esta_id'] = 1;
    if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
    } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = CsdAlimentacion::create($dataxxxx);
    }
    $objetoxx->prepara()->detach();
    if($dataxxxx['prepara']){
        foreach ($dataxxxx['prepara'] as $d) {
            $objetoxx->prepara()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
        }
    }
    $objetoxx->frecuencia()->detach();
    if($dataxxxx['frecuencia']){
        foreach ($dataxxxx['frecuencia'] as $d) {
            $objetoxx->frecuencia()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
        }
    }
    $objetoxx->ingeridas()->detach();
    if($dataxxxx['ingeridas']){
        foreach ($dataxxxx['ingeridas'] as $d) {
            $objetoxx->ingeridas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
        }
    }
    $objetoxx->compra()->detach();
    if($dataxxxx['compra']){
        foreach ($dataxxxx['compra'] as $d) {
            $objetoxx->compra()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
        }
    }

 return $objetoxx;
}, 5);
return $usuariox;
}

    
}
