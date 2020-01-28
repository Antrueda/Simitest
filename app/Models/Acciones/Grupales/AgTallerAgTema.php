<?php

namespace App\Models\Acciones\Grupales;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AgTallerAgTema extends Pivot
{
    protected $fillable = [
    'ag_taller_id',
    "ag_tema_id",
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
  public function ag_taller()
  {
    return $this->belongsTo(AgTaller::class);
  }

  public function ag_tema()
  {
    return $this->belongsTo(AgTema::class);
  }
}
