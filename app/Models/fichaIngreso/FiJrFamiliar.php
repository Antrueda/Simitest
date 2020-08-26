<?php

namespace App\Models\fichaIngreso;

use app\Models\fichaIngreso\FiJusticiaRestaurativa;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiJrFamiliar extends Model
{
    protected $fillable = [
        's_proceso',
        'i_tiempo',
        'i_veces',
        'fi_composicion_fami_id',
        'i_prm_vigente_id',
        'i_prm_motivo_id',
        'i_prm_tiempo_id',
        'fi_justicia_restaurativa_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1,'sis_esta_id'=>1];

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
            $dataxxxx['fi_justicia_restaurativa_id']=FiJusticiaRestaurativa::where('id',$dataxxxx['sis_nnaj_id'])->first()->id;
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
}
