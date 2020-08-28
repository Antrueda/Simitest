<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

class SisBarrio extends Model
{
    protected $fillable = ['s_barrio',  'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    public function sis_upzbarris()
    {
        return $this->hasMany(SisUpzbarri::class);
    }
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

    public static function combo($idpadrex, $esajaxxx)
    {
        $comboxxx = [];
        if (!$esajaxxx)
            $comboxxx = ['' => 'Seleccione'];
        $barrioxx = SisUpzbarri::where(function ($dataxxxx) use ($idpadrex) {
            $dataxxxx->where('sis_localupz_id', $idpadrex);
        })
            // ->orderBY('s_barrio', 'asc')
            ->get();


        foreach ($barrioxx as $registro) {
            if ($esajaxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->sis_barrio->s_barrio];
            } else {
                $comboxxx[$registro->id] = $registro->sis_barrio->s_barrio;
            }
        }

        return $comboxxx;
    }
}
