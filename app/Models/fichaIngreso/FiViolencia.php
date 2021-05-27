<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiViolencia extends Model
{
    protected $fillable = [
        'i_prm_presenta_violencia_id',
        'prm_ejerviol_id',
        'prm_cabefami_id',
        'i_prm_violencia_genero_id',
        'i_prm_condicion_presenta_id',
        'i_prm_depto_condicion_id',
        'i_prm_municipio_condicion_id',
        'i_prm_tiene_certificado_id',
        'i_prm_depto_certifica_id',
        'i_prm_municipio_certifica_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function fi_contviol()
    {
        return $this->hasMany(FiContviol::class);
    }

    public function prm_lesicome_id()
    {
        return $this->belongsToMany(Parametro::class, 'fi_lesicomes', 'fi_violencia_id', 'prm_lesicome_id');
    }

    public function prm_violbasa_id()
    {
        return $this->belongsToMany(Parametro::class, 'fi_violbasas', 'fi_violencia_id', 'prm_violbasa_id');
    }

    public function sis_nnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }
    public static function violencia($usuariox)
    {
        $vestuari = ['violenci' => FiViolencia::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

        if ($vestuari['violenci'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
    public static function setLesicome($dataxxxx, $objetoxx)
    {
        $datosxxx = [
            'fi_violencia_id' => $objetoxx->id,
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1,
        ];

        FiLesicome::where('fi_violencia_id', $objetoxx->id)->delete();
        foreach ($dataxxxx['prm_lesicome_id'] as $diagener) {
            $datosxxx['prm_lesicome_id'] = $diagener;
            FiLesicome::create($datosxxx);
        }
    }
    public static function setViolbasa($dataxxxx, $objetoxx)
    {
        $datosxxx = [
            'fi_violencia_id' => $objetoxx->id,
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1,
        ];

        FiViolbasa::where('fi_violencia_id', $objetoxx->id)->delete();
        foreach ($dataxxxx['prm_violbasa_id'] as $diagener) {
            $datosxxx['prm_violbasa_id'] = $diagener;
            FiViolbasa::create($datosxxx);
        }
    }

    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiViolencia::create($dataxxxx);
            }

            if (isset($dataxxxx['prm_lesicome_id'])) {
                FiViolencia::setLesicome($dataxxxx,  $objetoxx);
            }

            if (isset($dataxxxx['prm_violbasa_id'])) {
                FiViolencia::setViolbasa($dataxxxx,  $objetoxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public function i_prm_presenta_violencia()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_presenta_violencia_id');
    }

    public function prm_ejerviol()
    {
        return $this->belongsTo(Parametro::class, 'prm_ejerviol_id');
    }

    public function i_prm_violencia_genero()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_violencia_genero_id');
    }

    public function i_prm_condicion_presenta()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_condicion_presenta_id');
    }

    public function prm_cabefami()
    {
        return $this->belongsTo(Parametro::class, 'prm_cabefami_id');
    }

    public function fi_violbasas()
    {
        return $this->hasMany(FiViolbasa::class, 'fi_violencia_id');
    }

    public function fi_lesicomes()
    {
        return $this->hasMany(FiLesicome::class, 'fi_violencia_id');
    }
}
