<?php

namespace App\Models\Acciones\Grupales;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgRecurso extends Model
{
    protected $fillable = [
        's_recurso',
        'i_prm_trecurso_id',
        'i_prm_umedida_id',
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
    public function unidad()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_umedida_id');
    }

    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = AgRecurso::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    public static function combo($padrexxx, $cabecera, $ajaxxxxx, $selected)
    {
        $notinxxx =
            AgRecurso::select(['ag_recursos.id'])
            ->join('ag_relacions', 'ag_recursos.id', '=', 'ag_relacions.ag_recurso_id')
            ->where('i_prm_trecurso_id', $padrexxx)
            ->whereNotIn('ag_relacions.ag_recurso_id', $selected)
            ->get();
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        foreach (AgRecurso::where('i_prm_trecurso_id', $padrexxx)
            ->whereNotIn('id', $notinxxx)
            ->get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_recurso ];
            } else {
                $comboxxx[$registro->id] = $registro->s_recurso;
            }
        }
        return $comboxxx;
    }

    public static function comb($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach (AgRecurso::get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_recurso];
            } else {
                $comboxxx[$registro->id] = $registro->s_recurso;
            }
        }
        return $comboxxx;
    }
}
