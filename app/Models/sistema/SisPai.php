<?php

namespace app\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisPai extends Model
{
    protected $fillable = ['s_pais', 's_iso','simianti_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public function sis_departams()
    {
        return $this->belongsToMany(SisDepartam::class)->withTimestamps()->withPivot('simianti_id');
    }

    public static function combo($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera){
            if ($ajaxxxxx) {
                $comboxxx[] =  ['valuexxx'=>'' , 'optionxx'=>'Seleccione'];
            }else {
                $comboxxx = ['' => 'Seleccione'];
            }

        }

        foreach (SisPai::orderBy('s_pais')->get() as $sispaisx) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx'=>$sispaisx->id , 'optionxx'=>$sispaisx->s_pais];
            }else{
                $comboxxx[$sispaisx->id] = $sispaisx->s_pais;
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
}
