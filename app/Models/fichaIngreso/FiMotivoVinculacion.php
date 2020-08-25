<?php

namespace app\Models\fichaIngreso;

use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiMotivoVinculacion extends Model
{
    protected $fillable = [
        'fi_formacion_id',
        'i_prm_motivo_vinc_id',
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
            foreach ($dataxxxx['i_prm_motivo_vinc_id'] as $diagener) {
                $datosxxx['i_prm_motivo_vinc_id'] = $diagener;
                FiMotivoVinculacion::create($datosxxx);
            }
            return $objetoxx;
        }, 5);
    }
}
