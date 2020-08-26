<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Mensajes extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'sis_esta_id','user_crea_id','user_edita_id','user_id'];
    protected $attributes = ['sis_esta_id' => 1,'user_crea_id'=>1,'user_edita_id'=>1];
    
    public function user()
    {
        return $this->belongsTo(User::class);
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
        if ($objetoxx != '') {
            $objetoxx->update($dataxxxx);
        } else {
            $dataxxxx['user_crea_id'] = Auth::user()->id;
            $objetoxx = mensajes::create($dataxxxx);
        }
        return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
