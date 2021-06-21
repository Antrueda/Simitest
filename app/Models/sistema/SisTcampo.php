<?php

namespace app\Models\Sistema;

use App\Models\Indicadores\InCamrespu;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InPregunta;
use App\Models\Tema;
use App\Models\Temacombo;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisTcampo extends Model
{
    protected $fillable = [
        's_campo',
        's_descripcion',
        // 'in_pregunta_id',
        // 'temacombo_id',
        'sis_tabla_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class);
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function temacombo()
    {
        return $this->hasOne(Temacombo::class);
    }

    public function sis_tabla()
    {
        return $this->belongsTo(SisTabla::class);
    }
    // public function tema()
    // {
    //     return $this->belongsTo(Tema::class);
    // }

    // public static function comboTabla($padrexxx, $cabecera, $ajaxxxxx)
    // {
    //     $comboxxx = [];
    //     if ($cabecera) {
    //         $comboxxx = ['' => 'Seleccione'];
    //     } else {
    //         if ($ajaxxxxx) {
    //             $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
    //         }
    //     }
    //     $notinxxx = [];
    //     $docupreg = InDocPregunta::where('in_libagrup_id', $padrexxx->grupoxxx)
    //         ->where('sis_tabla_id', $padrexxx->tablaxxx)
    //         ->get();

    //     foreach ($docupreg as $docuprex) {
    //         $notinxxx[] = $docuprex->sis_tcampo_id;
    //     }

    //     foreach (SisTcampo::where('sis_tabla_id', $padrexxx->tablaxxx)->whereNotIn('id', $notinxxx)
    //         ->get() as $registro) {
    //         if ($ajaxxxxx) {
    //             $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_numero . ' ' . $registro->in_pregunta->s_pregunta];
    //         } else {
    //             $comboxxx[$registro->id] = $registro->s_numero . ' ' . $registro->in_pregunta->s_pregunta;
    //         }
    //     }
    //     return $comboxxx;
    // }

    public static function combo($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        } else {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            }
        }
        foreach (SisTcampo::where('sis_tabla_id', $padrexxx)->get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_descripcion];
            } else {
                $comboxxx[$registro->id] = $registro->s_descripcion;
            }
        }
        return $comboxxx;
    }
}
