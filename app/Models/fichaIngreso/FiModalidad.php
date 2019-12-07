<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiModalidad extends Model
{
    protected $fillable = [
        'fi_autorizacion_id',
        'i_prm_modalidad_id',
        'user_crea_id',
        'user_edita_id',
        'activo'
    ];

    protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function fi_autorizacion()
    {
        return $this->belongsTo(FiAutorizacion::class);
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function modalidades($padrexxx)
    {
        $vestuari = ['modalida' => FiModalidad::where('fi_autorizacion_id', $padrexxx)->first(), 'formular' => false];
        if ($vestuari['modalida'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
    public static function setModalidad($objetoxx, $dataxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $datosxxx = [
                'fi_autorizacion_id' => $objetoxx->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'activo' => 1,
            ];

            FiModalidad::where('fi_autorizacion_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['i_prm_modalidad_id'] as $diagener) {
                $datosxxx['i_prm_modalidad_id'] = $diagener;
                FiModalidad::create($datosxxx);
            }
            return $objetoxx;
        }, 5);
    }
}
