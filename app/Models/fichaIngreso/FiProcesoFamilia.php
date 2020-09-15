<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiProcesoFamilia extends Model
{
    protected $fillable = [
        'fi_justrest_id',
        'fi_compfami_id',
        's_proceso',
        'i_prm_vigente_id',
        'i_numero_veces',
        's_motivo',
        'i_hace_cuanto',
        'i_prm_tipo_tiempo_id',
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
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['fi_justrest_id']=FiJustrest::where('sis_nnaj_id',$dataxxxx['sis_nnaj_id'])->first()->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiProcesoFamilia::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
