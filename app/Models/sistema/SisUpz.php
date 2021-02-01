<?php

namespace App\Models\Sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisUpz extends Model
{
    protected $fillable = ['s_upz', 's_codigo','simianti_id',   'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];



    public static function combo($idpadrex, $esajaxxx)
    {

        $comboxxx = [];
        if (!$esajaxxx)
            $comboxxx = ['' => 'Seleccione'];
        else
            $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
        $upzxxxxx = SisLocalupz::where(function ($dataxxxx) use ($idpadrex) {
            if ($idpadrex != '') {
                $dataxxxx->where('sis_localidad_id', $idpadrex);
            }
        })->get();
        foreach ($upzxxxxx as $registro) {
            if ($esajaxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->sis_upz->s_codigo . ' - ' . $registro->sis_upz->s_upz];
            } else {
                $comboxxx[$registro->id] = $registro->sis_upz->s_codigo . ' - ' . $registro->sis_upz->s_upz;
            }
        }
        return $comboxxx;
    }

    public function getCodigoNombreAttribute()
    {
        return $this->s_codigo . ' - ' . $this->s_upz;
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
