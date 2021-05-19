<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiFormacion extends Model
{
    protected $fillable = [
        'i_prm_lee_id',
        'i_prm_escribe_id',
        'prm_operacio_id',
        'i_prm_estudia_id',
        'prm_jornestu_id',
        'prm_natuenti_id',
        's_institucion_edu',
        //'sis_institucion_edu_id',
        'diasines',
        'mesinest',
        'anosines',
        'prm_ultniest_id',
        'prm_ultgrapr_id',
        'prm_cerulniv_id',
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
    public function prm_motivinc_id()
    {
        return $this->belongsToMany(Parametro::class, 'fi_motivo_vinculacions', 'fi_formacion_id', 'prm_motivinc_id');
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function sis_nnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }
    public static function formacion($usuariox)
    {
        $vestuari = ['formacio' => FiFormacion::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];
        if ($vestuari['formacio'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }

    public static function getMotivoVinculacion($objetoxx)
    {
        $vestuari = ['vinculac' => [], 'formular' => false];

        if ($objetoxx == '') {
            $vestuari['formular'] = true;
        } else {
            $vestuari['vinculac'] = $objetoxx->fi_motivo_vinculacions;
        }
        return $vestuari;
    }
    private static function grabarMotivos($objetoxx, $dataxxxx)
    {
        FiMotivoVinculacion::where('fi_formacion_id', $objetoxx->id)->delete();
        $datosxxx = [
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1,
            'fi_formacion_id' => $objetoxx->id
        ];
        foreach ($dataxxxx['prm_motivinc_id'] as $registro) {
            $datosxxx['prm_motivinc_id'] = $registro;
            FiMotivoVinculacion::create($datosxxx);
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
                $objetoxx = FiFormacion::create($dataxxxx);
            }

            if (isset($dataxxxx['prm_motivinc_id'])) {
                FiMotivoVinculacion::setMotivosVinculacion($objetoxx, $dataxxxx);
            }

            $dataxxxx['sis_tabla_id'] = 14;
            IndicadorHelper::asignaLineaBase($dataxxxx);

            $dataxxxx['sis_tabla_id'] = 19;
            IndicadorHelper::asignaLineaBase($dataxxxx);

            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public function i_prm_lee()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_lee_id');
    }

    public function i_prm_escribe()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_escribe_id');
    }

    public function prm_operacio()
    {
        return $this->belongsTo(Parametro::class, 'prm_operacio_id');
    }

    public function i_prm_estudia()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_estudia_id');
    }

    public function prm_jornestu()
    {
        return $this->belongsTo(Parametro::class, 'prm_jornestu_id');
    }

    public function prm_ultniest()
    {
        return $this->belongsTo(Parametro::class, 'prm_ultniest_id');
    }

    public function prm_ultgrapr()
    {
        return $this->belongsTo(Parametro::class, 'prm_ultgrapr_id');
    }

    public function prm_cerulniv()
    {
        return $this->belongsTo(Parametro::class, 'prm_cerulniv_id');
    }

    public function fi_motivo_vinculacions()
    {
        return $this->hasMany(FiMotivoVinculacion::class, 'fi_formacion_id');
    }

}
