<?php

namespace App\Models\fichaIngreso;

use App\Models\Sistema\SisEsta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiDiligenc extends Model
{
    protected $fillable = [
        'diligenc',
        'fi_datos_basico_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
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
    public function fi_datos_basico()
    {
        return $this->belongsTo(FiDatosBasico::class);
    }

    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            if (isset($objetoxx->fi_diligenc->id)) {
                $modeloxx = $objetoxx->fi_diligenc->update($dataxxxx);
            } else {
                $modeloxx = FiDiligenc::create($dataxxxx);
            }
            return $modeloxx;
        }, 5);
        return $usuariox;
    }
}