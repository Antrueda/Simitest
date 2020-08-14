<?php

namespace App\Models\Indicadores;

use App\Models\Parametro;
use App\Models\Sistema\SisTcampo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InDocPregunta extends Model
{

    protected $fillable = [
        'in_ligru_id',
        'sis_tcampo_id',
        'user_edita_id',
        'user_crea_id',
        'sis_esta_id'
    ];

    
    public function sis_tcampo()
    {
        return $this->belongsTo(SisTcampo::class);
    }
    public function in_ligru()
    {
        return $this->belongsTo(InLigru::class);
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = InDocPregunta::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }


    public static function setRespuesta($dataxxxx)
    {
        $objetoxx = InDocPregunta::where('id', $dataxxxx['pregunta'])->first();
        $pregunta[] = $dataxxxx['respuest'];
        foreach ($objetoxx->in_respuestas as $inpregun) {
            $pregunta[] = $inpregun->id;
        }
        $objetoxx->in_respuestas()->detach();

        $objetoxx->in_respuestas()->attach($pregunta);
    }
    public static function getRespuesta($inpregun, $ajaxxxxx)
    {
        $comboxxx = [];
        foreach ($inpregun->in_respuestas as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }
    
}
