<?php

namespace app\Models;

use app\Models\Indicadores\InDocPregunta;
use app\Models\Indicadores\InPregunta;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
  protected $fillable = ['nombre', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function setNombreAttribute($value)
  {
    $this->attributes['nombre'] = strtoupper($value);
  }

  public function temas()
  {
    return $this->belongsToMany(Tema::class);
  }
  public function creador()
  {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor()
  {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function combobuscar($dataxxxx)
  {
    $comboxxx = [];

    $notinxxx = [];
    $document = InDocPregunta::where('id', $dataxxxx['document'])->first()->in_respuestas;

    foreach ($document as $pregunta) {
      $notinxxx[] = $pregunta->id;
    }
    foreach (Parametro::where('nombre', 'like', '%' . $dataxxxx['buscarxx'] . '%')->whereNotIn('id', $notinxxx)->get() as $registro) {
      $comboxxx[] = ['id' => $registro->id, 'label' => $registro->nombre, 'value' => $registro->nombre];
    }
    return $comboxxx;
  }
}
