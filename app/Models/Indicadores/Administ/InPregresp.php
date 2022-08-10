<?php

namespace App\Models\Indicadores\Administ;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class InPregresp extends Model
{
  protected $fillable = [
    'in_grupregu_id',
    'prm_respuest_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function userCrea()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function userEdita()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public function inGrupregu()
  {
    return $this->belongsTo(InGrupregu::class);
  }

  public function prmRespuest()
  {
    return $this->belongsTo(Parametro::class,'prm_respuest_id');
  }

  
 
}
