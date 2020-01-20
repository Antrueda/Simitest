<?php

namespace App\Models\Indicadores;

use App\Models\sistema\SisEsta;
use App\Models\User;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Database\Eloquent\Model;

class InLigru extends Model
{
  protected $fillable = [
    'in_base_fuente_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id',
  ];


  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
  public function sis_esta()
  {
    return $this->belongsTo(SisEsta::class);
  }

  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }
  public function in_doc_preguntas(){
    return $this->hasMany(InDocPregunta::class);
  }
  public function in_base_fuente(){
    return $this->belongsTo(InBaseFuente::class);
  }
}
