<?php

namespace App\Models;

use App\Models\sistema\SisEsta;
use App\Traits\DateConversor;
use App\Models\Indicadores\InPregunta;
use Illuminate\Database\Eloquent\Model;
use App\Models\Indicadores\InDocPregunta;

class Parametro extends Model
{
    use DateConversor;

    protected $fillable = ['nombre', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = strtoupper($value);
    }
    public function getComboAttribute()
    {
        return [$this->id => $this->nombre];
    }
    public function getComboAjaxUnoAttribute()
    {
        return [['valuexxx' => $this->id, 'optionxx' => $this->nombre, 'selected' => 'selected']];
    }
    public function getComboAjaxRegistroAttribute()
    {
        return ['valuexxx' => $this->id, 'optionxx' => $this->nombre];
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
        foreach (Parametro::where('nombre', 'like', '%' . $dataxxxx['buscarxx'] . '%')->whereNotIn('id', $notinxxx)->orderBy('nombre')->get() as $registro) {
            $comboxxx[] = ['id' => $registro->id, 'label' => $registro->nombre, 'value' => $registro->nombre];
        }
        return $comboxxx;
    }

    public function lgtparametros()
    {
        return $this->hasMany(InLigruTemacomboParametro::class);
    }

    /**
     * Get the sis_esta that owns the Parametro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }

    public function temacombos()
    {
        return $this->belongsToMany(Temacombo::class);
    }
}
