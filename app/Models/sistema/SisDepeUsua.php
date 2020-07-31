<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisDepeUsua extends Model
{
    // use SoftDeletes;
    protected $table = 'sis_depen_user';
    protected $fillable = [
        'sis_depen_id',
        'i_prm_responsable_id',
        'user_crea_id',
        'user_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }

    public function sis_depen()
    {
        return $this->belongsTo(SisDepen::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = SisDepeUsua::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
