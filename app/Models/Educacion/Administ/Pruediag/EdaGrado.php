<?php

namespace App\Models\Educacion\Administ\Pruediag;

use App\Models\sistema\SisEsta;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class EdaGrado extends Model
{
    protected $fillable = [
        's_grado',
        'numero',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }

    public function setSGradoAttribute($value)
    {
        if (isset($value)) {
            $this->attributes['s_grado'] = strtoupper($value);
        }
    }
    public function edaAsignatus()
    {
        return $this->belongsToMany(EdaAsignatu::class)->withTimestamps()->withPivot(['eda_asignatu_id','eda_grado_id']);
    }


    public static function combo($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx[] = [
                    'valuexxx' => '',
                    'optionxx' => 'Seleccione'
                ];
            } else {
                $comboxxx = [
                    '' => 'Seleccione'
                ];
            }
        }
        $parametr = EdaGrado::select(['id as valuexxx', 's_grado as optionxx'])
            ->where('sis_esta_id', '1')
            ->orderBy('s_grado', 'desc')
            ->get();
        foreach ($parametr as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = [
                    'valuexxx' => $registro->valuexxx,
                    'optionxx' => $registro->optionxx
                ];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }
}
