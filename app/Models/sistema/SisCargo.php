<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisCargo extends Model
{

    protected $fillable = ['s_cargo','itiestan','itiegabe','itigafin', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
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
        $dataxxxx['itiestan']=$dataxxxx['itiestan']==''?0:$dataxxxx['itiestan'];
        $dataxxxx['itiegabe']=$dataxxxx['itiegabe']==''?0:$dataxxxx['itiegabe'];
        $dataxxxx['itigafin']=$dataxxxx['itigafin']==''?0:$dataxxxx['itigafin'];
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
