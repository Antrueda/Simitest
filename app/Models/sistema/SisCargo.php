<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisCargo extends Model
{

    protected $fillable = ['s_cargo', 'activo', 'user_crea_id', 'user_edita_id'];
    protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public static function combo()
    {
        $comboxxx = ['' => 'Seleccione'];
        foreach (SisCargo::get() as $localida) {
            $comboxxx[$localida->id] = $localida->s_cargo;
        }
        return $comboxxx;
    }
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
        $dataxxxx['s_cargo'] = strtoupper($dataxxxx['s_cargo']);
        if ($objetoxx != '') {
            $objetoxx->update($dataxxxx);
        } else {
            $dataxxxx['user_crea_id'] = Auth::user()->id;
            $objetoxx = SisCargo::create($dataxxxx);
        }
        return $objetoxx;
        }, 5);
        return $usuariox;
    }

}
