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
        'i_prm_operaciones_id',
        'i_prm_estudia_id',
        'i_prm_jornada_estudio_id',
        'i_prm_naturaleza_entidad_id',
        's_institucion_edu',
        //'sis_institucion_edu_id',
        'i_dias_sin_estudio',
        'i_meses_sin_estudio',
        'i_anos_sin_estudio',
        'i_prm_ultimo_nivel_estudio_id',
        'i_prm_ultimo_grado_aprobado_id',
        'i_prm_certificado_ultimo_nivel_id',
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
    public function i_prm_motivo_vinc_id()
    {
        return $this->belongsToMany(Parametro::class, 'fi_motivo_vinculacions', 'fi_formacion_id', 'i_prm_motivo_vinc_id');
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
        foreach ($dataxxxx['i_prm_motivo_vinc_id'] as $registro) {
            $datosxxx['i_prm_motivo_vinc_id'] = $registro;
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

            if (isset($dataxxxx['i_prm_motivo_vinc_id'])) {
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
}
