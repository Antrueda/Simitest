<?php

namespace App\Models\fichaIngreso;

use App\Models\fichaIngreso\FiJustrest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiJrFamiliar extends Model
{
    protected $fillable = [
        's_proceso',
        'i_tiempo',
        'i_veces',
        'fi_compfami_id',
        'i_prm_vigente_id',
        'i_prm_motivo_id',
        'i_prm_tiempo_id',
        'fi_justrest_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiJrFamiliar::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
    public function fi_justrest()
    {
        return $this->belongsTo(FiJustrest::class);
    }

    public static function combo($padrexxx, $cabecera, $ajaxxxxx)
    {
        $notinxxx = FiJrFamiliar::select(['fi_compfami_id'])->where('fi_justrest_id', $padrexxx->id)->get();
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = [
                    'valuexxx' => '',
                    'optionxx' =>  'Seleccione'
                ];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $componen = FiCompfami::where('sis_nnaj_id', $padrexxx->sis_nnaj_id)
            ->whereNotIn('id', $notinxxx)->get();
        foreach ($componen as $registro) {
            $nombrexx = $registro->sis_nnaj->fi_datos_basico->s_primer_nombre . ' ' . $registro->sis_nnaj->fi_datos_basico->s_segundo_nombre . ' ' .
                $registro->sis_nnaj->fi_datos_basico->s_primer_apellido . ' ' . $registro->sis_nnaj->fi_datos_basico->s_segundo_apellido;
            if ($ajaxxxxx) {
                $comboxxx[] = [
                    'valuexxx' => $registro->id,
                    'optionxx' =>  $nombrexx
                ];
            } else {
                $comboxxx[$registro->id] =  $nombrexx;
            }
        }
        return $comboxxx;
    }
}
