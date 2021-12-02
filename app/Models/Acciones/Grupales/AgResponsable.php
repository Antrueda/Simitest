<?php

namespace App\Models\Acciones\Grupales;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class AgResponsable extends Model
{
  protected $fillable = [
    'i_prm_responsable_id',
    'user_id',
    'ag_actividad_id',
    'sis_obse_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'
  ];

  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public function ag_actividad()
  {
    return $this->belongsTo(AgActividad::class);
  }
}
