<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisBarrio extends Model
{
    protected $fillable = ['sis_upz_id', 's_barrio',  'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public static function combo( $idpadrex,$esajaxxx)
    {
        $comboxxx = [];
        if (!$esajaxxx)
            $comboxxx = ['' => 'Seleccione'];
            $barrioxx=SisBarrio::where(function ($dataxxxx) use ($idpadrex) {
            if ($idpadrex != '') {
                $dataxxxx->where('sis_upz_id', $idpadrex);
            }
        })->orderBY('s_barrio', 'asc')->get();


        foreach ( $barrioxx as $registro) {
            if ($esajaxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_barrio];
            } else {
                $comboxxx[$registro->id] = $registro->s_barrio;
            }
        }
        
        return $comboxxx;
    }


    public function sis_upz()
    {
        return $this->belongsTo(SisUpz::class, 'sis_upz_id');
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
