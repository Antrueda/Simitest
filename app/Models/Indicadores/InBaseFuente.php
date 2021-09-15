<?php

namespace App\Models\Indicadores;

use App\Models\sistema\SisDocfuen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\sistema\SisDocumentoFuente;

class InBaseFuente extends Model
{
    protected $fillable = [
        'in_fuente_id',
        'sis_docfuen_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];
    public function in_fuente(){
        return $this->belongsTo(InFuente::class);
    }
    public function in_ligrus()
    {
        return $this->hasMany(InLigru::class);
    }
    public function sis_docfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }
    public static function comboPreguntas($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        $basefuent = InLigru::where('id', $padrexxx)->first();

        foreach ($basefuent->in_doc_preguntas as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->in_pregunta->id, 'optionxx' => $registro->in_pregunta->s_pregunta];
            } else {
                $comboxxx[$registro->in_pregunta->id] = $registro->in_pregunta->s_pregunta;
            }
        }
        return $comboxxx;
    }

    public static function combobuscar($dataxxxx)
    {
        $comboxxx = [];
        $basefuent = InDocPregunta::where('in_ligru_id', $dataxxxx['document'])->get();
        $notinxxx = [];
//echo count($basefuent->in_doc_preguntas);
        foreach ($basefuent as $pregunta) {
            $notinxxx[] = $pregunta->in_pregunta_id;
        }

        foreach (InPregunta::where('s_pregunta', 'like', '%' . $dataxxxx['buscarxx'] . '%')->whereNotIn('id', $notinxxx)->get() as $registro) {
            $comboxxx[] = ['id' => $registro->id, 'label' => $registro->s_pregunta, 'value' => $registro->s_pregunta];
        }
        return $comboxxx;
    }
    public static function setPregunta($dataxxxx)
    {
        $objetoxx = InBaseFuente::where('in_base_fuentes.id', $dataxxxx['document'])->first();

        $pregunta[] = $dataxxxx['pregunta'];
        //if (count($objetoxx->in_preguntas) > 0) {
        foreach ($objetoxx->in_doc_preguntas as $inpregun) {
            $pregunta[] = $inpregun->in_pregunta->id;
        }
        $objetoxx->in_doc_preguntas()->detach();
        //}
        $objetoxx->in_doc_preguntas()->attach($pregunta);
    }

    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = InBaseFuente::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
