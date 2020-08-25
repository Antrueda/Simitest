<?php

namespace app\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

class SisUpzbarri extends Model
{
    protected $fillable = ['sis_localupz_id', 'sis_barrio_id',  'sis_esta_id', 'user_crea_id', 'user_edita_id'];

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

    public function sis_barrio()
    {
        return $this->belongsTo(SisBarrio::class);
    }
    public function sis_localupz()
    {
        return $this->belongsTo(SisLocalupz::class);
    }
}
