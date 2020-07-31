<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisDepeServ extends Model
{
    use SoftDeletes;
    protected $table = 'sis_depen_sis_servicio';
    protected $fillable = [
        'sis_depen_id',
        'sis_servicio_id',
        'user_crea_id',
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

    public function sis_servicio()
    {
        return $this->belongsTo(SisServicio::class);
    }

    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = SisDepeServ::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
