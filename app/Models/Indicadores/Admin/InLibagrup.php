<?php

namespace App\Models\Indicadores\Admin;

use App\Models\Indicadores\Admin\InIndiliba;
use App\Models\Sistema\SisEsta;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InLibagrup extends Model
{
    protected $fillable = [
        'in_indiliba_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];


    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }

    public function user_crea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function user_edita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function in_indiliba()
    {
        return $this->belongsTo(InIndiliba::class);
    }

    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = InLibagrup::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
