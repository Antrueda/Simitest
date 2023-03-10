<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiMotivoVinculacion extends Model
{
    protected $fillable = [
        'fi_formacion_id',
        'prm_motivinc_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function fi_formacion()
    {
        return $this->belongsTo(FiFormacion::class);
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function motivos($padrexxx)
    {
        $vestuari = ['motivosx' => FiMotivoVinculacion::where('fi_formacion_id', $padrexxx)->first(), 'formular' => false];
        if ($vestuari['motivosx'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
    public static function setMotivosVinculacion($objetoxx, $dataxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $datosxxx = [
                'fi_formacion_id' => $objetoxx->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            // dd($dataxxxx);
            FiMotivoVinculacion::where('fi_formacion_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['prm_motivinc_id'] as $diagener) {
                $datosxxx['prm_motivinc_id'] = $diagener;
                FiMotivoVinculacion::create($datosxxx);
            }
            return $objetoxx;
        }, 5);
    }

    public function prm_motivinc()
    {
        return $this->belongsTo(Parametro::class, 'prm_motivinc_id');
    }
}
