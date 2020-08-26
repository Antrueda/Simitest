<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;


use app\Models\Parametro;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiBienvenida extends Model{
	protected $fillable = ['vsi_id', 'descripcion', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function motivos(){
        return $this->belongsToMany(Parametro::class,'vsi_bienvenida_motivo', 'vsi_bienvenida_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
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
            $objetoxx = VsiBienvenida::create($dataxxxx);
        }
        return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
