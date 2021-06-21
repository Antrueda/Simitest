<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

class SisEslug extends Model
{
    protected $fillable = [
        'id',
        's_espaluga',
        'sis_esta_id',
        'user_crea_id',
        'estusuario_id',
        'user_edita_id',];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public function sis_depens(){
        return $this->belongsToMany(SisDepen::class);
    }

    public static function comb($cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        foreach (SisEslug::get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_subtema];
            } else {
                $comboxxx[$registro->id] = $registro->s_subtema;
            }
        }
        return $comboxxx;
    }

    public static function combo_lugar($dataxxxx)
    {
      $comboxxx = [];
      if ($dataxxxx['cabecera']) {
        if($dataxxxx['ajaxxxxx']){
          $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
        }else{
          $comboxxx = ['' => 'Seleccione'];
        }

      }
      $lugarxxx=SisEslug::where('id',$dataxxxx['aglugar'])->first();

        if ($dataxxxx['ajaxxxxx']) {
          $comboxxx[] = ['valuexxx' => $lugarxxx->id, 'optionxx' => $lugarxxx->s_espaluga];
        } else {
          $comboxxx[$lugarxxx->id] = $lugarxxx->s_espaluga;
        }

      return $comboxxx;
    }
}
